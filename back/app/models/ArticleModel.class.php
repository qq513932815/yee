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

    //发布文章
    public function pubArticle($data)
    {
        $count = $this->add($data);
        return $count;
    }

    //回收
    public function banText($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("isdel"=>"1"));
        return $count;

    }

    //恢复
    public function removeBanText($id)
    {
        $count=$this->where(array("id={$id}"))->update(array("isdel"=>"0"));
        return $count;

    }

    //查询未回收文章
    public function selectNotBan()
    {
        $user_not_ban = $this->where(array("isdel='0'"))->selectAll();
        return $user_not_ban;
    }

    //查询回收文章
    public function selectBan()
    {
        $user_ban = $this->where(array("isdel='1'"))->selectAll();
        return $user_ban;
    }

    //查询未回收文章条数
    public function selectNotBanNum()
    {
        $user_not_ban = $this->where(array("isdel='0'"))->selectAll();
        $user_not_ban_num = count($user_not_ban);
        return $user_not_ban_num;
    }

    //查询回收文章条数
    public function selectBanNum()
    {
        $user_ban = $this->where(array("isdel='1'"))->selectAll();
        $user_ban_num = count($user_ban);
        return $user_ban_num;
    }
}