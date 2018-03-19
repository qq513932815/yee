<?php
/**
 * Created by PhpStorm.
 * User: LXT
 * Date: 2018/1/18
 * Time: 0:18
 */

class AdminController extends Controller
{
    function index()
    {
        //显示全部用户信息
        $model=new UserModel();
        $user_not_ban= $model->selectNotBan();
        $userban = $model->selectBan();
        $this->assgin('usernotban',$user_not_ban);
        $this->assgin('userban',$userban);
        $this->disPlay();
    }

    function exper()
    {
        $model = new ExperModel();
        $itsme_not_pass = $model->selectNotPass();
        $itsme_pass = $model->selectPass();
        $this->assgin('itsmenotpass',$itsme_not_pass);
        $this->assgin('itsmepass',$itsme_pass);
        $this->disPlay();
    }

    function music()
    {
        $model = new MusicModel();
        $music_info = $model->getAllMusic();
        $this->assgin('musicinfo',$music_info);
//        print_r($music_info);
        $this->disPlay();
    }

    function textpublic()
    {
        $this->disPlay();
    }

    function textmanage()
    {
        $model = new ArticleModel();
        $del_num = $model->selectBanNum();
        $ok_num = $model->selectNotBanNum();
        $text_not_ban = $model->selectNotBan();
        $text_ban = $model->selectBan();

        $this->assgin('delnum',$del_num);
        $this->assgin('oknum',$ok_num);
        $this->assgin('textnotban',$text_not_ban);
        $this->assgin('textban',$text_ban);
        $this->disPlay();
    }

    function commentmanage()
    {
        $model = new CommentModel();
        $comment_not_ban = $model->getNotBanComments();
        $comment_ban = $model->getBanComments();

        $this->assgin('commentnotban',$comment_not_ban);
        $this->assgin('commentban',$comment_ban);
        $this->disPlay();
    }

    function login()
    {
        $this->disPlay();
    }

    function isLogin()
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $model = new LoginModel();
        $data = $model->isLogin($user,$pass);
        return $data;
    }
}