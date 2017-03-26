@extends('layouts.master')
@section('title', 'Chào Mừng Bạn Đến Với FiBo')
@section('content')
    <section id="form"><!--form-->
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a class="lightbox" href="">
                            <img src="images/park.jpg" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>Trang Chủ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a class="lightbox" href="">
                            <img src="images/bridge.jpg" alt="Bridge">
                        </a>
                        <div class="caption">
                            <h3>Confession</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a class="lightbox" href="">
                            <img src="images/tunnel.jpg" alt="Tunnel">
                        </a>
                        <div class="caption">
                            <h3>Tìm Kiếm</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection
