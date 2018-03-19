<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 2:32
 */

class ArticleModel extends Model
{
    protected  $table_name="article";

    public function __construct()
    {
        parent::__construct($this->table_name);
    }
    public function getLimit($page,$size)
    {
        $page=($page-1)*$size;
        $allPageCount=ceil(count($this->selectAll())/$size);
        return array("data"=>$this->limit(array($page,$size))->order(array("publictime desc"))->selectAll(),"allPageCount"=>$allPageCount);
    }

}