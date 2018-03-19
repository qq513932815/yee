<?php
/**
 * Created by PhpStorm.
 * User: LXT
 * Date: 2018/1/18
 * Time: 11:47
 */

class ExperModel extends Model
{
    protected  $table_name="shen";

    public function __construct()
    {
        parent::__construct($this->table_name);
    }

    //通过
    public function passUser($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("tai"=>"1"));
        return $count;

    }

    //驳回
    public function removePassUser($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("tai"=>"0"));
        return $count;
    }

    //查询经历者待审核列表
    public function selectNotPass()
    {
        $sql="SELECT s.id,s.pageid,s.shentime,s.name,s.face,s.phone,s.text,s.uid,a.title FROM shen s LEFT JOIN article a ON s.pageid=a.id WHERE s.tai=0;";
        $user_not_pass=$this->query($sql);
        return $user_not_pass;
    }

    //查询经历者待审核列表
    public function selectPass()
    {
        $sql="SELECT s.id,s.pageid,s.shentime,s.name,s.face,s.phone,s.text,s.uid,a.title FROM shen s LEFT JOIN article a ON s.pageid=a.id WHERE s.tai=1;";
        $user_not_pass=$this->query($sql);
        return $user_not_pass;
    }


}