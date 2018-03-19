<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2017/12/29
 * Time: 16:25
 */

class View
{
    protected $vars=array();
    protected $con_name;
    protected $method_name;
    public function __construct($con_name,$method_name)
    {
        $this->con_name=strtolower($con_name);
        $this->method_name=$method_name;
    }
    public function assgin($key,$value)
    {
        $this->vars[$key]=$value;
    }
    public function disPlay()
    {
        //分配变量
        extract($this->vars);
        //默认头部
        $default_header=ROOT_PATH."app/views/header.php";
        $header_path=ROOT_PATH."app/views/{$this->con_name}/header.php";
        if(!file_exists($header_path)){
            require_once $default_header;
        }
        else{
            require_once $header_path;
        }
        //中间部分
        $content=ROOT_PATH."app/views/{$this->con_name}/".lcfirst($this->method_name).".php";
        if(file_exists($content)){
            require_once $content;
        }
        else{
            die("{$content} does not exists");
        }
        //默认底部
        $default_footer=ROOT_PATH."app/views/footer.php";
        $footer_path=ROOT_PATH."app/views/{$this->con_name}/footer.php";
        if(!file_exists($footer_path)){
            require_once $default_footer;
        }
        else{
            require_once $footer_path;
        }


    }

}