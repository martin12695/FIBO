@extends('layouts.master')
@section('title', '')
@section('content')
<section>
    <div class="container">
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
                                        Sportswear
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Nike </a></li>
                                        <li><a href="">Under Armour </a></li>
                                        <li><a href="">Adidas </a></li>
                                        <li><a href="">Puma</a></li>
                                        <li><a href="">ASICS </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Mens
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Fendi</a></li>
                                        <li><a href="">Guess</a></li>
                                        <li><a href="">Valentino</a></li>
                                        <li><a href="">Dior</a></li>
                                        <li><a href="">Versace</a></li>
                                        <li><a href="">Armani</a></li>
                                        <li><a href="">Prada</a></li>
                                        <li><a href="">Dolce and Gabbana</a></li>
                                        <li><a href="">Chanel</a></li>
                                        <li><a href="">Gucci</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Womens
                                    </a>
                                </h4>
                            </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Fendi</a></li>
                                        <li><a href="">Guess</a></li>
                                        <li><a href="">Valentino</a></li>
                                        <li><a href="">Dior</a></li>
                                        <li><a href="">Versace</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Kids</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Fashion</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Households</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Interiors</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Clothing</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Bags</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Shoes</a></h4>
                            </div>
                        </div>
                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

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
                    <div class="tab-content">
                        <div class="tab-pane fade" id="details" >
                            <div class="replay-box">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <form>
                                            <div class="blank-arrow">
                                                <label>Chiều cao</label>
                                            </div>
                                            <span>*</span>
                                            <input type="text" placeholder="Chiều cao của bạn (Đơn vị cm)..."  value="{{$infoDes->height}}">
                                            <div class="blank-arrow">
                                                <label>Cân nặng</label>
                                            </div>
                                            <span>*</span>
                                            <input type="text" placeholder="Cân nặng của bạn (Đơn vị kg)..." value="{{$infoDes->weight}}">
                                            <div class="blank-arrow">
                                                <label>Thân hình</label>
                                            </div>
                                            <span>*</span>
                                            <select>
                                                @foreach($body as $itemBody)
                                                    <option value="{{$itemBody->id}}" {{$itemBody->id == '2' ?  'selected="selected"' : ''}}>{{$itemBody->value}}</option>
                                                @endforeach
                                            </select>
                                            <div class="blank-arrow">
                                                <br>
                                                <label>Tài chính</label>
                                            </div>
                                            <span>*</span>
                                            <select>
                                                @foreach($finace as $itemFinace)
                                                    <option value="{{$itemFinace->id}}" {{$itemFinace->id == '2' ?  'selected="selected"' : ''}}>{{$itemFinace->value}}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </div>
                                    <div class="col-sm-8">
                                        <form>
                                            <div class="blank-arrow">
                                                <label>Tóc</label>
                                            </div>
                                            <span>*</span>
                                            <input type="text" placeholder="Màu tóc của bạn..."  value="{{$infoDes->hair}}">
                                            <div class="blank-arrow">
                                                <label>Ưu tiên trong cuộc sống</label>
                                            </div>
                                            <span>*</span>
                                            <input type="text" placeholder="Ưu tiên trong cuộc sống của bạn..." value="{{$infoDes->priority_in_life}}">
                                            <div class="blank-arrow">
                                                <label>Đối tượng tìm kiếm</label>
                                            </div>
                                            <span>*</span>
                                            <select>
                                                @foreach($findSub as $itemSub)
                                                    <option value="{{$itemSub->id}}" {{$itemSub->id == '2' ?  'selected="selected"' : ''}} >{{$itemSub->value}}</option>
                                                @endforeach
                                            </select>
                                            <div class="blank-arrow">
                                                <br>
                                                <label>Độ tuổi</label>
                                            </div>
                                            <span>*</span>
                                            <select>
                                                @foreach($findAge as $itemAge)
                                                    <option value="{{$itemAge->id}}" {{$itemAge->id == '2' ?  'selected="selected"' : ''}} >{{$itemAge->value}}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="companyprofile" >
                            <div class="replay-box">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <form>
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
                                        </form>
                                    </div>
                                    <div class="col-sm-8">
                                        <form>
                                            <div class="blank-arrow">
                                                <label>Thể thao</label>
                                            </div>
                                            <input type="text" placeholder="Môn thể thao bạn thích..." value="{{$infoHobby->sport}}" name="sport">
                                            <div class="blank-arrow">
                                                <label>Sở thích</label>
                                            </div>
                                            <input type="text" placeholder="Sở thích cá nhân của bạn..." value="{{$infoHobby->hobby}}" name="hobby">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="replay-box">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <form>
                                            <div class="blank-arrow">
                                                <label>Họ Tên</label>
                                            </div>
                                            <span>*</span>
                                            <input type="text" placeholder="Điền Họ Tên Của Bạn..." value="{{$info_basic->name}}">
                                            <div class="blank-arrow">
                                                <label>Email</label>
                                            </div>
                                            <span>*</span>
                                            <input type="email" placeholder="Email Của Bạn..." value="{{$info_basic->email}}">
                                            <div class="blank-arrow">
                                                <label>Số Điện Thoại</label>
                                            </div>
                                            <input type="text" placeholder="Số Điện Thoại..." value="{{$info_basic->phone}}">
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
                                        </form>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-area">
                                            <div class="blank-arrow">
                                                <label>Địa Chỉ</label>
                                            </div>
                                            <span>*</span>
                                            <textarea name="address" rows="11" placeholder="Địa Chỉ"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/Repaly Box-->
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-actions">
                            <button type="button" class="btn btn-default">Cập Nhật</button>
                        </div>
                    </form>
                </div><!--/category-tab-->

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
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
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
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="/images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
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
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
@endsection