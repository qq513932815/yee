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

    //封号
    public function banUser($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("ban"=>"1"));
        return $count;

    }

    //解封
    public function removeBanUser($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("ban"=>"0"));
        return $count;
    }

    //查询未被封号的用户
    public function selectNotBan()
    {
        $user_not_ban = $this->where(array("ban='0'"))->selectAll();
        return $user_not_ban;
    }

    //查询被封号的用户
    public function selectBan()
    {
        $user_ban = $this->where(array("ban='1'"))->selectAll();
        return $user_ban;
    }


}