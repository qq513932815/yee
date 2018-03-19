<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2017/12/28
 * Time: 13:44
 */

class Controller
{
    protected $con_name;
    protected $method_name;
    protected $view;

    public function __construct($con_name, $method_name)
    {
        $this->con_name = $con_name;
        $this->method_name = $method_name;
        $this->view = new View($this->con_name, $this->method_name);

    }



    public function assgin($key,$value)
    {
        $this->view->assgin($key,$value);

    }


    public function disPlay()
    {
        $this->view->disPlay();
    }
}