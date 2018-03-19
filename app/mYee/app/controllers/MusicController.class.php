<?php
/**
 * Created by PhpStorm.
 * User: 王世鹏
 * Date: 2018/1/16
 * Time: 22:41
 */

class MusicController extends Controller
{
    public function getRecommendMusic()
    {
        $pageid=$_POST["pageid"];
//        $pageid=150;
        $model=new MusicModel();
        $sql="SELECT * FROM fenmusic f LEFT  JOIN music m ON f.musicid=m.id WHERE pageid='$pageid' ";
        $data=$model->query($sql);

       echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
    public function getAllMusic()
    {
        $model=new MusicModel();
        $data=$model->selectAll();
        print_r($data);

    }

}