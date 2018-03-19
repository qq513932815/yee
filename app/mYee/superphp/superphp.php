<?php

$ROOT_PATH=dirname($_SERVER["SCRIPT_FILENAME"])."/";
defined("ROOT_PATH") or define("ROOT_PATH",$ROOT_PATH);
defined("FRAME_PATH") or define("FRAME_PATH",__DIR__."/");
defined("CONFIG_PATH")  or define("CONFIG_PATH",$ROOT_PATH."config/");
defined("RUN_PATH")  or define("RUN_PATH",$ROOT_PATH."run/");
//调用数据库配置信息文件
require_once CONFIG_PATH."config.php";
//调用框架核心php文件
require_once FRAME_PATH."Core.php";
$c=new Core();
$c->run();