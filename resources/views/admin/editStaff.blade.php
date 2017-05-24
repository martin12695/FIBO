@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Sửa thành viên
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>  <a href="{{ url('/admin/index') }}">Trang chủ</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> <a href="{{ url('/admin/member') }}">Danh sách thành viên</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Sửa thành viên
                        </li>
                    </ol>
                </div>
                <div class="col-lg-12">
                    <div >
                        <form>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Họ tên</th>
                                    <td>
                                        <input id="name" name="name" class="form-control" placeholder="" value="{{ $user->name }}">
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_name">Bạn chưa nhập họ tên</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Giới tính</th>
                                    <td>
                                        <select name="sex" id="sex" class="form-control">
                                            @if( $user->sex == '1')
                                                <option value="1" selected>Nam</option>
                                                <option value="2">Nữ</option>
                                            @endif
                                            @if( $user->sex == '2')
                                                <option value="1">Nam</option>
                                                <option value="2" selected>Nữ</option>
                                            @endif
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ngày sinh</th>
                                    <td>
                                        <input type="date" id="birthday" name="birthday" class="form-control"value="{{ $user->birthday }}">
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_birthday">Bạn chưa chọn ngày sinh</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Đến từ</th>
                                    <td>
                                        <select name="province" id="province" class="form-control">
                                            @foreach($province as $row)
                                                <option value="{{ $row->id_province }}" {{ $row->id_province == $user->come_from ? 'selected' : '' }}>{{ $row->value }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input id="email" name="email" class="form-control" value="{{ $user->email }}">
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_email">Bạn chưa nhập địa chỉ email</div>
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_email_exist">Địa chỉ email đã tồn tại</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Điện thoại</th>
                                    <td>
                                        <input id="phone" name="phone" class="form-control" value="{{ $user->phone }}">
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_phone">Bạn chưa nhập số điện thoại</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mật khẩu</th>
                                    <td>
                                        <input type="password" id="password" name="password" class="form-control" value="">
                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_password">Bạn chưa nhập mật khẩu</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cấp bậc</th>
                                    <td>
                                        <select name="level" id="level" class="form-control">
                                            @if($user->level == 'Admin')
                                                <option value="1" checked>Admin</option>
                                                <option value="2">Member</option>
                                            @endif
                                            @if($user->level == 'Member')
                                                <option value="1" >Admin</option>
                                                <option value="2" checked>Member</option>
                                            @endif
                                        </select>
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
            var name = $('#name').val();
            var sex = $('#sex').val();
            var province = $('#province').val();
            var birthday = $('#birthday').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var password = $('#password').val();
            var level = $('#level').val();
            var pathArray = window.location.pathname.split( '/' );
            var page = pathArray[3];
            var flag = true;

            if(flag)
            {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: "/admin/edit-staff/" + page,
                    data: {
                        name : name,
                        sex : sex,
                        province : province,
                        birthday : birthday,
                        email : email,
                        phone : phone,
                        password : password,
                        level : level
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
                            window.location.replace('/admin/staff');
                        }
                        if(data == 1){
                            window.location.replace('/admin/staff');
                        }
                    }
                });
            }
        });
    </script>
@endsection