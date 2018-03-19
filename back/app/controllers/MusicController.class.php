<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 22:41
 */
//error_reporting(0);

class MusicController extends Controller
{



    public function getRecommendMusic()
    {
        $model=new MusicModel();
        $data=$model->selectAll();
        $music_arr=[];
       for($i=0;$i<10;$i++)
       {
           $music_arr[]=$data[rand(0,count($data)-1)];
       }
       echo json_encode($music_arr,JSON_UNESCAPED_UNICODE);
    }


}