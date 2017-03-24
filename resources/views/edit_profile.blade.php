@extends('layouts.master')
@section('title', 'Cập nhật thông tin')
@section('custom-css')
    <link href="css/user-profile.css" rel="stylesheet" />
@endsection
@section('content')
<section>
    <div class="container" style="margin-top: 30px;">
    <div class="profile-head">
    <div class="col-md- col-sm-4 col-xs-12">
    <img src="http://www.newlifefamilychiropractic.net/wp-content/uploads/2014/07/300x300.gif" class="img-responsive" />
        <div class="uplod-picture">
    <span class="btn btn-default uplod-file">
        Upload Photo <input type="file" />
    </span>
        </div><!--uplod-picture close-->
    </div><!--col-md-4 col-sm-4 col-xs-12 close-->


    <div class="col-md-5 col-sm-5 col-xs-12">
    <h5>Nguyễn Hữu Trung</h5>
    <ul>
    <li><span class="glyphicon glyphicon-home"></span> Việt Nam</li>
    <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">(+84) 986607599</a></li>
    <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">huutrung.mmt@gmail.com</a></li>
    </ul>


    </div><!--col-md-8 col-sm-8 col-xs-12 close-->
    </div><!--profile-head close-->
    </div><!--container close-->


    <div id="sticky" class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-menu" role="tablist">
            <li class="active">
                <a href="#profile" role="tab" data-toggle="tab">
                    <i class="fa fa-male"></i> Mô tả thông tin
                </a>
            </li>
            <li><a href="#change" role="tab" data-toggle="tab">
                    <i class="fa fa-key"></i> Chỉnh sửa thông tin cá nhân
                </a>
            </li>
        </ul><!--nav-tabs close-->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade active in" id="profile">
                <div class="container">
                    <br clear="all" />
                    <div class="row">
                        <div class="col-md-6">

                            <div class="table-responsive responsiv-table">
                                <table class="table bio-table">
                                    <tbody>
                                    <tr>
                                        <td>Chiều cao</td>
                                        <td><input type="text" class="form-control" id="usr"></td>
                                        <td> cm</td>
                                    </tr>
                                    <tr>
                                        <td>Cân nặng</td>
                                        <td><input type="text" class="form-control" id="usr"></td>
                                        <td> kg</td>
                                    </tr>
                                    <tr>
                                        <td>Thân hình</td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control" id="sel1">
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tình hình tài chính</td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control" id="sel1">
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!--table-responsive close-->
                        </div><!--col-md-6 close-->

                        <div class="col-md-6">

                            <div class="table-responsive responsiv-table">
                                <table class="table bio-table">
                                    <tbody>
                                    <tr>
                                        <td>Tóc</td>
                                        <td><input type="text" class="form-control" id="usr"></td>
                                    </tr>
                                    <tr>
                                        <td>Uư tiên trong cuộc sống</td>
                                        <td><input type="text" class="form-control" id="usr"></td>
                                    </tr>
                                    <tr>
                                        <td>Đối tượng tìm kiếm</td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control" id="sel1">
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Độ tuổi</td>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control" id="sel1">
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!--table-responsive close-->
                        </div><!--col-md-6 close-->

                    </div><!--row close-->




                </div><!--container close-->
            </div><!--tab-pane close-->



            <div class="tab-pane fade" id="change">
    <div class="container fom-main">
    <div class="row">
    <div class="col-sm-12">
    <h2 class="register">Chỉnh sửa thông tin cá nhân</h2>
    </div><!--col-sm-12 close-->

    </div><!--row close-->
    <br />
    <div class="row">

    <form class="form-horizontal main_form text-left" action=" " method="post"  id="contact_form">
    <fieldset>


    <div class="form-group col-md-12">
      <label class="col-md-10 control-label">Họ Tên</label>
      <div class="col-md-12 inputGroupContainer">
      <div class="input-group">
      <input  name="name" placeholder="Họ Tên" class="form-control"  type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->
           <div class="form-group col-md-12">
      <label class="col-md-10 control-label">E-Mail</label>  
        <div class="col-md-12 inputGroupContainer">
        <div class="input-group">
      <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
        </div>
      </div>
    </div>


    <!-- Text input-->
           
    <div class="form-group col-md-12">
      <label class="col-md-10 control-label">Số Điện Thoại</label>
        <div class="col-md-12 inputGroupContainer">
        <div class="input-group">
      <input name="phone" placeholder="(+84) 986607xxx" class="form-control" type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->
          
     <div class="form-group col-md-12">
      <label class="col-md-10 control-label">Địa Chỉ</label>
        <div class="col-md-12 inputGroupContainer">
        <div class="input-group">
                <textarea class="form-control" name="comment" placeholder="Địa Chỉ"></textarea>
      </div>
      </div>
    </div>


    <div class="form-group col-md-12">
      <label class="col-md-10 control-label">Mật Khẩu Cũ</label>
      <div class="col-md-12 inputGroupContainer">
      <div class="input-group">
      <input  name="old_password" placeholder="Mật Khẩu Cũ" class="form-control"  type="password">
        </div>
      </div>
    </div>


    <div class="form-group col-md-12">
      <label class="col-md-10 control-label">Mật Khẩu Mới</label>
      <div class="col-md-12 inputGroupContainer">
      <div class="input-group">
      <input  name="new_password" placeholder="Mật Khẩu Mới" class="form-control"  type="password">
        </div>
      </div>
    </div>


    <!-- radio checks -->
     <div class="form-group col-md-12">
         <label class="col-md-10 control-label">Giới Tính</label>
         <div class="col-md-6">
             <div class="radio col-md-2">
                 <label>
                     <input type="radio" name="hosting" value="yes" /> Nam
                 </label>
             </div>
             <div class="radio col-md-2">
                 <label>
                     <input type="radio" name="hosting" value="no" /> Nữ
                 </label>
             </div>
         </div>
     </div>

    <!-- upload profile picture -->
    <div class="col-md-12 text-left">

    </div><!--col-md-12 close-->
    <!-- Button -->
    <div class="form-group col-md-10">
      <div class="col-md-6">
        <button type="submit" class="btn btn-warning submit-button" >Lưu</button>
        <button type="submit" class="btn btn-warning submit-button" >Hủy</button>
      </div>
    </div>
    </fieldset>
    </form>
    </div><!--row close-->
    </div><!--container close -->          
    </div><!--tab-pane close-->
    </div><!--tab-content close-->
    </div><!--container close-->

</section><!--section close-->
@endsection




