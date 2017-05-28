@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Sửa bài viết đang duyệt
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>  <a href="{{ url('/admin/index') }}">Trang chủ</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> <a href="{{ url('/admin/confession') }}">Danh sách bài viết đang duyệt</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Sửa bài viết
                        </li>
                    </ol>
                </div>
                <div class="col-lg-12">
                    <div >
                        <form>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Tiêu đề</th>
                                    <td>
                                        <input id="title" name="title" class="form-control" placeholder="" value="{{ $cfs->title }}">
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_name">Bạn chưa nhập tiêu đề</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nội dung</th>
                                    <td>
                                        <textarea name="detail" id="detail" class="form-control">{!! strip_tags($cfs->detail) !!}</textarea>
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_name">Bạn chưa nhập nội dung</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tác giả</th>
                                    <td>
                                        <input id="author" name="author" class="form-control" placeholder="" value="{{ $cfs->author }}">
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_name">Bạn chưa nhập tác giả</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>
                                        <select name="status" id="status" class="form-control">
                                            <option value="0">Đang xem xét</option>
                                            <option value="1">Đăng bài</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Lượt xem</th>
                                    <td>
                                        <input id="views" name="views" class="form-control" placeholder="" value="{{ $cfs->views }}">
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_name">Bạn chưa nhập số lượt xem</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>
                                        <span style="color: red;" id="thongbao"></span> <br>
                                        <button id="btn-submit" type="button" class="btn btn-primary"><div id="ajax-loader">Sửa</div></button>
                                    </th>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#btn-submit").click(function() {
            //get input field values
            var title = $('#title').val();
            var detail = $('#detail').val();
            var author = $('#author').val();
            var status = $('#status').val();
            var views = $('#views').val();

            var pathArray = window.location.pathname.split( '/' );
            var page = pathArray[4];
            var flag = true;

            if(flag)
            {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: "/admin/confession/edit/" + page,
                    data: {
                        title : title,
                        detail : detail,
                        author : author,
                        status : status,
                        views : views
                    },
                    beforeSend: function()
                    {
                        $("#btn-submit").html('<img style="width: 19px;height: 17px;padding-right: 5px" src="/images/default.gif">Đang gửi yêu cầu ...');
                    },
                    complete: function () {
                        setTimeout(function () {
                            $('#btn-submit').html('<div id="ajax-loader">Sửa</div>');
                        }, 3000);
                    },
                    success :  function(data) {
                        if(data == 0){
                            window.location.replace('/admin/confession');
                        }
                        if(data == 1){
                            window.location.replace('/admin/confession');
                        }
                    }
                });
            }
        });
    </script>
@endsection