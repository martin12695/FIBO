<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/cssAdmin/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/cssAdmin/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/cssAdmin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="/js/jsAdmin/jquery.js"></script>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Welcome to Admin site</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hello admin <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href=""><i class="fa fa-fw fa-user"></i> Thành viên</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-gear"></i> Ban quản trị</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ url('/admin/logout') }}"><i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href=""><i class="fa fa-fw fa-home"></i> Trang chủ</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-fw fa-user"></i> Thành viên</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-fw fa-info"></i> Thông tin thành viên</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-fw fa-users"></i> Ban quản trị</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Bài viết đang duyệt</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Bài viết đã đăng</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-fw fa-edit"></i> Bình luận</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    @yield('content')
</div>
</body>
<script src="/js/jsAdmin/bootstrap.min.js"></script>
</html>