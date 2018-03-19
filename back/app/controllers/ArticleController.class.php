<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 2:32
 */

class ArticleController extends Controller
{
    public function getArticles()
    {
        $model=new ArticleModel();
        $data=$model->order(array("publictime desc"))->selectAll();
        foreach ($data as &$v){
                $v['publictime'] = date("Y年m月d日",$v['publictime']);
        }
        unset($v);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    //发布文章
    public function pubArticle()
    {
//        title:title,content:ArticalText,type:'社会',publictime:tmp,state:'0',isdel:'0'
        $title = $_POST['title'];
        $content = $_POST['content'];
        $type = $_POST['type'];
        $publictime = $_POST['publictime'];
        $state = $_POST['state'];
        $isdel = $_POST['isdel'];
        $data = array("title"=>$title,"content"=>$content,"img"=>"20180116193134_a06b06e197cd777e1c9a3ae46eeb9ddb_1.jpeg","type"=>$type,"publictime"=>$publictime,"state"=>$state,"isdel"=>$isdel);
        $model=new ArticleModel();
        $count = $model->pubArticle($data);
        echo $count;
    }

    public function getArticleDetail()
    {
        //详情
    }

    //删除文章
    public function removeArticle()
    {
        $id=$_POST["id"];
        $usermodel=new ArticleModel();
        $count=$usermodel->where(array("id='$id'"))->update(array("isdel"=>1));
        echo $count;
    }
    //恢复文章
    public function recoveryArticle()
    {
        $id=$_POST["id"];
        $usermodel=new ArticleModel();
        $count=$usermodel->where(array("id='$id'"))->update(array("isdel"=>0));
        echo $count;

    }

}