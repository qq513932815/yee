<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 0:20
 */
error_reporting(0);
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
            $v['publictime'] = date("Y年m月d日",$v['publictime']);
        }
        unset($v);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);

    }



    //删除音乐
    public function removeComment()
    {
        $id=$_POST["id"];
//        $id=1;
        $model=new CommentModel();
        $count=$model->where(array("id='$id'"))->update(array("isdel"=>1));
        echo $count;
    }
    //恢复音乐
    public function recoveryComment()
    {
//        $id=1;
        $id=$_POST["id"];
        $model=new CommentModel();
        $count=$model->where(array("id='$id'"))->update(array("isdel"=>0));
        echo $count;

    }

}