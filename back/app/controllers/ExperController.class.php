<?php
/**
 * Created by PhpStorm.
 * User: LXT
 * Date: 2018/1/18
 * Time: 11:49
 */

class ExperController extends Controller
{
    //审核用户
    public function passUser()
    {
        $id=$_POST["id"];
        $usermodel=new ExperModel();
        $count=$usermodel->passUser($id);
        echo $count;
    }
    //驳回用户
    public function removePassUser()
    {
        $id=$_POST["id"];
        $usermodel=new ExperModel();
        $count=$usermodel->removePassUser($id);
        echo $count;
    }
}