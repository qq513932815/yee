<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 0:00
 */

class UploadController extends Controller
{
    public function upLoad()
    {
//        (($_FILES["voice"]["type"] == "audio/amr")
//            || ($_FILES["voice"]["type"] == "audio/3gp")
//            || ($_FILES["voice"]["type"] == "audio/mp3"))
        if (1)
        {

            if ($_FILES["voice"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["voice"]["error"] . "<br />";
            }
            else
            {

                $path=time().".".explode(".",$_FILES["voice"]["name"])[1];
                if (file_exists(ROOT_PATH."static/upload/" . $_FILES["voice"]["name"]))
                {
                    echo $_FILES["voice"]["name"] . " already exists. ";
                }
                else
                {
                    $file=ROOT_PATH."static/upload/" . $path;
//                    echo $file;

                    move_uploaded_file($_FILES["voice"]["tmp_name"],$file);

                    require_once ROOT_PATH."getID3/getid3/getid3.php";
                    $getID3 = new getID3();    //实例化类

                    $ThisFileInfo = $getID3->analyze($file); //分析文件，$path为音频文件的地址

                    $fileduration=$ThisFileInfo['playtime_seconds']; //这个获得的便是音频文件的时长
                    $fileduration=(int)$fileduration;
                    $p="static/upload/".$path;
                     $ret=array("time"=>$fileduration,"path"=>$p);
                     echo json_encode($ret,JSON_UNESCAPED_UNICODE);


                }
            }
        }
        else
        {
            echo "Invalid file";
        }
    }
}