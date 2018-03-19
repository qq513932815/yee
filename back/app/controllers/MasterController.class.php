<?php
/**
 * Created by PhpStorm.
 * User: LXT
 * Date: 2018/1/18
 * Time: 16:36
 */

class MasterController extends Controller
{
    //插入经历者
    public function addMaster()
    {
        $pageid = $_POST["pageid"];
        $jingid = $_POST["jingid"];
        $jingtext = $_POST["jingtext"];
        $jingimg = $_POST["jingimg"];
        $jingname = $_POST["jingname"];

        $data = array('pageid'=>$pageid,'jingid'=>$jingid,'jingtext'=>$jingtext,'jingimg'=>$jingimg,'jingname'=>$jingname);
        $model=new MasterModel();
        $count = $model->addMaster($data);
        echo $count;
    }
}