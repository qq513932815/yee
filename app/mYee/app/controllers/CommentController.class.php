<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 0:20
 */

class CommentController extends Controller
{
    public function addComment()
    {
        $article_id=$_POST["article_id"];
        $userid=$_POST["userid"];
        $voice_src=$_POST["voice_src"];
        $alltime=$_POST["alltime"];
        $model=new CommentModel();
        $data=[
            "userid"=>$userid,
            "pageid"=>$article_id,
            "content"=>$voice_src,
            "publictime"=>time(),
            "alltime"=>$alltime
        ];
        echo $model->add($data);
    }

    public function getComments()
    {
        $pageid=$_POST["pageid"];
//        $pageid=47;
        $model=new CommentModel();
        $sql="SELECT face,username,content,comment.publictime,comment.alltime s FROM comment LEFT JOIN user ON user.id=comment.userid WHERE  comment.pageid='$pageid'  ORDER BY publictime desc";
        $data=$model->query($sql);
        foreach ($data as &$v){
            $v['publictime'] = date("m月d日",$v['publictime']);
        }
        unset($v);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);

    }
    public function getAllComments()
    {
        $model=new CommentModel();
        $sql="SELECT c.id,a.title,u.username,c.content from comment c LEFT JOIN article a ON c.pageid=a.id LEFT JOIN user u ON c.userid=u.id ";
        $data=$model->query($sql);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    //删除评论
    public function removeComment()
    {
//        $id=$_POST["id"];
        $id=1;
        $model=new CommentModel();
        $count=$model->where(array("id='$id'"))->update(array("isdel"=>1));
        echo $count;
    }
    //恢复评论
    public function recoveryComment()
    {
        $id=1;
//        $id=$_POST["id"];
        $model=new CommentModel();
        $count=$model->where(array("id='$id'"))->update(array("isdel"=>0));
        echo $count;

    }
    //当事人评论
    public function getMasterComment()
    {
        $pageid=$_POST["pageid"];
        $userid=$_POST["userid"];
//        $pageid=151;
//        $userid=9;
        $model=new CommentModel();
        $sql="SELECT j.id,j.pageid,j.jingliid,j.uid,j.yuyindi,j.publictime,u.username,j.s,u.face FROM jingping j LEFT JOIN `user` u ON j.uid = u.id WHERE pageid='{$pageid}' AND jingliid='{$userid}'";
        $data=$model->query($sql);
        foreach ($data as &$v){
            $v['publictime'] = date("m月d日",$v['publictime']);
        }
        unset($v);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    //当事人发布
    public function getMasterContent()
    {
        $pageid=$_POST["pageid"];
        $userid=$_POST["userid"];

//        $pageid=151;
//        $userid=7;
        $model=new CommentModel();

        $sql="SELECT  m.id,m.pageid,m.jingid,jingtext,u.face jingimg,u.username jingname FROM `master` m LEFT JOIN `user` u ON m.jingid = u.id WHERE pageid='{$pageid}' AND jingid = '{$userid}'";
        $data=$model->query($sql);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);

    }

    //增加当事人评论
    public function addMasterComment()
    {
        $article_id=$_POST["article_id"];
        $userid=$_POST["userid"];
        $voice_src=$_POST["voice_src"];
        $alltime=$_POST["alltime"];
        $username=$_POST["username"];
        $face=$_POST["face"];
        $face="static/images/".explode("/",$face)[count(explode("/",$face))-1];

        $jingliid=$_POST["jingliid"];
        $model=new CommentModel();
        $model->changeTableName("jingping");
        $data=[
            "uid"=>$userid,
            "jingliid"=>$jingliid,
            "pageid"=>$article_id,
            "yuyindi"=>$voice_src,
            "publictime"=>time(),
            "s"=>$alltime,
            "username"=>$username,
            "face"=>$face
        ];

        echo $model->add($data);


    }

}