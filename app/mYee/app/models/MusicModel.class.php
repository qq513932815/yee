<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 22:42
 */

class MusicModel extends Model
{
    protected  $table_name="music";

    public function __construct()
    {
        parent::__construct($this->table_name);
    }

}