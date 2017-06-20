@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Trang chủ
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="">Trang chủ</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{ $comment }}</div>
                                <div>Bình luận</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('admin/comment') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{ $cfs }}</div>
                                <div>Bài viết</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('admin/confessed') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{ $admin }}</div>
                                <div>Ban quản trị</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('admin/staff') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{ $member }}</div>
                                <div>Thành viên</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('admin/member') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-fw fa-bar-chart-o"></i> Thống kê bài viết</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="{{ url('admin/confessed') }}" class="list-group-item">
                                <span class="badge">{{ $cfs }}</span>
                                <i class="fa fa-shopping-cart"></i> Tổng bài viết
                            </a>
                            <a href="{{ url('admin/confession') }}" class="list-group-item">
                                <span class="badge">{{ $check_cfs }}</span>
                                <i class="fa fa-tasks"></i> Tổng bài viết đang chờ duyệt
                            </a>
                            <a href="{{ url('admin/comment') }}" class="list-group-item">
                                <span class="badge">{{ $comment }}</span>
                                <i class="fa fa-fw fa-comments"></i> Tổng bình luận
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-fw fa-bar-chart-o"></i> Thống kê thành viên</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="{{ url('admin/member') }}" class="list-group-item">
                                <span class="badge">{{ $member }}</span>
                                <i class="fa fa-fw fa-user"></i> Tổng thành viên chính thức
                            </a>
                            <a href="{{ url('admin/term-member') }}" class="list-group-item">
                                <span class="badge">{{ $check_member }}</span>
                                <i class="fa fa-fw fa-user"></i> Tổng thành viên đang chờ duyệt
                            </a>
                            <a href="{{ url('admin/staff') }}" class="list-group-item">
                                <span class="badge">{{ $admin }}</span>
                                <i class="fa fa-fw fa-gear"></i> Tổng quản trị viên
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection