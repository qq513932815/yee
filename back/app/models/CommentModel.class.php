<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 0:20
 */

class CommentModel extends Model
{
    protected  $table_name="comment";

    public function __construct()
    {
        parent::__construct($this->table_name);
    }

    //回收
    public function banComment($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("isdel"=>"1"));
        return $count;

    }

    //恢复
    public function removeBanComment($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("isdel"=>"0"));
        return $count;

    }

    //查询未回收文章
    public function getNotBanComments()
    {
        $sql="SELECT c.id,c.publictime,a.title,u.username,c.content,c.alltime from comment c LEFT JOIN article a ON c.pageid=a.id LEFT JOIN user u ON c.userid=u.id WHERE c.isdel=0";
        $data=$this->query($sql);
        return $data;
    }

    //查询回收文章
    public function getBanComments()
    {
        $sql="SELECT c.id,c.publictime,a.title,u.username,c.content,c.alltime from comment c LEFT JOIN article a ON c.pageid=a.id LEFT JOIN user u ON c.userid=u.id WHERE c.isdel=1";
        $data=$this->query($sql);
        return $data;
    }
}