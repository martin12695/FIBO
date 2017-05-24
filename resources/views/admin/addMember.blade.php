@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')


    <div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Cập nhật thành viên
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="{{ url('/admin/index') }}">Trang chủ</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> <a href="{{ url('/admin/member') }}">Danh sách thành viên</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Cập nhật nhân viên
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
                                    <input id="name" name="name" class="form-control" value="">
                                    <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_name">Bạn chưa nhập họ tên</div>
                                </td>
                            </tr>
                            <tr>
                                <th>Giới tính</th>
                                <td>
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Ngày sinh</th>
                                <td>
                                    <input type="date" id="birthday" name="birthday" class="form-control"value="">
                                    <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_birthday">Bạn chưa chọn ngày sinh</div>
                                </td>
                            </tr>
                            <tr>
                                <th>Đến từ</th>
                                <td>
                                    <select name="province" id="province" class="form-control">
                                        @foreach($province as $row)
                                            <option value="{{ $row->id_province }}">{{ $row->value }}</option>
                                            @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input id="email" name="email" class="form-control" value="">
                                    <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_email">Bạn chưa nhập địa chỉ email</div>
                                    <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_email_exist">Địa chỉ email đã tồn tại</div>
                                </td>
                            </tr>
                            <tr>
                                <th>Điện thoại</th>
                                <td>
                                    <input id="phone" name="phone" class="form-control" value="">
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
                                <th></th>
                                <th>
                                    <span style="color: red;" id="thongbao"></span> <br>
                                    <button id="btn-submit" type="button" class="btn btn-primary"><div id="ajax-loader">Thêm</div></button>
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
        var flag = true;
        /********validate all our form fields***********/
        /* Name field validation  */
        if(name == "" && birthday == "" && email == "" && phone == "" && password == ""){
            $('#name').css('border-color','red');
            $('#birthday').css('border-color','red');
            $('#email').css('border-color','red');
            $('#phone').css('border-color','red');
            $('#password').css('border-color','red');
            //////
            $('#error_name').show();
            $('#error_birthday').show();
            $('#error_email').show();
            $('#error_phone').show();
            $('#error_password').show();
            setTimeout(function () {
                $('#error_name').hide();
                $('#error_birthday').hide();
                $('#error_email').hide();
                $('#error_phone').hide();
                $('#error_password').hide();
               //////////
                $('#name').removeAttr('style');
                $('#birthday').removeAttr('style');
                $('#email').removeAttr('style');
                $('#phone').removeAttr('style');
                $('#password').removeAttr('style');
            }, 3000);
            flag = false;
        }

        if(flag)
        {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: "/admin/add-member",
                data: {
                    name : name,
                    sex : sex,
                    province : province,
                    birthday : birthday,
                    email : email,
                    phone : phone,
                    password : password
                },
                beforeSend: function()
                {
                    $("#btn-submit").html('<img style="width: 19px;height: 17px;padding-right: 5px" src="/images/default.gif">Đang gửi yêu cầu ...');
                },
                complete: function () {
                    setTimeout(function () {
                        $('#btn-submit').html('<div id="ajax-loader">Thêm</div>');
                    }, 3000);
                },
                success :  function(data) {
                    if(data == 2){
                        $('#email').css('border-color','red');
                        $('#error_email_exist').show();
                        setTimeout(function () {
                            $('#error_email_exist').hide();
                            $('#email').removeAttr('style');
                        }, 3000);
                        flag = false;
                    }
                    if(data == 1){
                        window.location.replace('/admin/member');
                    }
                }
            });
        }
    });
</script>
@endsection