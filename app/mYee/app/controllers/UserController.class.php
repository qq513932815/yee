<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/15
 * Time: 19:24
 */

class UserController extends Controller
{
//    登录
    public function isLogin()
    {

        $pass = "";
        $phone = "";
        if (isset($_POST["phone"])) {
            $phone = $_POST["phone"];
        }
        if (isset($_POST["password"])) {
            $pass = $_POST["password"];
        }

        $model = new UserModel();
        $data = $model->where(array("(username='{$phone}' OR phone='{$phone}')", "AND password='{$pass}'"))->selectAll();
        $count = $model->getCount();
        if ($count > 0) {

            //进行签到连续天数处理
            if (time() - $data[0]["last_sign"] > 172800) {
                $model = new UserModel();
                $msg = [
                    "sign_count" => 0
                ];
                $model->where(array("(id='{$data[0]['id']}')"))->update($msg);
            }
            //记录最后登录时间
            $model=new UserModel();
            $msg=[
                "last_login"=>time()
            ];
            $model->where(array("(id='{$data[0]['id']}')"))->update($msg);

            //返回用户登录后信息
            $info = $this->isSign($data[0]["id"]);
            $arr = [
                        "issign" => $info["issign"],
                        "userid"=>$data[0]["id"],
                        "sign_count" => $info["sign_count"],
                        "islogin" => 1,
                        "face"=>$data[0]["face"],
                        "phone"=>$data[0]["phone"],
                        "username"=>$data[0]["username"],
                        "score"=>$data[0]["score"]
                        ];

            echo json_encode($arr, JSON_UNESCAPED_UNICODE);
        } else {
            echo 0;
        }

    }

//    注册
    public function register()
    {
        $strs = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $username = "";
        for ($i = 0; $i < 6; $i++) {
            $username .= $strs[rand(0, count($strs) - 1)];
        }
        for ($i = 0; $i < 3; $i++) {
            $username .= rand(0, 9);
        }
        $pass = $_POST["password"];
        $phone = $_POST["phone"];
        $model = new UserModel();
        $data = $model->where(array("phone='{$phone}'"))->selectAll();
        $count = $model->getCount();
        $facearr=[];
        for($i=0;$i<28;$i++){
            $facearr[]="static/images/face/".($i+1).".jpg";
        }
        $face=$facearr[rand(0,27)];
        if ($count > 0) {
            echo 2;
        } else {
            $model = new UserModel();
            $data = [
                "username" => $username,
                "password" => $pass,
                "phone" => $phone,
                "face"  => $face,
                "last_login"=>time()
            ];
            echo $model->add($data);

        }
    }

    //是否可以签到天数以及签到天数
    public function isSign($id)
    {
        $model = new UserModel();
        $data = $model->where(array("id='{$id}'"))->select();
        $is_sign = $data["issign"];
        $sign_count = $data["sign_count"];
        return array("issign" => $is_sign, "sign_count" => $sign_count);

    }

    //增加签到数
    public function addSign()
    {
        $id = 1;
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
        }
        $model = new UserModel();
        $time=time();
        $sql = "UPDATE user SET sign_count= sign_count+1,score=score+1,last_sign='$time'  WHERE id='{$id}'";
        echo $model->where(array("id={$id}"))->changeQuery($sql);
    }
    //用户评论过的博客
    public function getTalkArticle()
    {
        $userid=$_POST["userid"];
        $model=new UserModel();
        $sql="SELECT * FROM comment LEFT JOIN article ON comment.pageid=article.id WHERE comment.userid='$userid' ";
        $data=$model->query($sql);
    }

    //用户参与过的博客
    public function getTakePartArticle()
    {
        $userid=$_POST["userid"];

        $model=new UserModel();
        $sql="SELECT * FROM article WHERE id in(SELECT pageid from comment WHERE userid='$userid' GROUP  BY pageid)";
        $data=$model->query($sql);
        foreach ($data as &$v){
            $v['publictime'] = date("m月d日",$v['publictime']);
        }
        unset($v);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);

    }

    //用户经历过的博客
    public function getExperienceArticle()
    {
        $userid=$_POST["userid"];
        $model=new UserModel();
        $sql="SELECT * FROM article WHERE id in(SELECT pageid from shen WHERE uid='$userid' AND tai=1 GROUP  BY pageid)";
        $data=$model->query($sql);
        foreach ($data as &$v){
            $v['publictime'] = date("m月d日",$v['publictime']);
        }
        unset($v);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);

    }


    //禁用用户
    public function banUser()
    {
        $id=$_POST["id"];
        $usermodel=new UserModel();
        $count=$usermodel->banUser($id);
        echo $count;
    }
    //解封用户
    public function removeBanUser()
    {
        $id=$_POST["id"];
        $usermodel=new UserModel();
        $count=$usermodel->removeBanUser($id);
        echo $count;

    }
    //显示全部用户信息
    public function getAllUsers()
    {
        $model=new UserModel();
        $data= $model->selectAll();
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
    //更新用户名
    public function updateUsername()
    {
        $userid=$_POST["userid"];
        $username=$_POST["username"];
        $model=new UserModel();
        echo $model->where(array("id='$userid'"))->update(array("username"=>$username));
    }
    //更新密码
    public function updatePassword()
    {
        $userid=$_POST["userid"];
        $password=$_POST["password"];
        $model=new UserModel();
        echo $model->where(array("id='$userid'"))->update(array("password"=>$password));
    }
    //更新头像
    public function updateFace()
    {
        $userid=$_POST["userid"];
        $face=$_POST["face"];
        $model=new UserModel();
        echo $model->where(array("id='$userid'"))->update(array("face"=>$face));
    }

    //对应文章的经历人
    public function getExperienceUser()
    {
        $pageid=$_POST["pageid"];
        $model=new UserModel();

        $sql="SELECT pageid,uid,u.face,text,name from shen s LEFT JOIN `user` u ON s.uid = u.id
WHERE pageid='{$pageid}' AND tai=1";
        $data=$model->query($sql);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }





}