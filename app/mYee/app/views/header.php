<!DOCTYPE html>
<html>

<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?=LOCAL_ROOT?>/static/js/jquery-3.2.1.min.js"></script>
    <script src="<?=LOCAL_ROOT?>/static/js/index.js"></script>
    <link rel="stylesheet" href="<?=LOCAL_ROOT?>/static/css/reset.css">
    <link href="<?=LOCAL_ROOT?>/static/css/index.css" rel="stylesheet">
</head>

<body>
<div id="main">

    <div id="header">

        <div class="header-top">
            <div class="header-top-inbox">
                <div class="header-top-img">
                    <img src="<?=LOCAL_ROOT?>/static/images/logo.png" alt="">
                </div>
                <ul class="header-top-list">

                    <li>
                        <a href="javascript:void(0);">
                            <p>官方首页</p>
                            <p>HOME</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <p>游戏资料</p>
                            <p>DATA</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <p>攻略中心</p>
                            <p>RAIDERS</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <p>赛事中心</p>
                            <p>MATCH</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <p>商城\合作</p>
                            <p>STORE</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <p>社区互动</p>
                            <p>COMMUNITY</p>
                        </a>
                    </li>



                </ul>
            </div>
        </div>
        <div class="header-bottom">
            <div class="header-bottom-left">
                <h3>周免英雄（9月11日-9月17日</h3>
                <div class="header-bottom-left-icons">
                    <?php foreach ($weekfrees as $v){ ?>
                    <a href="<?=LOCAL_ROOT."/hero/detail/".$v["id"]?>" class="first_icon">
                        <img src="<?=LOCAL_ROOT."/".$v["hero_img"]?>" alt="" class="geng" imgid="<?=$v["id"]?>">
                    </a>
                    <?php } ?>
                </div>
            </div>
<!--            <div class="header-bottom-right">-->
<!--                <a class="header-bottom-right-left">-->
<!---->
<!--                    <img src="--><?//=LOCAL_ROOT?><!--/static/images/avatar1.jpg" alt="" class="face_img">-->
<!--                </a>-->
<!--                <div class="header-bottom-right-right">-->
<!--                    <p>亲爱的召唤师, 欢迎<span class="login"> 登录</span></p>-->
<!--                </div>-->
<!--            </div>-->
        </div>

    </div>