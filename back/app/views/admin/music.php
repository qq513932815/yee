<!DOCTYPE html>
<head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>忆栈后台管理系统-音乐管理</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="<?=LOCAL_ROOT?>static/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?=LOCAL_ROOT?>static/assets/ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?=LOCAL_ROOT?>static/assets/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?=LOCAL_ROOT?>static/assets/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=LOCAL_ROOT?>static/assets/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?=LOCAL_ROOT?>static/assets/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?=LOCAL_ROOT?>static/assets/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?=LOCAL_ROOT?>static/assets/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?=LOCAL_ROOT?>static/assets/ico/apple-touch-icon-152x152.png" />

    <!-- start: CSS file-->

    <!-- Vendor CSS-->
    <link href="<?=LOCAL_ROOT?>static/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/vendor/css/pace.preloader.css" rel="stylesheet" />

    <!-- Plugins CSS-->
    <link href="<?=LOCAL_ROOT?>static/assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/plugins/magnific-popup/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/plugins/isotope/css/jquery.isotope.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link href="<?=LOCAL_ROOT?>static/assets/css/jquery.mmenu.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="<?=LOCAL_ROOT?>static/assets/css/style.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/css/add-ons.min.css" rel="stylesheet" />

    <!-- end: CSS file-->


    <!-- Head Libs -->
    <script src="<?=LOCAL_ROOT?>static/assets/plugins/modernizr/js/modernizr.js"></script>
    <script src="<?=LOCAL_ROOT?>static/assets/js/pages/charts-flot.js"></script>

</head>

<body>
<audio id="play" src=""></audio>
<!-- Start: Header -->
<div class="navbar" role="navigation">
    <div class="container-fluid container-nav">
        <!-- Navbar Action -->
        <ul class="nav navbar-nav navbar-actions navbar-left">
            <li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
            <li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
        </ul>
        <!-- Navbar Left -->
        <div class="navbar-left">
            <!-- Search Form -->
            <form class="search navbar-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control bk-radius" name="q" id="q" placeholder="Search...">
                    <span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-play"></i></button>
							</span>
                </div>
            </form>
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right">
            <!-- Userbox -->
            <div class="userbox">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <figure class="profile-picture hidden-xs">
                        <img src="<?=LOCAL_ROOT?>static/assets/img/avatar.jpg" class="img-circle" alt="" />
                    </figure>
                    <div class="profile-info">
                        <span class="name">Administrator</span>
                        <span class="role"><i class="fa fa-circle bk-fg-success"></i> Administrator</span>
                    </div>
                    <i class="fa custom-caret"></i>
                </a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="dropdown-menu-header bk-bg-white bk-margin-top-15">
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="page-profile.html"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench"></i> Settings</a>
                        </li>
                        <li>
                            <a href="page-invoice"><i class="fa fa-usd"></i> Payments</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file"></i> File</a>
                        </li>
                        <li>
                            <a href="page-login.html"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Userbox -->
        </div>
        <!-- End Navbar Right -->
    </div>
</div>
<!-- End: Header -->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >免费网站模板</a></div>

