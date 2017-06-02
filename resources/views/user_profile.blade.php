@extends('layouts.master')
@section('title', 'Trang cá nhân')
@section('custom-css')
    <link rel="stylesheet" href="/css/lib/editor-image.css">
@endsection
@section('content')
    <div class="tw3-wrapper" style="margin-top:80px" ng-app="profile" ng-controller="profile_ctrl">
        <div class="tw3-content tw3-content--fabActive">
            <div class="tw3-container pos--rel">
                <div class="mb--compact tw3-promosHolder--bp4Widget jsSidePromotion">
                </div>
                <div class="tw3-profile tw3-box--padding--off jsProfile tw3-profile--your">
                    <div class="tw3-container">
                        <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                            <a id="addfriend_btn" data-toggle="modal" data-target="#myModal" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-add-friends">Report</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form method="post" action="{{ route('userReport.id', $info_basic->id) }}">
                                    {{ csrf_field() }}
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Nội dung report</h4>
                                        </div>
                                        <div class="modal-body">
                                            <label for="report">Chọn lý do report</label><br>
                                            <div class="radio">
                                                <label><input type="radio" name="report" value="1">Tên tài khoản không hợp lệ.</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="report" value="2">Ảnh cá nhân không hợp lệ.</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="report" value="3">Thông tin cá nhân không hợp lệ.</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="report" value="4">Khác...</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                            <input type="submit" class="btn btn-primary" name="btn-submit-rp" value="Gửi">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @if ($have_related == 0)
                            <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                                <a style="left: -230px;" onclick="addFriend({{$info_basic->id}})" id="addfriend_btn" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-add-friends">Kết bạn</a>
                            </div>
                        @else
                            <div class="tw3-col-6 tw3-bp3-col-4 mt--default">
                                <a style="left: -230px;" href="" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-add-friends">Hủy kết bạn</a>
                            </div>
                            <div class="tw3-col-6 tw3-bp3-col-4 mt--default">
                                <a  style="left: -460px;" onclick="addCouple({{$info_basic->id}})" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-add-friends" id="addcouple_btn">Hẹn hò</a>
                            </div>
                        @endif
                        @if( empty($info_basic->id) )
                        <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                            <a class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-upload-image" data-toggle="modal" data-target="#myModal">Upload ảnh đại diện</a>
                        </div>
                        @endif
                        <div class="tw3-row tab-wrapper">
                            <div class="tw3-profile__infoTop">
                                <div class="tw3-row">
                                    <div class="tw3-col--flex">
                                        <div class="tw3-row">
                                            <div class="tw3-col-12 text--left">
                                                <div class="tw3-completeContainer tw3-completeContainer--VeryLow">
                                                    <div class="tw3-media tw3-media--figure--fixed">
                                                        <div class="tw3-media__figure">
                                                            <div class="tw3-avatarContainer tw3-avatarContainer--progress">
                                                                <div class="tw3-avatarContainer__circle"></div>
                                                                <img width="100" height="100" alt="275135195" src="/{{$info_basic->avatar}}" class="tw3-avatar">
                                                            </div>
                                                        </div>

                                                        <div class="tw3-media__body">
                                                            <span class="tw3-h3"><strong>{{$info_basic->name}}</strong></span><br>
                                                            <div class="tw3-media__body__content">
                                                                <div class="text--subtle text--smaller">
                                                                    Sống tại <a class="tw3-completeContainer__text noline" href="">{{ $cities->value }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tw3-tabsHolder tw3-profileTabsHolder tab">
                                <a class="tw3-tab selected" href="#panel=about" data-tab="about" style="text-decoration: none">Thông tin</a>
                                <a class="tw3-tab" href="#panel=details" data-tab="details" style="text-decoration: none">Chi tiết</a>
                                <a class="tw3-tab" href="#panel=photos" data-tab="photos" style="text-decoration: none">Hình</a>
                            </div>
                            <div class="jsPanels tw3-col--flex tab-content" style="margin-top:25px">
                                <div data-tab="about" id="about" class="tw3-panel tab-item selected" style="display: block;">
                                    <div class="tw3-row">
                                        <div class="tw3-col-12">
                                            <div class="tw3-row">
                                                <div class="tw3-col-12 tw3-bp4-col-8">
                                                    <div class="tw3-row">
                                                        <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1 padding-info">
                                                            <div class="jsMyProfileCompleteDetailsContainer">
                                                                <div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-12 tw3-bp3-col-8">
                                                                            <h5 class="jsEditableBlockTitle mb--default text--bold">HOÀN TẤT SƠ YẾU CỦA BẠN</h5>
                                                                            <p class="text--subtle">Điền thêm thông tin để gặp thêm bạn mới</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <hr class="tw3-hr mtb--default">
                                                            </div>
                                                            <div class="tw3-editable__block">
                                                                <h5 class="jsEditableBlockTitle mb--default text--bold">Thông tin về tôi</h5>
                                                                <div class="tw3-field">
                                                                    <p class="text--subtle mb--default text--italic message">
                                                                        Giới thiệu về bạn.
                                                                    </p>
                                                                    <div>
                                                                        <div class="editForm" style="display: none">
                                                                            <textarea placeholder="Giới thiệu về bạn." maxlength="550" data-maxcharsbadge=".jsIntroMessageCharactersLeft" class="tw3-textarea jsAutoExpandTextarea jsMaxCharsTextarea mb--tight" name="intromessage"></textarea>
                                                                            <span class="jsIntroMessageCharactersLeft badge">Tối đa 550 ký tự</span>
                                                                            <div class="tw3-buttonGroup" style="margin-top: 10px">
                                                                                <input type="submit" value="Lưu" class="tw3-button tw3-button--blue tw3-button--rounded">
                                                                                <a href="" class="jsEditableCancel tw3-button tw3-button--subtle tw3-button--rounded">Hủy</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <hr class="tw3-hr mtb--default">
                                                            <div class="tw3-editable__block">
                                                                <h5 class="text--bold jsEditableBlockTitle">
                                                                    TÔI MUỐN GẶP GỠ
                                                                </h5>
                                                                <div class="tw3-field">
                                                                    <div class="tw3-field__view">
                                                                        <ul class="text--subtle tw3-list mb--default message">
                                                                            <li>
                                                                                Phụ nữ
                                                                            </li>
                                                                            <li>
                                                                                Độ tuổi từ 18 đến 20</li>
                                                                            <li>
                                                                                Sống tại Thành phố Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div>
                                                                        <div class="editForm" style="display: none">

                                                                            <div class="tw3-row clearfix">
                                                                                <div class="tw3-col-12 mb--compact">
                                                                                    <div class="tw3-form__row__label">
                                                                                        <label for="gender">
                                                                                            CHỌN ĐỐI TƯỢNG
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="tw3-dropdownHolder">
                                                                                        <select tabindex="1" name="gender" class="dropdown">
                                                                                            <option value="1">Đàn ông</option>
                                                                                            <option value="2" selected>Phụ nữ</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tw3-col-12 mb--compact">
                                                                                    <div class="tw3-form__row__label">
                                                                                        <label for="gender">
                                                                                            ĐỘ TƯỞI TỪ
                                                                                        </label>
                                                                                    </div>
                                                                                    <div name="age" class="tw3-rangeHolder jsCustomRange">
                                                                                        <select tabindex="1" name="age" class="dropdown">
                                                                                            <option value="1" selected>18 - 20</option>
                                                                                            <option value="2">21 - 25</option>
                                                                                            <option value="3">...</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw3-row clearfix">
                                                                                <div class="tw3-col-12 mb--compact">
                                                                                    <div class="tw3-form__row__label">
                                                                                        <label for="gender">
                                                                                            SỐNG TẠI
                                                                                        </label>
                                                                                    </div>
                                                                                    <input type="text" id="autocomplete" name="city" value="" class="tw3-text tw3-searchfield">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="tw3-hr mtb--default">
                                                            <div class="tw3-editable__block tw3-editable__block--disabled">
                                                                <h5 class="text--bold jsEditableBlockTitle">THỐNG KÊ SƠ YẾU</h5>
                                                                <ul class="text--subtle tw3-list mb--default">
                                                                    <li>
                                                                        <strong class="text--green">4</strong> người đã thăm sơ yếu của bạn ngày hôm nay
                                                                    </li>
                                                                    <li>
                                                                        Sơ yếu của bạn đã được thăm <strong class="text--green">7</strong> lần trong 30 ngày qua
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tw3-col-12 tw3-bp4-col-4">
                                                    <div class="tw3-box--padding--off mb--compact">
                                                        <a href="" class="noline inhouseAds inhouseAds--boost2 jsBuyProduct" style="background: url(https://www.twoo.com/static/7493194841967495115302/images/v3/ads-inhouse/boost1.png) no-repeat;background-size: 100%;">
                                                            <div class="centerBlock">
                                                                <div class="centerBlock__item">
                                                                    <img src="/{{$info_basic->avatar}}" width="42" height="42" class="tw3-avatar tw3-avatar--circle" style="top:42px; right: 42px;">
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-7 tw3-offset-right-4 tw3-offset-left-1 text--left">
                                                                            <h4 class="tw3-h4">Gây Chú ý sơ yếu của bạn trong 15 phút!</h4>
                                                                            <div class="tw3-button tw3-button--boost tw3-button--rounded"><i class="fa fa-star-o" aria-hidden="true"></i> Gây Chú ý</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-tab="details" style="display:none" id="details" class="tw3-panel tab-item tw3-editable__block" >
                                    <form action="{{ url('/user/updateInfo') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="">
                                            <h5 class="jsEditableBlockTitle mb--default text--bold">THÔNG TIN CƠ BẢN</h5>
                                            @if( empty($info_basic->id) )
                                            <div class="tw3-field__editIcon" style="margin-right: 10px">
                                                <a href="#" class="edit-link">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px"></i>
                                                </a>
                                                <a href="#" style="display: none;" class="cancel">
                                                    <i class="fa fa-ban" aria-hidden="true" style="font-size: 25px"></i>
                                                </a>
                                            </div>
                                            @endif
                                            <div class="tw3-field">
                                                <div class="tw3-field__view clearfix">
                                                    <div class="tw3-row">
                                                        <div class="tw3-col-12 tw3-bp4-col-6">
                                                            <div class="tw3-row">
                                                                <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1 padding-info">
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Tên</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value" >{{$info_basic->name}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Giới tính</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ $sex->value }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Ngày sinh</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">
                                                                                {{$info_basic->birthday}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Thành phố</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($cities->value) ? $cities->value : '...' }}</p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tw3-col-12 tw3-bp4-col-6">
                                                            <div class="tw3-row">
                                                                <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-left-1 padding-info">
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Địa chỉ email</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{$info_basic->email}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Số điện thoại</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{$info_basic->phone}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Mã số sinh viên</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($info_basic->mssv) ? $info_basic->mssv : '...' }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Sinh viên trường</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($schools->value) ? $schools->value : '...' }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="tw3-hr mb--default">
                                                </div>
                                                <div>
                                                    <div class="editForm" style="display: none">
                                                        <div class="tw3-row">
                                                            <div class="tw3-col-12 tw3-bp4-col-6 mb--default">
                                                                <div class="tw3-row">
                                                                    <div class="col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1">
                                                                        <div class="tw3-row">
                                                                            <div class="tw3-col-12 mb--default">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="">
                                                                                        Điện thoại
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-form__row__input">
                                                                                    <input type="text" value="" name="phone" class="tw3-text">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row">
                                                                            <div class="tw3-col-12 mb--default">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="">
                                                                                        Mã số sinh viên
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-form__row__input">
                                                                                    <input type="text" value="" name="mssv" class="tw3-text">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row">
                                                                            <div class="tw3-col-12 mb--default">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="">
                                                                                        Upload hình thẻ sinh viên
                                                                                    </label>
                                                                                </div>
                                                                                @if( empty($info_basic->id) )
                                                                                <div class="tw3-form__row__input">
                                                                                    <a style="left: 0px;" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-upload-image" data-toggle="modal" data-target="#myModal">Upload ảnh đại diện</a>
                                                                                </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row">
                                                                            <div class="tw3-col-12 mb--default">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="city">
                                                                                        THÀNH PHỐ
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="province" class="dropdown">
                                                                                        @foreach($province as $itemPro)
                                                                                            <option value="{{$itemPro->id_province}}" {{$itemPro->id_province == $cities->id_province ?  'selected="selected"' : ''}} >{{$itemPro->value}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tw3-col-12 tw3-bp4-col-6 mb--default">
                                                                <div class="tw3-row">
                                                                    <div class="col-12 tw3-bp4-col-11 tw3-bp4-offset-left-1">
                                                                        <div class="tw3-row">
                                                                            <div class="tw3-col-12 mb--default">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="">
                                                                                        Sinh viên trường
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="school" class="dropdown">
                                                                                        @if( empty($schools) )
                                                                                            {{ $term = '1' }}
                                                                                        @else
                                                                                            {{ $term = $schools->id }}
                                                                                        @endif
                                                                                        @foreach($school as $itemPro)
                                                                                            <option value="{{$itemPro->id}}" {{$itemPro->id == $term ?  'selected="selected"' : ''}} >{{$itemPro->value}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="tw3-hr mb--default">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jsLooksProfileBlock jsEditableBlock">
                                            <h5 class="jsEditableBlockTitle mb--default text--bold">Thông tin chi tiết</h5>
                                            <div class="tw3-field">
                                                <div class="tw3-field__view clearfix">
                                                    <div class="tw3-row">
                                                        <div class="tw3-col-12 tw3-bp4-col-6">
                                                            <div class="tw3-row">
                                                                <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1 padding-info">
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Thân hình</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($bodies->value) ? $bodies->value : '...' }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Chiều cao</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($infoDes->height) ? $infoDes->height. ' cm': '...' }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Cân nặng</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($infoDes->weight) ? $infoDes->weight. ' kg': '...' }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Màu tóc</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($infoDes->hair) ? $infoDes->hair : '...' }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tw3-col-12 tw3-bp4-col-6">
                                                            <div class="tw3-row">
                                                                <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-left-1 padding-info">
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Tài chính</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">
                                                                                {{ isset($finances->value) ? $finances->value : '...' }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Ưu tiên cuộc sống</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">
                                                                                {{$infoDes->priority_in_life}}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Đối tượng tìm kiếm</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">
                                                                                {{ isset($findSubs->value) ? $findSubs->value : '...' }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Độ tuổi</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">
                                                                                {{ isset($findAges->value) ? $findAges->value : '...' }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="tw3-hr mb--default">
                                                </div>
                                            </div>
                                        </div>
                                        <div data-edit-feedback="Thông tin về tính cách của bạn đã được lưu." class="jsPersonalityProfileBlock  jsEditableBlock">
                                            <h5 class="jsEditableBlockTitle mb--default text--bold">Sở thích</h5>
                                            <div class="tw3-field">
                                                <div class="tw3-field__view clearfix">
                                                    <div class="tw3-row">
                                                        <div class="tw3-col-12 tw3-bp4-col-6">
                                                            <div class="tw3-row">
                                                                <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1 padding-info">
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Âm nhạc</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($infoHobby->music) ? $infoHobby->music : '...'}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Phim</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($infoHobby->movie) ? $infoHobby->movie : '...'}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tw3-col-12 tw3-bp4-col-6">
                                                            <div class="tw3-row">
                                                                <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-left-1 padding-info">
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Thể thao</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($infoHobby->sport) ? $infoHobby->sport : '...'}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-title">Sở thích</p>
                                                                        </div>
                                                                        <div class="tw3-col-6">
                                                                            <p class="tw3-field-value">{{ isset($infoHobby->hobby) ? $infoHobby->hobby : '...'}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="tw3-hr mb--default">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div data-tab="photos" style="display:none" id="photos" class="tw3-panel tab-item" >
                                    <div class="tw3-thumbsHolder">
                                        @foreach($photos as $photo)
                                            <div class="tw3-thumb jsPhotoThumb">
                                                <a class="tw3-thumb__link fancybox" rel="gallery1" href="{{url('album/'.$photo->link)}}" title="Lorem ipsum dolor sit amet">
                                                    <img class="jsTriggerPhotoBox tw3-thumb__link__image" alt="" src="{{url('album/'.$photo->link)}}">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function centerModal() {
            $(this).css('display', 'block');
            var $dialog = $(this).find(".modal-dialog");
            var offset = ($(window).height() - $dialog.height()) / 2;
            // Center modal vertically in window
            $dialog.css("margin-top", offset);
        }

        $('.modal').on('show.bs.modal', centerModal);
        $(window).on("resize", function () {
            $('.modal:visible').each(centerModal);
        });
    </script>
@endsection
@section('custom-js')
    <script src="/js/user-profile.js" type="text/javascript"></script>
@endsection
