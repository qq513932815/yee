<?php
/**
 * Created by PhpStorm.
 * User: LXT
 * Date: 2018/1/18
 * Time: 17:04
 */
class LoginController extends Controller
{
    public function index()
    {
        $this->disPlay();
    }

    public function isLogin()
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $model = new LoginModel();
        $data = $model->isLogin($user,$pass);
        print_r($data);
        $this->disPlay();
    }
}