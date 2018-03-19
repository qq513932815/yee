<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/15
 * Time: 19:24
 */

class UserModel extends Model
{
    protected  $table_name="user";

    public function __construct()
    {
        parent::__construct($this->table_name);
    }
    public function banUser($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("ban"=>"1"));
        return $count;

    }
    public function removeBanUser($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("ban"=>"0"));
        return $count;

    }


}