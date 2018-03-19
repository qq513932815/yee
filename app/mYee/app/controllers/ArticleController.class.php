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

    public function getLimitArticles($page,$size)
    {
        $model=new ArticleModel();
        $data=$model->getLimit($page,$size)["data"];
        foreach ($data as &$v){
            $v['publictime'] = date("m月d日",$v['publictime']);
        }
        unset($v);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
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