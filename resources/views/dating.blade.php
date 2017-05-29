@extends('layouts.master')
@section('title', 'Tìm kiếm - FIBO')
@section('custom-css')
    <link rel="stylesheet" href="./css/home.css">
@endsection
@section('content')
    <div class="tw3-wrapper" style="margin-top: 160px" >
        <div class="tw3-content">
            <div class="tw3-container">
                <div class="tw3-filter__form__content" ng-init="lat=10.814260;long=106.680445">
                    <div class="tw3-rangeHolder jsCustomRange">
                        <div class="tw3-col-5">
                            <div class="tw3-form__row__label" >
                                <label for="age">
                                    Loại Địa Điểm
                                </label>
                            </div>
                            <div class="tw3-dropdownHolder">
                                <select name="locaiton_type" id='location_type' class="dropdown">
                                        <option value="0" selected>Toàn Bộ</option>
                                        <option value="cafe" >Quán nước</option>
                                        <option value="movie_theater" >Rạp chiếu phim</option>
                                        <option value="rv_park" >Công viên</option>
                                        <option value="food" >Đồ ăn</option>
                                </select>
                            </div>
                        </div>
                        <div class="tw3-col-5">
                            <div class="tw3-form__row__label">
                                <label for="age">
                                    Bán Kính
                                </label>
                            </div>
                            <div class="tw3-dropdownHolder">
                                <select name="locaiton_type" id='radius' class="dropdown">
                                    <option value="500" selected>500m</option>
                                    <option value="1000" selected>1000m</option>
                                    <option value="2000" selected>2000m</option>
                                    <option value="5000" selected>5000m</option>
                                    <option value="10000" selected>5000m</option>
                                </select>
                            </div>
                        </div>
                        <div class="tw3-col-2">
                            <button onclick="search()" >Tìm Kiếm</button>
                            </div>
                    </div>
                </div>
                <hr>
                <div style="margin-top: 70px">
                    <div id="map" style="height:500px"></div>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script>
        var mypoint = {lat: {{$myLocation->lat}},
                        lng: {{$myLocation->lng}}
        };
    </script>
    <script src="/js/dating.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWcj4zQpHBR5HYUX1fTnl5hUKtN-v2TOw&libraries=places&callback=initialize" async defer></script>
@endsection