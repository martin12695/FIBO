@extends('layouts.master')
@section('title', 'Tìm kiếm - FIBO')
@section('custom-css')
    <link rel="stylesheet" href="./css/home.css">
@endsection
@section('content')
    @if ($couple == null)
        <div class="tw3-wrapper" style="margin-top: 160px" >
            <div class="tw3-content">
                <div class="tw3-container">
                    <h3 style="color: blue">Bạn cần có đối tượng hẹn hò để sử dụng chức năng này !</h3>
                </div>
            </div>
        </div>
    @else
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
                                        <option value="cafe, cà phê" >Quán nước</option>
                                        <option value="rạp phim" >Rạp chiếu phim</option>
                                        <option value="công viên" >Công viên</option>
                                        <option value="quán ăn" >Đồ ăn</option>
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
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tạo cuộc hẹn</button>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Hẹn hò</h4>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                                    <input type="text" id='location_dating' class="form-control" placeholder="Nơi sẽ đến" aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input id='date_dating' class="form-control" placeholder="Ngày hẹn" aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    <input type="time" id='time_dating' class="form-control" placeholder="Giờ hẹn" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-default" onclick="bookDate()">Đặt hẹn</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
@endsection
@section('custom-js')
    @if ($couple != null)
    <script>
        var id_couple = {{$couple->id}};
        var mypoint = {lat: {{$myLocation->lat}},
                        lng: {{$myLocation->lng}}
        };

        var lovepoint = {lat: {{$couple->latest_position->lat}},
                        lng: {{$couple->latest_position->lng}}
        };
    </script>
    <script src="/js/dating.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWcj4zQpHBR5HYUX1fTnl5hUKtN-v2TOw&libraries=places&callback=initialize" async defer></script>
    @endif
@endsection
