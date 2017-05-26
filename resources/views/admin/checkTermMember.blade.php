@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')


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
            <div >
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>The front of the picture</th>
                        <th>The back of the picture</th>
                        <th>Pass</th>
                        <th>Return</th>
                    </tr>
                    <tr>
                        <td><img width="200" height="200" src="/album/"></td>
                        <td><img width="200" height="200" src="/album/"></td>
                        <td>
                            <a style="margin-top: 90px" href="" class="btn btn-success">Duyệt</a>
                        </td>
                        <td>
                            <a style="margin-top: 90px" href="" class="XoaDuLieu btn btn-danger">Phản hồi</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {
        $('.XoaDuLieu').click(function(){
            if(!confirm("Bạn có thực muốn xóa !"))
                return false;
        });
    });
</script>
    @endsection