<!-- Start: Content -->
<div class="container-fluid content">
    <div class="row">

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-collapse">
                <!-- Sidebar Header Logo-->
                <div class="sidebar-header">
                    <img src="<?=LOCAL_ROOT?>static/assets/img/logo.png" class="img-responsive" alt="" />
                </div>
                <!-- Sidebar Menu-->
                <div class="sidebar-menu">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-sidebar">
                            <div class="panel-body text-center">
                                <div class="flag">
                                    <img src="<?=LOCAL_ROOT?>static/assets/img/flags/USA.png" class="img-flags" alt="" />
                                </div>
                            </div>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-user" aria-hidden="true"></i><span>用户管理</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="<?=LOCAL_ROOT?>admin/index"><span class="text"> 用户封号</span></a></li>
                                    <li><a href="<?=LOCAL_ROOT?>admin/exper"><span class="text"> 经历者审核</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?=LOCAL_ROOT?>admin/music">
                                    <span class="pull-right label label-danger"></span>
                                    <i class="fa fa-music" aria-hidden="true"></i><span>音乐管理</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-file-text" aria-hidden="true"></i><span>文章管理</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="<?=LOCAL_ROOT?>admin/textpublic"><span class="text"> 发布文章</span></a></li>
                                    <li><a href="<?=LOCAL_ROOT?>admin/textmanage"><span class="text"> 文章管理</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?=LOCAL_ROOT?>admin/commentmanage">
                                    <i class="fa fa-comment" aria-hidden="true"></i><span>评论管理</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Sidebar Menu-->
            </div>
            <!-- Sidebar Footer-->
            <div class="sidebar-footer">
                <div class="small-chart-visits">
                    <div class="small-chart" id="sparklineLineVisits"></div>
                    <div class="small-chart-info">
                        <label>New Visits</label>
                        <strong>70,79%</strong>
                    </div>
                    <script type="text/javascript">
                        var sparklineLineVisitsData = [15, 16, 17, 19, 15, 25, 23, 35, 29, 15, 30, 45];
                    </script>
                </div>
                <ul class="sidebar-terms bk-margin-top-10">
                    <li><a href="#">条款</a></li
                    ><li><a href="#">隐私</a></li
                ><li><a href="#">帮助</a></li
                ><li><a href="#">关于</a></li>
                </ul>
            </div>
            <!-- End Sidebar Footer-->
        </div>
        <!-- End Sidebar -->

        <!-- Main Page -->
        <div class="main ">
            <!-- Page Header -->
            <div class="page-header">
                <div class="pull-left">
                    <ol class="breadcrumb visible-sm visible-md visible-lg">
                        <li><a href="index.html"><i class="icon fa fa-home"></i>主页</a></li>
                        <li><a href="index.html"><i class="icon fa fa-music"></i>音乐管理</a></li>
                    </ol>
                </div>
                <div class="pull-right">
                    <h2>音乐管理</h2>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="media-gallery">
                <div class="mg-main">
                    <div class="inner-toolbar clearfix">
                        <ul>
                            <li>
                                <a href="#" id="mgSelectAll"><i class="fa fa-check-square"></i> <span data-all-text="全选" data-none-text="取消全选">全选</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pencil"></i> 编辑</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-trash-o"></i> 删除</a>
                            </li>
                            <li class="right" data-sort-source data-sort-id="media-gallery">
                                <ul class="nav nav-pills nav-pills-danger">
                                    <li>
                                        <label class="hidden-xs">类别:</label>
                                    </li>
                                    <li class="active">
                                        <a data-option-value="*" href="#all">全部</a>
                                    </li>
                                    <li>
                                        <a data-option-value=".old" href="#old">怀旧</a>
                                    </li>
                                    <li>
                                        <a data-option-value=".rom" href="#rom">浪漫</a>
                                    </li>
                                    <li>
                                        <a data-option-value=".lit" href="#lit">清新</a>
                                    </li>
                                    <li>
                                        <a data-option-value=".low" href="#low">伤感</a>
                                    </li>
                                    <li>
                                        <a data-option-value=".hei" href="#hei">兴奋</a>
                                    </li>
                                    <li>
                                        <a data-option-value=".rep" href="#rep">治愈</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                        <?php foreach ($musicinfo as $v){?>
                        <div class="isotope-item <?php echo $v['type']?> col-sm-6 col-md-4 col-lg-3">
                            <div class="thumbnail">
                                <div class="thumb-preview">
                                    <a class="thumb-image">
                                        <img src="<?=LOCAL_ROOT?>static/music/img/<?php echo $v['images']?>" class="img-responsive" alt="Project">
                                    </a>
                                    <div class="mg-thumb-options">
                                        <div class="mg-play playbtn" murl="<?=LOCAL_ROOT?>static/music/src/<?php echo $v['music_src']?>"><i class="fa fa-play play-icon"></i></div>
                                        <div class="mg-toolbar">
                                            <div class="mg-option checkbox-custom checkbox-inline">
                                                <input type="checkbox" id="file_1" value="1">
                                                <label for="file_1">选择</label>
                                            </div>
                                            <div class="mg-group pull-right">
                                                <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                    <i class="fa fa-caret-up"></i>
                                                </button>
                                                <ul class="dropdown-menu mg-menu" role="menu">
                                                    <li><a href="#"><i class="fa fa-download"></i> 下载</a></li>
                                                    <li><a href="#"><i class="fa fa-trash-o"></i> 删除</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mg-title bk-fg-danger"><?php echo explode('.',$v['music_src'])[0]?><small>.mp3</small></h5>
                                <div class="mg-description">
                                    <small class="pull-left text-muted bk-fg-warning">歌手：<?php echo $v['author']?></small>
<!--                                    <small class="pull-right text-muted bk-fg-primary">14/10/2014</small>-->
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Main Page -->

    </div>
</div><!--/container-->


<div class="clearfix"></div>


<!-- start: JavaScript-->

<!-- Vendor JS-->
<script src="<?=LOCAL_ROOT?>static/assets/vendor/js/jquery.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/vendor/js/jquery-2.1.1.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/vendor/skycons/js/skycons.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/vendor/js/pace.min.js"></script>

<!-- Plugins JS-->
<script src="<?=LOCAL_ROOT?>static/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/magnific-popup/js/magnific-popup.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/isotope/js/jquery.isotope.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/sparkline/js/jquery.sparkline.min.js"></script>

<!-- Theme JS -->
<script src="<?=LOCAL_ROOT?>static/assets/js/jquery.mmenu.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/js/core.min.js"></script>

<!-- Pages JS -->
<script src="<?=LOCAL_ROOT?>static/assets/js/pages/gallery.js"></script>
<script type="text/javascript">
    $(function () {
        $(".playbtn").click(function () {
            var player = $("#play")[0];
            if(player.paused){
                var newurl = $(this).attr('murl');
                $("#play").attr('src',newurl);
                $(".play-icon").attr('class','fa fa-play play-icon');
                $(this).children().attr('class','fa fa-pause play-icon');
                player.play();
            }
            else{
                $(".play-icon").attr('class','fa fa-play play-icon');
                player.pause();
            }

        });
    });
</script>

<!-- end: JavaScript-->

</body>

</html>