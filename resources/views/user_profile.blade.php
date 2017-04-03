@extends('layouts.master')
@section('title', '')
@section('content')
    <section>
        <div class="container" style="margin-top:90px">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Kết bạn
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Kết bạn bốn phương </a></li>
                                            <li><a href="">Chat ẩn danh </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Comfession
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Chuyện nam giới</a></li>
                                            <li><a href="">Chuyện nữ giới</a></li>
                                            <li><a href="">Chuyện thường ngày</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Giải trí
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Nơi ăn uống</a></li>
                                            <li><a href="">Nơi vui chơi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--/category-products-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="/images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="/images/product-details/1.jpg" alt="" />
                                <h3>Upload ảnh</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
                                    </div>

                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                @if(!empty($info_basic))
                                    <h2>{{$info_basic->name}}</h2>
                                    <p>Web ID: {{$info_basic->id}}</p>
                                    <p><b>Email:</b> {{$info_basic->email}}</p>
                                    <p><b>Số Điện Thoại:</b> {{$info_basic->phone}}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="category-tab shop-details-tab">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Mô Tả</a></li>
                                <li><a href="#companyprofile" data-toggle="tab">Sở Thích</a></li>
                                <li class="active"><a href="#reviews" data-toggle="tab">Thông Tin Cá Nhân</a></li>
                            </ul>
                        </div>
                        <form action="updateInfo" method="post">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="details" >
                                    <div class="replay-box">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-offset-1">
                                                <div class="blank-arrow">
                                                    <label>Chiều cao(cm)</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" placeholder="Chiều cao của bạn (Đơn vị cm)..."  value="{{$infoDes->height}}" name="height">
                                                <div class="blank-arrow">
                                                    <label>Cân nặng(kg)</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" placeholder="Cân nặng của bạn (Đơn vị kg)..." value="{{$infoDes->weight}}" name="weight">
                                                <div class="blank-arrow">
                                                    <label>Thân hình</label>
                                                </div>
                                                <span>*</span>
                                                <select name="body">
                                                    @foreach($body as $itemBody)
                                                        <option value="{{$itemBody->id}}" {{$itemBody->id == '2' ?  'selected="selected"' : ''}}>{{$itemBody->value}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="blank-arrow">
                                                    <br>
                                                    <label>Tài chính</label>
                                                </div>
                                                <span>*</span>
                                                <select name="finance">
                                                    @foreach($finace as $itemFinace)
                                                        <option value="{{$itemFinace->id}}" {{$itemFinace->id == $infoDes->finance ?  'selected="selected"' : ''}}>{{$itemFinace->value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-4 col-md-offset-2">
                                                <div class="blank-arrow">
                                                    <label>Tóc</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" placeholder="Màu tóc của bạn..."  value="{{$infoDes->hair}}" name="hair">
                                                <div class="blank-arrow">
                                                    <label>Ưu tiên trong cuộc sống</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" placeholder="Ưu tiên trong cuộc sống của bạn..." value="{{$infoDes->priority_in_life}}" name="priority_in_life">

                                                <div class="blank-arrow">
                                                    <label>Đối tượng tìm kiếm</label>
                                                </div>
                                                <span>*</span>
                                                <select name="sub" >
                                                    @foreach($findSub as $itemSub)
                                                        <option value="{{$itemSub->id}}" {{$infoDes->subject_find == $itemSub->id ?  'selected="selected"' : ''}} >{{$itemSub->value}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="blank-arrow">
                                                    <br>
                                                    <label>Độ tuổi</label>
                                                </div>
                                                <span>*</span>
                                                <select name="sub_age">
                                                    @foreach($findAge as $itemAge)
                                                        <option value="{{$itemAge->id}}" {{$infoDes->subject_eag == $itemAge->id ?  'selected="selected"' : ''}} >{{$itemAge->value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="companyprofile" >
                                    <div class="replay-box">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="blank-arrow">
                                                    <label>Âm nhạc</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" placeholder="Thể loại âm nhạc bạn thích..." value="{{$infoHobby->music}}" name="music">
                                                <div class="blank-arrow">
                                                    <label>Phim</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" placeholder="Thể loại phim bạn thích..." value="{{$infoHobby->movie}}" name="movie">

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="blank-arrow">
                                                    <label>Thể thao</label>
                                                </div>
                                                <input type="text" placeholder="Môn thể thao bạn thích..." value="{{$infoHobby->sport}}" name="sport">
                                                <div class="blank-arrow">
                                                    <label>Sở thích</label>
                                                </div>
                                                <input type="text" placeholder="Sở thích cá nhân của bạn..." value="{{$infoHobby->hobby}}" name="hobby">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active in" id="reviews" >
                                    <div class="replay-box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="blank-arrow">
                                                    <label>Họ Tên</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" placeholder="Điền Họ Tên Của Bạn..." value="{{$info_basic->name}}" name="birthday">
                                                <div class="blank-arrow">
                                                    <label>Ngày sinh</label>
                                                </div>
                                                <span>*</span>
                                                <input id="datepicker" type="datetime" placeholder="Email Của Bạn..." value="{{$info_basic->birthday}}">
                                                <div class="blank-arrow">
                                                    <label>Email</label>
                                                </div>
                                                <span>*</span>
                                                <input type="email" placeholder="Email Của Bạn..." value="{{$info_basic->email}}" readonly>
                                                <div class="blank-arrow">
                                                    <label>Số Điện Thoại</label>
                                                </div>
                                                <input type="text" placeholder="Số Điện Thoại..." value="{{$info_basic->phone}}" name="phone">
                                                <div class="blank-arrow">
                                                    <label>Giới Tính</label>
                                                </div>
                                                <span>*</span>
                                                <select>
                                                    <option>Nam</option>
                                                    <option>Nữ</option>
                                                </select>

                                                <div class="blank-arrow">
                                                    <br>
                                                    <label>Mật Khẩu Mới</label>
                                                </div>
                                                <span>*</span>
                                                <input type="password" placeholder="Mật Khẩu Mới...">

                                            </div>
                                            <div class="col-sm-4 col-md-offset-2">
                                                <div class="text-area">
                                                    <div class="blank-arrow">
                                                        <label>Đến từ</label>
                                                    </div>
                                                    <span>*</span>
                                                    <select name="province" >
                                                        @foreach($province as $itemPro)
                                                            <option value="{{$itemPro->id}}" {{'2' == $itemPro->id ?  'selected="selected"' : ''}} >{{$itemPro->name}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!--/Repaly Box-->
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-default">Cập Nhật</button>
                                </div>
                            </div><!--/category-tab-->
                        </form>
                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Danh sách những người phù hợp với bạn</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="/images/home/recommend1.jpg" alt="" />
                                                        <h2>Nguyễn Thị A</h2>
                                                        <p>21 tuổi</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-heart"></i>Kết bạn</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="/images/home/recommend2.jpg" alt="" />
                                                        <h2>Nguyễn Thị B</h2>
                                                        <p>22 tuổi</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-heart"></i>Kết bạn</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="/images/home/recommend1.jpg" alt="" />
                                                        <h2>Nguyễn Thị A</h2>
                                                        <p>21 tuổi</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-heart"></i>Kết bạn</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="/images/home/recommend1.jpg" alt="" />
                                                        <h2>Nguyễn Thị A</h2>
                                                        <p>21 tuổi</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-heart"></i>Kết bạn</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="/images/home/recommend2.jpg" alt="" />
                                                        <h2>Nguyễn Thị B</h2>
                                                        <p>22 tuổi</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-heart"></i>Kết bạn</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="/images/home/recommend2.jpg" alt="" />
                                                        <h2>Nguyễn Thị B</h2>
                                                        <p>22 tuổi</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-heart"></i>Kết bạn</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div><!--/recommended_items--></div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/user-profile.js" type="text/javascript"></script>
@endsection