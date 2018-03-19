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

    public function changeTableName($table_name)
    {
        $this->table_name=$table_name;
    }

}