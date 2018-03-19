<?php
/**
 * Created by PhpStorm.
 * User: LXT
 * Date: 2018/1/18
 * Time: 17:15
 */
class LoginModel extends Model
{

    protected  $table_name="admin";

    public function __construct()
    {
        parent::__construct($this->table_name);
    }

    public function isLogin($username,$password)
    {
        $isexists = false;
        $arr = $this->where(array("user='{$username}'","AND pass='{$password}'"))->select();
        if($arr){
            $isexists = true;
        }
        echo $isexists;
    }
}