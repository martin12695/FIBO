@extends('layouts.master')
@section('title', 'Trang cá nhân')
@section('content')
    <div class="tw3-wrapper" style="margin-top:80px" ng-app="profile" ng-controller="profile_ctrl">
    <div class="tw3-content tw3-content--fabActive">
        <div class="tw3-container pos--rel">
            <div class="mb--compact tw3-promosHolder--bp4Widget jsSidePromotion">
            </div>
            <div class="tw3-profile tw3-box--padding--off jsProfile tw3-profile--your">
                <div class="tw3-container">
                    <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                        <a href="" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-add-friends">Kết bạn</a>
                    </div>
                    <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                        <a href="" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap btn-upload-image">Upload ảnh đại diện</a>
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
                                                            <img width="26" height="26" alt="275135195" src="https://twoo04-a.akamaihd.net/t/cfc3981f88f7f58c3474169c9d95799b_1_5_0_959_960_75_75_0000073181.jpg" class="tw3-avatar">
                                                        </div>
                                                    </div>
                                                    <div class="tw3-media__body">
                                                        <span class="tw3-h3"><strong>{{$info_basic->name}}</strong>, 21</span><br>
                                                        <div class="tw3-media__body__content">
                                                            <div class="text--subtle text--smaller">
                                                                Sống tại <a class="tw3-completeContainer__text noline" href="">Tp. Hồ Chí Minh</a>
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
                            <a class="tw3-tab selected" href="#panel=about" data-tab="about">Thông tin</a>
                            <a class="tw3-tab" href="#panel=details" data-tab="details">Chi tiết</a>
                            <a class="tw3-tab" href="#panel=photos" data-tab="photos">Hình</a>
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
                                                                            <input type="submit" value="Lưu" class="tw3-button tw3-button--blue tw3-button--rounded"><a href="" class="jsEditableCancel tw3-button tw3-button--subtle tw3-button--rounded">Hủy</a>
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
                                                    <a href="" class="noline inhouseAds inhouseAds--boost2 jsBuyProduct">
                                                        <div class="centerBlock">
                                                            <div class="centerBlock__item">
                                                                <img src="https://twoo04-a.akamaihd.net/t/cfc3981f88f7f58c3474169c9d95799b_1_5_0_959_960_75_75_0000073181.jpg" width="42" height="42" class="tw3-avatar tw3-avatar--circle">
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-7 tw3-offset-right-4 tw3-offset-left-1 text--left">
                                                                        <h4 class="tw3-h4">Gây Chú ý sơ yếu của bạn trong 15 phút!</h4>
                                                                        <div class="tw3-button tw3-button--boost tw3-button--rounded">
                                                                            <i class="fa fa-star-o" aria-hidden="true"></i> Gây Chú ý</div>
                                                                        <p class="m0"><small class="text--white">Chi phí: 100 Tín dụng </small></p>
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
                                <form action="/ss" method="post">
                                    <div class="">
                                        <h5 class="jsEditableBlockTitle mb--default text--bold">THÔNG TIN CƠ BẢN</h5>
                                        <div class="tw3-field__editIcon">
                                            <a href="#" class="edit-link"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px"></i></a>
                                            <a href="#" style="display: none;" class="cancel"><i class="fa fa-ban" aria-hidden="true" style="font-size: 25px"></i></a>
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
                                                                        <p class="tw3-field-value">Nam</p>
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
                                                                        <p class="tw3-field-value">Thành phố Hồ Chí Minh</p>
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
                                                                        <p class="tw3-field-title">Công việc &amp; trình độ</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Số điện thoại</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value"></p>
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
                                                                                <label for="firstname">
                                                                                    TÊN
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-form__row__input">
                                                                                <input type="text" ng-init="info.name='{{$info_basic->name}}'" name="firstname" id="firstname" class="tw3-text" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-12 mb--default">
                                                                            <div class="tw3-form__row__label">
                                                                                <label for="gender">
                                                                                    GIỚI TÍNH
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-dropdownHolder">
                                                                                <select tabindex="1" name="gender" class="dropdown">
                                                                                    <option value="1" selected>Nam</option>
                                                                                    <option value="2">Nữ</option>
                                                                                </select>
                                                                                <small class="text--subtle">Bạn chỉ được thay đổi một lần</small>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-12 mb--default">

                                                                            <div class="tw3-form__row__label">
                                                                                <label for="birthday">
                                                                                    NGÀY SINH
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-form__row__input">
                                                                                <div class="tw3-row">
                                                                                    <input class="tw3-text" id="datepicker" type="datetime" placeholder="Ngày sinh Của Bạn..." value="{{$info_basic->birthday}}" >
                                                                                </div>
                                                                                <small class="text--subtle">Bạn chỉ được thay đổi một lần</small>
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
                                                                                        <option value="{{$itemPro->id}}" {{'2' == $itemPro->id ?  'selected="selected"' : ''}} >{{$itemPro->name}}</option>
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
                                                                                <label for="gender">
                                                                                    Địa chỉ Email
                                                                                </label>
                                                                            </div>
                                                                            <input type="text" value="" name="email" class="tw3-text">
                                                                        </div>
                                                                    </div>
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
                                                                                    Sinh viên trường
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-form__row__input">
                                                                                <select class="dropdown">
                                                                                    <option>Trường Công Nghệ Thông tin</option>
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
                                    <div class=" jsLooksProfileBlock jsEditableBlock">
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
                                                                        <p class="tw3-field-value">{{$infoDes->hair}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Chiều cao</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">{{$infoDes->height}} cm</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Màu tóc</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">
                                                                            {{$infoDes->hair}}
                                                                        </p>
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
                                                                        <p class="tw3-field-title">Tôi có</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">
                                                                            ...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Phong cách ăn mặc</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">
                                                                            ...
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
                                                                                        @foreach($body as $itemBody)
                                                                                            <option value="{{$itemBody->id}}" {{$itemBody->id == '2' ?  'selected="selected"' : ''}}>{{$itemBody->value}}</option>
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
                                                                                        @foreach($findSub as $itemSub)
                                                                                            <option value="{{$itemSub->id}}" {{$infoDes->subject_find == $itemSub->id ?  'selected="selected"' : ''}} >{{$itemSub->value}}</option>
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
                                                                                        @foreach($findAge as $itemAge)
                                                                                            <option value="{{$itemAge->id}}" {{$infoDes->subject_eag == $itemAge->id ?  'selected="selected"' : ''}} >{{$itemAge->value}}</option>
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
                                                                        <p class="tw3-field-value">
                                                                            {{$infoHobby->music}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Phim</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">{{$infoHobby->movie}}
                                                                        </p>
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
                                                                        <p class="tw3-field-title">Hôn nhân là</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Tôi ghen tỵ</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Vật nuôi</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
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
                            <div data-tab="photos" style="display:none" id="photos" class="tw3-panel tab-item" >
                                <div class="tw3-thumbsHolder">
                                    <div class="tw3-row">
                                        <div class="tw3-thumb tw3-thumb--addPhoto">
                                            <a href="javascript:;" class="tw3-thumb__link tw3-pointerMenuToggle jsAddPhoto">
                                                <span class="heightBlock tw3-thumb__link__image">
                                                    <span class="centerBlock">
                                                        <p class="centerBlock__item thumb--private__text">
                                                            <i class="fa fa-plus" aria-hidden="true"></i><br>
                                                            <span>Thêm hình</span>
                                                        </p>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="tw3-thumb jsPhotoThumb">
                                            <a class="tw3-thumb__link" href="">
                                                <img class="jsTriggerPhotoBox tw3-thumb__link__image" alt="" src="https://twoo01-a.akamaihd.net/c/ed25bb5908882fb0c82ffffbe75fd9e6_3_5_0_959_960_600_720_0000748495.jpg">
                                            </a>
                                        </div>
                                        <div class="tw3-thumb jsPhotoThumb">
                                            <a class="tw3-thumb__link" href="">
                                                <img class="jsTriggerPhotoBox tw3-thumb__link__image" alt="" src="https://twoo04-a.akamaihd.net/c/54f38d121906bffca3430d4baca22df0_3_5_0_576_576_600_720_0014554081.jpg">
                                            </a>
                                        </div>
                                        <div class="tw3-thumb jsPhotoThumb">
                                            <a class="tw3-thumb__link" href="">
                                                <img class="jsTriggerPhotoBox tw3-thumb__link__image" alt="" src="https://twoo01-a.akamaihd.net/c/fbcacf57cabab00145cfe64793a9dc92_3_5_0_959_960_600_720_0012050110.jpg">
                                            </a>
                                        </div>
                                        <div class="tw3-thumb jsPhotoThumb">
                                            <a class="tw3-thumb__link" href="">
                                                <img class="jsTriggerPhotoBox tw3-thumb__link__image" alt="" src="https://twoo01-a.akamaihd.net/c/8e1963b416e44a357c1012f659083847_3_5_0_960_960_600_720_0006110854.jpg">
                                            </a>
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
@endsection
@section('custom-js')
    <script src="/js/user-profile.js" type="text/javascript"></script>
@endsection
