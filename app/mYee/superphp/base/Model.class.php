<?php

class Model extends Sql
{
    public function __construct($table_name)
    {
        $this->connect();
        $this->table_name =$table_name;

    }

}