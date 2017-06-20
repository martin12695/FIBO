@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')
<style>
    .tw3-thumb__link__image {
        background-color: #fff;
        border-radius: 4px;
        background-color: #edefef;
        text-align: center;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

</style>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Quản lý sản phẩm
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="{{ url('admin/index') }}">Trang chủ</a>
                    </li>
                    <li>
                        <i class="fa fa-home"></i>  <a href="{{ url('admin/term-member') }}">Thành viên đang duyệt</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-bar-chart-o"></i> Duyệt thành viên
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="bs-example">
                <div class="table-responsive">
                <table class="table table-bordered table-hover">
                        <tr>
                            <th style="text-align: center">The front of the picture</th>
                            <th style="text-align: center">Options</th>
                        </tr>
                        <tr>
                            @if(isset($getImage))
                                <td>
                                @foreach($getImage as $row)
                                    <img style="margin-right: 40px" class="jsTriggerPhotoBox tw3-thumb__link__image" alt="{{ $row->link }}" width="375" height="450" src="/album/{{ $row->link }}">

                                @endforeach
                                </td>
                            @else
                                <td>
                                    <img  alt="no-picture.png"  width="385" height="450" src="/album/no-avatar.png">
                                    <img  alt="no-picture.png"  width="385" height="450" src="/album/no-avatar.png">
                                </td>
                            @endif
                            @if( isset($getID) )
                            <td>
                                <a style="margin-top: 90px" href="{{ route('getCheckedTermMember.id', $getID->user_id) }}" id="verification" class="btn btn-success">Xác Nhận</a>
                                <a style="margin-top: 90px" href="{{ route('sendMail.id', $getID->user_id) }}" class="SendDuLieu btn btn-danger">Phản hồi</a>
                            </td>
                                @else
                                    <td>
                                        <a style="margin-top: 90px" href="{{ route('getCheckedTermMember.id', $segment = Request::segment(4)) }}" id="verification" class="btn btn-success">Xác nhận</a>
                                        <a style="margin-top: 90px" href="{{ route('sendMail.id', $segment = Request::segment(4)) }}" class="SendDuLieu btn btn-danger">Phản hồi</a>
                                    </td>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
