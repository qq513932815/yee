<!DOCTYPE html>
<head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>忆栈后台管理系统-文章管理</title>

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
    <link href="<?=LOCAL_ROOT?>static/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/plugins/select2/select2.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/plugins/jquery-datatables-bs3/css/datatables.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link href="<?=LOCAL_ROOT?>static/assets/css/jquery.mmenu.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="<?=LOCAL_ROOT?>static/assets/css/style.css" rel="stylesheet" />
    <link href="<?=LOCAL_ROOT?>static/assets/css/add-ons.min.css" rel="stylesheet" />

    <!-- end: CSS file-->


    <!-- Head Libs -->
    <script src="<?=LOCAL_ROOT?>static/assets/vendor/js/jquery-2.1.1.min.js"></script>
    <script src="<?=LOCAL_ROOT?>static/assets/plugins/modernizr/js/modernizr.js"></script>
    <script src="<?=LOCAL_ROOT?>static/assets/js/pages/table-advanced.js"></script>
    <script src="<?=LOCAL_ROOT?>static/js/layer/layer.js"></script>
</head>

<body>

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
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
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
                            <li class="nav-parent active">
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
                        <li><a href="index.html"><i class="icon fa fa-file-text"></i>文章管理</a></li>
                    </ol>
                </div>
                <div class="pull-right">
                    <h2>文章管理</h2>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default bk-bg-white">
                        <div class="panel-heading bk-bg-white">
                            <h6><i class="fa fa-cogs red"></i><span class="break"></span>数据分析</h6>
                            <div class="panel-actions">
                                <a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
                                <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-8">
                                <div class="panel panel-default">
                                    <div class="panel-heading">数据汇总</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="panel bk-widget bk-border-off">
                                                    <div class="bk-bg-white  bk-border-very-light-gray bk-fg-danger bk-ltr bk-padding-15 bk-radius">
                                                        <div class="row">
                                                            <div class="col-xs-4 text-left bk-vcenter bk-padding-off">
                                                                <span class="bk-round bk-icon bk-icon-2x bk-bg-danger bk-border-off">
                                                                    <i class="fa fa-trash-o fa-2x"></i>
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-8 text-left bk-vcenter">
                                                                <h6 class="bk-margin-off">回收站</h6>
                                                                <strong class="bk-margin-off" id="banNum" num="<?php echo $delnum?>"><?php echo $delnum?></strong>
                                                            </div>
                                                        </div>
                                                        <div class="progress light progress-striped active bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
                                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 13%;">
                                                                <span class="sr-only">90% Complete</span>
                                                            </div>
                                                        </div>
                                                        <div class="bk-margin-top-10">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <small>总计: <?php echo $delnum?></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="panel bk-widget bk-border-off">
                                                    <div class="bk-bg-white bk-border-very-light-gray bk-fg-success bk-ltr bk-padding-15 bk-radius">
                                                        <div class="row">
                                                            <div class="col-xs-4 text-left bk-vcenter bk-padding-off">
                                                                <span class="bk-round bk-border-off bk-icon bk-icon-2x bk-bg-success">
                                                                    <i class="fa fa-check fa-2x"></i>
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-8 text-left bk-vcenter">
                                                                <h6 class="bk-margin-off">正常</h6>
                                                                <strong class="bk-margin-off" id="notBanNum" num="<?php echo $oknum?>"><?php echo $oknum?></strong>
                                                            </div>
                                                        </div>
                                                        <div class="progress light progress-striped active bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                                                                <span class="sr-only">80% Complete</span>
                                                            </div>
                                                        </div>
                                                        <div class="bk-margin-top-10">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <small>总计: <?php echo $oknum?></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="panel-body">
                                    <div id="piechart" style="height:300px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default bk-bg-white">
                        <div class="panel-heading bk-bg-white">
                            <h6><i class="fa fa-table red"></i><span class="break"></span>文章列表</h6>
                            <div class="panel-actions">
                                <a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
                                <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                <thead>
                                <tr>
                                    <th style="width: 150px;">编号</th>
                                    <th style="width: 445px;">标题</th>
                                    <th>发布时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($textnotban as $v){?>
                                <tr class="gradeU">
                                    <td><?php echo $v['id']?></td>
                                    <td><?php echo $v['title']?></td>
                                    <td><?php echo date('Y年m月d日',$v['publictime'])?></td>
                                    <td>
                                        <a class="btn btn-danger ban" href="javascript:void(0);" textid="<?php echo $v['id']?>"><i class="fa fa-trash-o "></i> 回收站</a>
                                    </td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default bk-bg-white">
                        <div class="panel-heading bk-bg-white">
                            <h6><i class="fa fa-trash-o"></i><span class="break"></span>文章回收站</h6>
                            <div class="panel-actions">
                                <a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a>
                                <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                    <thead>
                                    <tr>
                                        <th style="width: 150px;">编号</th>
                                        <th style="width: 445px;">标题</th>
                                        <th>发布时间</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody style="text-align: center">
                                    <?php foreach ($textban as $v){?>
                                        <tr class="gradeU">
                                            <td><?php echo $v['id']?></td>
                                            <td><?php echo $v['title']?></td>
                                            <td><?php echo date('Y年m月d日',$v['publictime'])?></td>
                                            <td>
                                                <a class="btn btn-success rmban" href="javascript:void(0);" textid="<?php echo $v['id']?>"><i class="fa fa-reply "></i> 恢复</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
<script src="<?=LOCAL_ROOT?>static/assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/vendor/skycons/js/skycons.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/vendor/js/pace.min.js"></script>

<!-- Plugins JS-->
<script src="<?=LOCAL_ROOT?>static/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/moment/js/moment.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/select2/select2.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/jquery-datatables/media/js/jquery.dataTables.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/jquery-datatables-bs3/js/datatables.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/sparkline/js/jquery.sparkline.min.js"></script>

<script src="<?=LOCAL_ROOT?>static/assets/plugins/flot/js/jquery.flot.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/flot/js/jquery.flot.time.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/plugins/flot-tooltip/js/jquery.flot.tooltip.js"></script>

<script src="<?=LOCAL_ROOT?>static/assets/plugins/sparkline/js/jquery.sparkline.min.js"></script>

<!-- Theme JS -->
<script src="<?=LOCAL_ROOT?>static/assets/js/jquery.mmenu.min.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/js/core.min.js"></script>

<!-- Pages JS -->
<script src="<?=LOCAL_ROOT?>static/assets/js/pages/table.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/js/pages/table-advanced.js"></script>
<script src="<?=LOCAL_ROOT?>static/assets/js/pages/charts-flot.js"></script>
<script type="text/javascript">
    $(function () {
        $(".ban").click(function () {
            var userid = $(this).attr('textid');
            layer.confirm('是否将该文章放入回收站？', {
                title: '回收确认',
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("<?=LOCAL_ROOT?>Article/removeArticle",{id:userid},function(data){
                    if(data=='1'){
                        layer.msg('回收成功', {icon: 6});
                        setTimeout(function () {
                            location.href='<?= LOCAL_ROOT?>/admin/textmanage';
                        }, 3000);
                    }else{
                        layer.msg('由于网络原因，请重试', {icon: 5});
                    }
                });
            }, function(){

            });

        });

        $(".rmban").click(function () {
            var userid = $(this).attr('textid');
            layer.confirm('是否将该文章移出回收站？', {
                title: '移出确认',
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("<?=LOCAL_ROOT?>Article/recoveryArticle",{id:userid},function(data){
                    if(data=='1'){
                        layer.msg('移出成功', {icon: 6});
                        setTimeout(function () {
                            location.href='<?= LOCAL_ROOT?>/admin/textmanage';
                        }, 3000);
                    }else{
                        layer.msg('由于网络原因，请重试', {icon: 5});
                    }
                });
            }, function(){

            });
        });
    });
</script>

<!-- end: JavaScript-->

</body>

</html>