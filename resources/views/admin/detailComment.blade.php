@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Xem chi tiết bình luận
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="{{ url('/admin/index') }}">Trang chủ</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> <a href="{{ url('admin/comment') }}">Danh sách bình luận</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Xem chi tiết bình luận
                    </li>
                </ol>
            </div>

            <div class="col-lg-12">
                <div >
                    <form method="post" action="{{ route('deleteComment.id', $detail->id) }}">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <th>Người bình luận</th><td><input readonly class="form-control " value="{{ $detail->name }}"> </td>

                            </tr>
                            <tr>
                                <th>Tên bài viết</th><td><input readonly class="form-control" value="{{ $detail->title }}"> </td>

                            </tr>
                            <tr>
                                <th>Ngày bình luận</th><td><input readonly class="form-control" value="{{ $detail->created }}"> </td>

                            </tr>
                            <tr>
                                <th>Nội dung</th><td><textarea readonly rows="10" class="form-control" >{{ $detail->detail }}</textarea></td>

                            </tr>
                            <tr>
                                <th></th>
                                <th><input id="Xoa" type="submit" value="Xóa" class="btn btn-danger"></th>
                            </tr>


                        </table>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

<script>
    $(document).ready(function(){
        $('#Xoa').click(function(){
            if(!confirm("Bạn có thực muốn xóa !"))
                return false;
        });

    });
</script>
    @endsection