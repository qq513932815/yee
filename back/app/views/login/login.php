
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>忆栈后台管理系统-登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?=LOCAL_ROOT?>static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=LOCAL_ROOT?>static/css/animate.css">
    <link rel="stylesheet" href="<?=LOCAL_ROOT?>static/css/style.css">

    <!-- Modernizr JS -->
    <script src="<?=LOCAL_ROOT?>static/js/modernizr-2.6.2.min.js"></script>

</head>
<body class="style-3">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-push-8">


            <!-- Start Sign In Form -->
            <form action="#" class="fh5co-form animate-box" data-animate-effect="fadeInRight">
                <h2>登录</h2>
                <div class="form-group">
                    <label for="username" class="sr-only">用户名</label>
                    <input type="text" class="form-control" id="username" placeholder="用户名" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">密码</label>
                    <input type="password" class="form-control" id="password" placeholder="密码" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="remember"><input type="checkbox" id="remember"> 记住我</label>
                </div>
                <div class="form-group">
                    <input id="btn" type="button" value="登录 " class="btn btn-primary">
                </div>
            </form>
            <!-- END Sign In Form -->

        </div>
    </div>
    <div class="row" style="padding-top: 60px; clear: both;">
        <div class="col-md-12 text-center"><p><small>&copy; All Rights Reserved. - Collect from <a href="http://www.tayfl1314.cn/" title="Monkey First" target="_blank">Monkey First</a></small></p></div>
    </div>
</div>

<!-- jQuery -->
<script src="<?=LOCAL_ROOT?>static/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap -->
<script src="<?=LOCAL_ROOT?>static/js/bootstrap.min.js"></script>
<!-- Placeholder -->
<script src="<?=LOCAL_ROOT?>static/js/jquery.placeholder.min.js"></script>
<!-- Waypoints -->
<script src="<?=LOCAL_ROOT?>static/js/jquery.waypoints.min.js"></script>
<!-- Main JS -->
<script src="<?=LOCAL_ROOT?>static/js/main.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btn").click(function () {
            alert(1);
        })

    });
</script>

</body>
</html>

