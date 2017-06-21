@extends('layouts.master')
@section('title', 'Trang cá nhân')
@section('custom-css')
    <link rel="stylesheet" href="/css/lib/editor-image.css">
    <link rel="stylesheet" href="/css/lib/component.css">

@endsection
@section('content')
    <div class="tw3-wrapper" style="margin-top:80px" ng-app="profile" ng-controller="profile_ctrl">
    <div class="tw3-content tw3-content--fabActive">
        <div class="tw3-container pos--rel">
            <div class="mb--compact tw3-promosHolder--bp4Widget jsSidePromotion">
            </div>
            <div class="tw3-profile tw3-box--padding--off jsProfile tw3-profile--your">
                <div class="tw3-container">
                    @if( empty($info_basic->id) )
                    <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                        <a href="" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-add-friends">Kết bạn</a>
                    </div>
                    @endif
                    <div class="tw3-col-12 tw3-bp3-col-4 mt--default" style="margin-left: 230px">
                        <a class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-upload-image" data-toggle="modal" data-target="#myModal">Upload ảnh đại diện</a>
                    </div>
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
                            <a class="tw3-tab @if (Session::get('tab') == null) {{'selected'}} @endif" href="#panel=about" data-tab="about" style="text-decoration: none">Thông tin</a>
                            <a class="tw3-tab" href="#panel=details" data-tab="details" style="text-decoration: none">Chi tiết</a>
                            <a class="tw3-tab @if (Session::get('tab') == 1) {{'selected'}} @endif" href="#panel=photos" data-tab="photos" style="text-decoration: none">Hình</a>
                            <a class="tw3-tab" @if (Session::get('tab') == 2) {{'selected'}} @endif href="#panel=details" data-tab="authen" style="text-decoration: none">Chứng thực</a>
                        </div>
                        <div class="jsPanels tw3-col--flex tab-content" style="margin-top:25px">
                            <div data-tab="about" id="about" class="tw3-panel tab-item selected" @if (Session::get('tab') != null) {{'hidden'}} @endif>
                                <div class="tw3-row">
                                    <div class="tw3-col-12">
                                        <div class="tw3-row">
                                            <div class="tw3-col-12 tw3-bp4-col-8">
                                                <div class="tw3-row">
                                                    <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1 padding-info">
                                                        <div class="tw3-editable__block">
                                                            <h5 class="jsEditableBlockTitle mb--default text--bold">Thông tin về tôi</h5>
                                                            <div class="tw3-field">
                                                                <p class="text--subtle mb--default text--italic message">
                                                                    {{$info_basic->intro}}
                                                                </p>
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
                                                                            {{ isset($findSubs->value) ? $findSubs->value : '...' }}
                                                                        </li>
                                                                        <li>
                                                                            {{ isset($findAges->value) ? $findAges->value : '...' }}
                                                                        </li>
                                                                        <li>
                                                                            Sống tại {{ $cities->value }}</li>
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
                            <div data-tab="details"  id="details" class="tw3-panel tab-item tw3-editable__block" hidden>
                                <form action="{{ url('/user/updateInfo') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="">
                                        <h5 class="jsEditableBlockTitle mb--default text--bold">THÔNG TIN CƠ BẢN</h5>
                                        <div class="tw3-field__editIcon" style="margin-right: 10px">
                                            <a href="#" class="edit-link">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px"></i>
                                            </a>
                                            <a href="#" style="display: none;" class="cancel">
                                                <i class="fa fa-ban" aria-hidden="true" style="font-size: 25px"></i>
                                            </a>
                                        </div>
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
                                                                                <input type="text" value="{{$info_basic->mssv}}" name="mssv" class="tw3-text">
                                                                            </div>
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
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-12 mb--default">
                                                                            <div class="tw3-form__row__label">
                                                                                <label for="">
                                                                                    Giới thiệu bản thân
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-dropdownHolder">
                                                                               <textarea name="about_me" placeholder="Viết vài dòng về bạn" rows="6" class="tw3-col-12">{{$info_basic->intro}}</textarea>
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
                                            <div>
                                                <div class="editForm" style="display: none">
                                                    <div class="tw3-profileDetailsForms mb--default">
                                                        <div class="tw3-row">
                                                            <div class="tw3-col-12 tw3-bp4-col-6 mb--default">
                                                                <div class="tw3-row">
                                                                    <div class="col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1">
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="silhouette">
                                                                                        THÂN HÌNH
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="body" class="dropdown">
                                                                                        @if( empty($bodies) )
                                                                                            {{ $term = '8' }}
                                                                                        @else
                                                                                            {{ $term = $bodies->id }}
                                                                                        @endif
                                                                                        @foreach($body as $itemBody)
                                                                                            <option value="{{$itemBody->id}}" {{$itemBody->id == $term ?  'selected="selected"' : ''}}>{{$itemBody->value}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="length">
                                                                                        CHIỀU CAO (cm)
                                                                                    </label>
                                                                                </div>
                                                                                <div >
                                                                                    <input class="tw3-text" type="text" placeholder="Chiều cao của bạn (Đơn vị cm)..."  value="{{$infoDes->height}}" name="height">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="length">
                                                                                        CÂN NẶNG (kg)
                                                                                    </label>
                                                                                </div>
                                                                                <div >
                                                                                    <input class="tw3-text" type="text" placeholder="Cân nặng của bạn (Đơn vị kg)..."  value="{{$infoDes->weight}}" name="weight">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="hairColor">
                                                                                        MÀU TÓC
                                                                                    </label>
                                                                                </div>
                                                                                <input type="text" class="tw3-text" placeholder="Màu tóc của bạn..."  value="{{$infoDes->hair}}" name="hair">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tw3-col-12 tw3-bp4-col-6 mb--default">
                                                                <div class="tw3-row">
                                                                    <div class="col-12 tw3-bp4-col-11 tw3-bp4-offset-left-1">
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="silhouette">
                                                                                        TÀI CHÍNH
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="finance" class="dropdown">
                                                                                        @if( empty($finances) )
                                                                                            {{ $term = '1' }}
                                                                                        @else
                                                                                            {{ $term = $finances->id }}
                                                                                        @endif
                                                                                        @foreach($finance as $itemFinance)
                                                                                            <option value="{{$itemFinance->id}}" {{$itemFinance->id == $term ?  'selected="selected"' : ''}}>{{$itemFinance->value}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label>
                                                                                        ƯU TIÊN CUỘC SỐNG
                                                                                    </label>
                                                                                </div>
                                                                                <input class="tw3-text" type="text" placeholder="Ưu tiên trong cuộc sống của bạn..." value="{{$infoDes->priority_in_life}}" name="priority_in_life">
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="iHave">
                                                                                        ĐỐI TƯỢNG TÌM KIẾM
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="sub" class="dropdown">
                                                                                        @if( empty($findSubs) && $info_basic->sex == '1')
                                                                                            {{ $term = '2'}}
                                                                                        @endif

                                                                                        @if( empty($findSubs) && $info_basic->sex == '2' )
                                                                                            {{ $term = '1' }}
                                                                                        @endif

                                                                                        @if( !empty($findSubs) )
                                                                                            {{ $term = $findSubs->id }}
                                                                                        @endif

                                                                                        @foreach($findSub as $itemSub)
                                                                                            <option value="{{$itemSub->id}}" {{$itemSub->id == $term ?  'selected="selected"' : ''}} >{{$itemSub->value}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="clothingStyle">
                                                                                        ĐỘ TUỔI
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="sub_age" class="dropdown">
                                                                                        @if( empty($findAges) )
                                                                                            {{ $term = 1 }}
                                                                                        @else
                                                                                            {{ $term = $findAges->id }}
                                                                                        @endif
                                                                                        @foreach($findAge as $itemAge)
                                                                                            <option value="{{$itemAge->id}}" {{$itemAge->id == $term ?  'selected="selected"' : ''}} >{{$itemAge->value}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
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
                                            <div>
                                                <div class="editForm" style="display: none" action="/profile" method="post">
                                                    <div class="tw3-profileDetailsForms mb--default">
                                                        <div class="tw3-row">
                                                            <div class="tw3-col-12 tw3-bp4-col-6 mb--default">
                                                                <div class="tw3-row">
                                                                    <div class="col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1">
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="music">
                                                                                        Âm Nhạc
                                                                                    </label>
                                                                                </div>
                                                                                <input class="tw3-text" type="text" placeholder="Thể loại âm nhạc bạn thích..." value="{{$infoHobby->music}}" name="music">
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="Phim">
                                                                                        Phim
                                                                                    </label>
                                                                                </div>
                                                                                <input class="tw3-text" type="text" placeholder="Thể loại phim bạn thích..." value="{{$infoHobby->movie}}" name="movie">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tw3-col-12 tw3-bp4-col-6 mb--default">
                                                                <div class="tw3-row">
                                                                    <div class="col-12 tw3-bp4-col-11 tw3-bp4-offset-left-1">
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="iShareWithMyPartner">
                                                                                        Thể Thao
                                                                                    </label>
                                                                                </div>
                                                                                <input class="tw3-text" type="text" placeholder="Môn thể thao bạn thích..." value="{{$infoHobby->sport}}" name="sport">
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="hobby">Sở thích</label>
                                                                                </div>
                                                                                <input class="tw3-text" type="text" placeholder="Sở thích cá nhân của bạn..." value="{{$infoHobby->hobby}}" name="hobby">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="tw3-hr mb--default">
                                                    <div class="tw3-buttonGroup text--center" style="margin-bottom: 20px;">
                                                        <input type="submit" value="Lưu" class="tw3-button tw3-button--blue tw3-button--rounded"><a href="" class="jsEditableCancel tw3-button tw3-button--subtle tw3-button--rounded">Hủy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div data-tab="photos"  id="photos" class="tw3-panel tab-item" @if (Session::get('tab') == null || Session::get('tab') == 2 ) {{'hidden'}} @endif>
                                <div class="tw3-thumbsHolder">
                                    <div class="tw3-row">
                                        @foreach($photos as $photo)
                                        <div class="tw3-thumb jsPhotoThumb photo_image" data-image="{{$photo->id}}">
                                            <a class="tw3-thumb__link fancybox" rel="gallery1" title="<button onclick='delImage({{$photo->id}})'>Xóa</button>"  href="{{url('album/'.$photo->link)}}">
                                                <img class="jsTriggerPhotoBox tw3-thumb__link__image" alt="" src="{{url('album/'.$photo->link)}}">
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="tw3-row">
                                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="/uploadPhoto">
                                            {{ csrf_field() }}
                                            <div class="box js ">
                                                <input type="file" name="images[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} hình được chọn" multiple  />
                                                <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Chọn hình&hellip;</span></label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tải hình lênh</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div data-tab="authen"  id="authen" class="tw3-panel tab-item tw3-editable__block" @if (Session::get('tab') == null || Session::get('tab') == 1 ) {{'hidden'}} @endif>
                                <div class="">
                                    <div class="tw3-field">
                                        <div>
                                            <div class="tw3-row">
                                                <div class="tw3-col-12 mb--default">
                                                    <div class="tw3-form__row__label">
                                                        <label for="">
                                                            Upload hình thẻ sinh viên
                                                        </label>
                                                    </div>
                                                    <p>Vui lòng Upload 2 ảnh thẻ sinh viên (2 mặt) của bạn để chứng thực.(Kích thước mỗi tấm không quá 2mb)</p>
                                                    <div class="tw3-row">
                                                        @foreach($photos_authen as $photo)
                                                            <div class="tw3-thumb jsPhotoThumb photo_image" data-image="{{$photo->id}}">
                                                                <a class="tw3-thumb__link fancybox" rel="gallery1" title="<button onclick='delImage({{$photo->id}})'>Xóa</button>"  href="{{url('album/'.$photo->link)}}">
                                                                    <img class="jsTriggerPhotoBox tw3-thumb__link__image" alt="" src="{{url('album/'.$photo->link)}}">
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="tw3-col-8">
                                                        <form id="updateStudent" class="form-horizontal" enctype="multipart/form-data" method="post" action="/uploadstudentId">
                                                            {{ csrf_field() }}
                                                            <div class="box js ">
                                                                <input type="file" name="images[]" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} hình được chọn" multiple  />
                                                                <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Chọn hình&hellip;</span></label>
                                                                <input type="submit" class="btn btn-primary" style="float:right" form="updateStudent"/>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tw3-row">
                                                <span>
                                                    Trạng thái: @if ($info_basic->level != 'Quest')<span style="color: blue">Đã xác thực</span>
                                                                    @else <span style="color: red">Chưa xác thực</span>
                                                                    @endif
                                                </span>
                                            </div>
                                            <p class="tw3-row"><i>Sau khi chứng thực thành công bạn có thể sử dụng hết tất cả dịch vụ của FIBO.</i></p>
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
</div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="wrapper" style="height:600px;">
                    <!-- Open Modal Button -->
                    <div class="change-icon">
                        <a href="#" data-toggle='modal' data-target='#image-editor' style="text-decoration: none;">
                            <span class="change-icon-text">Tải hình lên</span>
                            <span class="icon-container">
                                <i class="fa fa-picture-o"></i>
                                <i class="fa fa-crop"></i>
                                <i class="fa fa-download"></i>
                            </span>
                        </a>
                    </div>
                    <!--    Editor Modal-->
                    <div id="image-editor" class="modal fade editor-modal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Tùy chỉnh hình ảnh của bạn</h2>
                                </div>
                                <div class="modal-body">
                                    <div class="editor-wrapper">
                                        <div class="editor-container">
                                            <div class="editor">
                                                <div class="resize-container">
                                                    <span class="resize-handle resize-handle-nw"></span>
                                                    <span class="resize-handle resize-handle-ne"></span>
                                                    <img class="resize-image" src="" alt="">
                                                    <span class="resize-handle resize-handle-se"></span>
                                                    <span class="resize-handle resize-handle-sw"></span>
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-inner"></div>
                                                </div>
                                                <div class="overlay overlay-preview">
                                                    <div class="overlay-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="upload">
                                        <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                                            {{ csrf_field() }}
                                            <input type="file" acccept="images/" class="form-control" id="uploaded-img" placeholder="Input field" accept="image/*">
                                            <div class="upload-button">
                                                <label for="uploaded-img">
                                                    <span class="label-text">Chọn hình để tải lên</span><span class="upload-icon"><i class="fa fa-upload"></i></span>
                                                </label>
                                            </div>
                                            <div class="edit-button">
                                                <button class="btn form-control preview-crop">Xem trước</button>
                                                <button type="submit" class="js-crop btn form-control" data-dismiss="modal">Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('custom-js')
    <script src="/js/user-profile.js" type="text/javascript"></script>
    <script src="/js/lib/editor-image.js"></script>
    <script src="/js/lib/custom-file-input.js"></script>
@endsection
