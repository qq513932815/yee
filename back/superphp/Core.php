<?php

class Core
{
    public function __construct()
    {
        spl_autoload_register(array("self", "autoLoadClass"));
    }

    public function run()
    {
        $this->route();


    }

    public function route()
    {


        if (!empty($_GET["url"])) {
            $url = $_GET["url"];
            $url = explode("/", $url);
            $class_name = array_shift($url);
            $method_name = array_shift($url);
            $params = $url;
            //类名
            $class_name = empty($class_name) ? "index" : ucfirst($class_name);
            $c_name=$class_name. "Controller";
            //方法名
            $method_name = empty($method_name) ? "index" : $method_name;
            //参数
            $params = empty($params) ? array() : $params;
            //声明一个控制器的实例
            $con = new $c_name($class_name,$method_name);
            if (method_exists($con, $method_name)) {
                //调用所属类的对应方法
                call_user_func_array(array($con, $method_name), $params);
            } else {
                die("{$method_name} does not exists");
            }


        } else {
            die("404 not find!");
        }


    }

    public static function autoLoadClass($class)
    {
        $class = ucfirst($class);
        //引入app中控制器的class
        $con_path = ROOT_PATH . "app/controllers/" . $class . ".class.php";
        if (file_exists($con_path)) {
            require_once $con_path;
        } else {

        }
        //引入app中models的class
        $model_path = ROOT_PATH . "app/models/" . $class . ".class.php";
        if (file_exists($model_path)) {
            require_once $model_path;
        } else {

        }
        //引入框架中Sql的class
        $sql_path = FRAME_PATH . "db/Sql.class.php";
        if (file_exists($sql_path)) {
            require_once $sql_path;
        } else {

        }
        //引入框架基类class
        $base_path = FRAME_PATH . "base/" . $class . ".class.php";
        if (file_exists($base_path)) {
            require_once $base_path;
        } else {
//            echo $base_path;
        }
    }
}