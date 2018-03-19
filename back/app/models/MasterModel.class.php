<?php
/**
 * Created by PhpStorm.
 * User: LXT
 * Date: 2018/1/18
 * Time: 16:37
 */

class MasterModel extends Model
{
    protected  $table_name="master";

    public function __construct()
    {
        parent::__construct($this->table_name);
    }

    //插入经历者信息
    public function addMaster($data)
    {
        $count = $this->add($data);
        return $count;
    }
}