@extends('layouts.master')
@section('title', 'Trang cá nhân')
@section('content')
    <body>
    <div class="tw3-wrapper" style="margin-top:80px">
        <div class="tw3-content tw3-content--fabActive">
            <div class="tw3-container pos--rel">
                <div class="mb--compact tw3-promosHolder--bp4Widget jsSidePromotion">
                </div>
                <div class="tw3-profile tw3-box--padding--off jsProfile tw3-profile--your">
                    <div class="tw3-container">
                        <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                            <a href="" style="width: 25%; border-color: rgba(0,123,230,0.5); color: #007be6;" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap add-friends">Kết bạn</a>
                        </div>
                        <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                            <a href="" style="width: 45%; left: -230px; border-color: rgba(0,123,230,0.5); color: #007be6;" class="tw3-button tw3-button--full tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--wrap upload-image">Upload ảnh đại diện</a>
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
                                                            <span class="tw3-h3"><strong>Nguyễn Hữu Trung</strong>, 21</span><br>
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
                                                                        <div class="tw3-col-12 tw3-bp3-col-4 mt--default">
                                                                            <a class="tw3-button tw3-button--subtle tw3-button--blue tw3-button--rounded tw3-button--small jsCompleteProfileDetails" href="">Cập nhật chi tiết</a>
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
                                                                        <form class="editForm" action="" method="post" style="display: none">
                                                                            <input type="hidden" value="saveBlock" name="action">
                                                                            <input type="hidden" value="about" name="block">
                                                                            <textarea placeholder="Giới thiệu về bạn." maxlength="550" data-maxcharsbadge=".jsIntroMessageCharactersLeft" class="tw3-textarea jsAutoExpandTextarea jsMaxCharsTextarea mb--tight" name="intromessage"></textarea>
                                                                            <span class="jsIntroMessageCharactersLeft badge">Tối đa 550 ký tự</span>
                                                                            <div class="tw3-buttonGroup" style="margin-top: 10px">
                                                                                <input type="submit" value="Lưu" class="tw3-button tw3-button--blue tw3-button--rounded"><a href="" class="jsEditableCancel tw3-button tw3-button--subtle tw3-button--rounded">Hủy</a>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="tw3-field__editIcon">
                                                                        <a href="#" class="edit-link"><i class="fa fa-pencil-square-o" aria-hidden="true"  style="font-size: 25px"></i></a>
                                                                        <a href="#" style="display: none;" class="cancel"><i class="fa fa-ban" aria-hidden="true" style="font-size: 25px"></i></a>
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
                                                                        <form class="editForm" action="" method="post" style="display: none">
                                                                            <input type="hidden" value="saveBlock" name="action">
                                                                            <input type="hidden" value="lookingfor" name="block">
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
                                                                                    <input type="text" name="q" value="" class="jsAutoCompleter autoCompleter tw3-text tw3-searchfield">
                                                                                    <input type="hidden" name="locationID" id="locationID" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="tw3-buttonGroup">
                                                                                <input type="submit" value="Lưu" tabindex="6" class="tw3-button tw3-button--blue tw3-button--rounded"><a href="" class="jsEditableCancel tw3-button tw3-button--subtle tw3-button--rounded">Hủy</a>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="tw3-field__editIcon">
                                                                        <a href="#" class="edit-link"><i class="fa fa-pencil-square-o" aria-hidden="true"  style="font-size: 25px"></i></a>
                                                                        <a href="#" style="display: none;" class="cancel"><i class="fa fa-ban" aria-hidden="true" style="font-size: 25px"></i></a>
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
                                <div data-tab="details" style="display:none" id="details" class="tw3-panel tab-item" >
                                    <div class="tw3-editable__block">
                                        <h5 class="jsEditableBlockTitle mb--default text--bold">THÔNG TIN CƠ BẢN</h5>
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
                                                                        <p class="tw3-field-value">Nguyễn Hữu Trung</p>
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
                                                                            5 Tháng 7 1995</p>
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
                                                                        <p class="tw3-field-title">Tình trạng mối quan hệ</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">
                                                                            Tôi độc thân</p>
                                                                    </div>
                                                                </div>
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
                                                                        <p class="tw3-field-title">Công việc</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Trình độ</p>
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
                                                <form class="editForm" style="display: none" action="" method="post">
                                                    <input type="hidden" value="saveBlock" name="action">
                                                    <input type="hidden" value="basic" name="block">
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
                                                                                <input type="text" value="Nguyễn Hữu Trung" name="firstname" id="firstname" class="tw3-text">
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
                                                                                    <div class="tw3-col-4">
                                                                                        <select tabindex="1" name="birthday" class="dropdown">

                                                                                            <option value="1">1</option>
                                                                                            <option value="2">2</option>
                                                                                            <option value="3">3</option>
                                                                                            <option value="4">4</option>
                                                                                            <option selected="selected" value="5">5</option>
                                                                                            <option value="6">6</option>
                                                                                            <option value="7">7</option>
                                                                                            <option value="8">8</option>
                                                                                            <option value="9">9</option>
                                                                                            <option value="10">10</option>
                                                                                            <option value="11">11</option>
                                                                                            <option value="12">12</option>
                                                                                            <option value="13">13</option>
                                                                                            <option value="14">14</option>
                                                                                            <option value="15">15</option>
                                                                                            <option value="16">16</option>
                                                                                            <option value="17">17</option>
                                                                                            <option value="18">18</option>
                                                                                            <option value="19">19</option>
                                                                                            <option value="20">20</option>
                                                                                            <option value="21">21</option>
                                                                                            <option value="22">22</option>
                                                                                            <option value="23">23</option>
                                                                                            <option value="24">24</option>
                                                                                            <option value="25">25</option>
                                                                                            <option value="26">26</option>
                                                                                            <option value="27">27</option>
                                                                                            <option value="28">28</option>
                                                                                            <option value="29">29</option>
                                                                                            <option value="30">30</option>
                                                                                            <option value="31">31</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="tw3-col-4">
                                                                                        <select tabindex="1" name="birthmonth" class="dropdown">

                                                                                            <option value="1">Tháng 1</option>
                                                                                            <option value="2">Tháng 2</option>
                                                                                            <option value="3">Tháng 3</option>
                                                                                            <option value="4">Tháng 4</option>
                                                                                            <option value="5">Tháng 5</option>
                                                                                            <option value="6">Tháng 6</option>
                                                                                            <option selected="selected" value="7">Tháng 7</option>
                                                                                            <option value="8">Tháng 8</option>
                                                                                            <option value="9">Tháng 9</option>
                                                                                            <option value="10">Tháng 10</option>
                                                                                            <option value="11">Tháng 11</option>
                                                                                            <option value="12">Tháng 12</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="tw3-col-4">
                                                                                        <select tabindex="1" name="birthyear" class="dropdown">

                                                                                            <option value="1999">1999</option>
                                                                                            <option value="1998">1998</option>
                                                                                            <option value="1997">1997</option>
                                                                                            <option value="1996">1996</option>
                                                                                            <option selected="selected" value="1995">1995</option>
                                                                                            <option value="1994">1994</option>
                                                                                            <option value="1993">1993</option>
                                                                                            <option value="1992">1992</option>
                                                                                            <option value="1991">1991</option>
                                                                                            <option value="1990">1990</option>
                                                                                            <option value="1989">1989</option>
                                                                                            <option value="1988">1988</option>
                                                                                            <option value="1987">1987</option>
                                                                                            <option value="1986">1986</option>
                                                                                            <option value="1985">1985</option>
                                                                                            <option value="1984">1984</option>
                                                                                            <option value="1983">1983</option>
                                                                                            <option value="1982">1982</option>
                                                                                            <option value="1981">1981</option>
                                                                                            <option value="1980">1980</option>
                                                                                            <option value="1979">1979</option>
                                                                                            <option value="1978">1978</option>
                                                                                            <option value="1977">1977</option>
                                                                                            <option value="1976">1976</option>
                                                                                            <option value="1975">1975</option>
                                                                                            <option value="1974">1974</option>
                                                                                            <option value="1973">1973</option>
                                                                                            <option value="1972">1972</option>
                                                                                            <option value="1971">1971</option>
                                                                                            <option value="1970">1970</option>
                                                                                            <option value="1969">1969</option>
                                                                                            <option value="1968">1968</option>
                                                                                            <option value="1967">1967</option>
                                                                                            <option value="1966">1966</option>
                                                                                            <option value="1965">1965</option>
                                                                                            <option value="1964">1964</option>
                                                                                            <option value="1963">1963</option>
                                                                                            <option value="1962">1962</option>
                                                                                            <option value="1961">1961</option>
                                                                                            <option value="1960">1960</option>
                                                                                            <option value="1959">1959</option>
                                                                                            <option value="1958">1958</option>
                                                                                            <option value="1957">1957</option>
                                                                                            <option value="1956">1956</option>
                                                                                            <option value="1955">1955</option>
                                                                                            <option value="1954">1954</option>
                                                                                            <option value="1953">1953</option>
                                                                                            <option value="1952">1952</option>
                                                                                            <option value="1951">1951</option>
                                                                                            <option value="1950">1950</option>
                                                                                            <option value="1949">1949</option>
                                                                                            <option value="1948">1948</option>
                                                                                            <option value="1947">1947</option>
                                                                                            <option value="1946">1946</option>
                                                                                            <option value="1945">1945</option>
                                                                                            <option value="1944">1944</option>
                                                                                            <option value="1943">1943</option>
                                                                                            <option value="1942">1942</option>
                                                                                            <option value="1941">1941</option>
                                                                                            <option value="1940">1940</option>
                                                                                            <option value="1939">1939</option>
                                                                                            <option value="1938">1938</option>
                                                                                            <option value="1937">1937</option>
                                                                                            <option value="1936">1936</option>
                                                                                            <option value="1935">1935</option>
                                                                                            <option value="1934">1934</option>
                                                                                            <option value="1933">1933</option>
                                                                                            <option value="1932">1932</option>
                                                                                            <option value="1931">1931</option>
                                                                                            <option value="1930">1930</option>
                                                                                            <option value="1929">1929</option>
                                                                                            <option value="1928">1928</option>
                                                                                            <option value="1927">1927</option>
                                                                                        </select>
                                                                                    </div>
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
                                                                                <select name="city" class="dropdown">
                                                                                    <option value="0" selected>Tp Hồ Chí Minh</option>
                                                                                    <option value="1">Hà Nội</option>
                                                                                    <option value="2">...</option>
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
                                                                                <label for="relationship_status">
                                                                                    TÌNH TRẠNG MỐI QUAN HỆ
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-dropdownHolder">
                                                                                <select tabindex="1" name="relationship_status" class="dropdown">

                                                                                    <option value="TAKEN_HERE_FOR_FRIENDS">Tôi đang hẹn hò với người khác / ở đây để tìm bạn</option>
                                                                                    <option value="MARRIED_HERE_FOR_FRIENDS">Tôi đã kết hôn / ở đây để tìm bạn</option>
                                                                                    <option selected="selected" value="SINGLE">Tôi độc thân</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-12 mb--default">
                                                                            <div class="tw3-form__row__label">
                                                                                <label for="gender">
                                                                                    CÔNG VIỆC &amp; TRÌNH ĐỘ
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-dropdownHolder">
                                                                                <select tabindex="1" name="status" class="dropdown">

                                                                                    <option value="STUDYING">Đang đi học</option>
                                                                                    <option value="WORKING">Tôi đã đi làm</option>
                                                                                    <option value="LOOKING_FOR_WORK">Đang tìm việc</option>
                                                                                    <option value="RETIRED">Tôi đã về hưu</option>
                                                                                    <option value="OTHER">Khác</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-12 mb--default">
                                                                            <div class="tw3-form__row__label">
                                                                                <label for="job">
                                                                                    CÔNG VIỆC
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-form__row__input">
                                                                                <input type="text" value="" name="job" class="tw3-text">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw3-row">
                                                                        <div class="tw3-col-12 mb--default">
                                                                            <div class="tw3-form__row__label">
                                                                                <label for="education">
                                                                                    HỌC VẤN
                                                                                </label>
                                                                            </div>
                                                                            <div class="tw3-dropdownHolder">
                                                                                <select tabindex="1" name="education" class="dropdown">

                                                                                    <option value="1">Trường trung cấp</option>
                                                                                    <option value="2">Trường nghề</option>
                                                                                    <option value="3">Cao đẳng</option>
                                                                                    <option value="4">Đại học</option>
                                                                                    <option value="5">Cao học</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="tw3-hr mb--default">
                                                    <div class="tw3-buttonGroup text--center">
                                                        <input type="submit" value="Lưu" class="tw3-button tw3-button--blue tw3-button--rounded"><a href="" class="jsEditableCancel tw3-button tw3-button--subtle tw3-button--rounded">Hủy</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tw3-field__editIcon">
                                            <a href="#" class="edit-link"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px"></i></a>
                                            <a href="#" style="display: none;" class="cancel"><i class="fa fa-ban" aria-hidden="true" style="font-size: 25px"></i></a>
                                        </div>
                                    </div>
                                    <div class="tw3-editable__block jsLooksProfileBlock jsEditableBlock">
                                        <h5 class="jsEditableBlockTitle mb--default text--bold">Dáng vẻ</h5>
                                        <div class="tw3-field">
                                            <div class="tw3-field__view clearfix">
                                                <div class="tw3-row">
                                                    <div class="tw3-col-12 tw3-bp4-col-6">
                                                        <div class="tw3-row">
                                                            <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1 padding-info">
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Dân tộc</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Hình dáng</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Chiều cao</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">
                                                                            ...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Màu tóc</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Màu mắt</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
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
                                                                        <p class="tw3-field-title">Tôi đeo</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">
                                                                            ...
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
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Điểm đẹp nhất của tôi</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Diện mạo chung</p>
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
                                                <form class="editForm" style="display: none" action="" method="post">
                                                    <input type="hidden" value="saveBlock" name="action">
                                                    <input type="hidden" value="looks" name="block">
                                                    <input type="hidden" value="cm" id="jsUnit" name="unit">
                                                    <input type="hidden" value="1" name="clearOnEmpty">


                                                    <div class="tw3-profileDetailsForms mb--default">
                                                        <div class="tw3-row">
                                                            <div class="tw3-col-12 tw3-bp4-col-6 mb--default">
                                                                <div class="tw3-row">
                                                                    <div class="col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1">
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="ethnicity">
                                                                                        DÂN TỘC
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="ethnicity" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Người da trắng</option>
                                                                                        <option value="2">Người da đen</option>
                                                                                        <option value="3">Trung Đông</option>
                                                                                        <option value="4">Bắc Phi</option>
                                                                                        <option value="5">Châu Mỹ Latin</option>
                                                                                        <option value="7">Lai</option>
                                                                                        <option value="8">Người châu Á</option>
                                                                                        <option value="10">Khác</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="silhouette">
                                                                                        HÌNH BÓNG
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="silhouette" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Mảnh khảnh</option>
                                                                                        <option value="2">Dáng thể thao</option>
                                                                                        <option value="3">Bốc lửa</option>
                                                                                        <option value="4">Tròn trịa</option>
                                                                                        <option value="5">Siêu mẫu</option>
                                                                                        <option value="6">Vận động viên Olympic</option>
                                                                                        <option value="7">Có nhiều điểm đáng yêu</option>
                                                                                        <option value="8">Tôi sẽ nói sau</option>
                                                                                        <option value="9">Tôi sẽ để bạn tự khám phá</option>
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
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="length[cm]" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">1 cm</option>
                                                                                        <option value="2">2 cm</option>
                                                                                        <option value="3">3 cm</option>
                                                                                        <option value="4">4 cm</option>
                                                                                        <option value="5">5 cm</option>
                                                                                        <option value="6">6 cm</option>
                                                                                        <option value="7">7 cm</option>
                                                                                        <option value="8">8 cm</option>
                                                                                        <option value="9">9 cm</option>
                                                                                        <option value="10">10 cm</option>
                                                                                        <option value="11">11 cm</option>
                                                                                        <option value="12">12 cm</option>
                                                                                        <option value="13">13 cm</option>
                                                                                        <option value="14">14 cm</option>
                                                                                        <option value="15">15 cm</option>
                                                                                        <option value="16">16 cm</option>
                                                                                        <option value="17">17 cm</option>
                                                                                        <option value="18">18 cm</option>
                                                                                        <option value="19">19 cm</option>
                                                                                        <option value="20">20 cm</option>
                                                                                        <option value="21">21 cm</option>
                                                                                        <option value="22">22 cm</option>
                                                                                        <option value="23">23 cm</option>
                                                                                        <option value="24">24 cm</option>
                                                                                        <option value="25">25 cm</option>
                                                                                        <option value="26">26 cm</option>
                                                                                        <option value="27">27 cm</option>
                                                                                        <option value="28">28 cm</option>
                                                                                        <option value="29">29 cm</option>
                                                                                        <option value="30">30 cm</option>
                                                                                        <option value="31">31 cm</option>
                                                                                        <option value="32">32 cm</option>
                                                                                        <option value="33">33 cm</option>
                                                                                        <option value="34">34 cm</option>
                                                                                        <option value="35">35 cm</option>
                                                                                        <option value="36">36 cm</option>
                                                                                        <option value="37">37 cm</option>
                                                                                        <option value="38">38 cm</option>
                                                                                        <option value="39">39 cm</option>
                                                                                        <option value="40">40 cm</option>
                                                                                        <option value="41">41 cm</option>
                                                                                        <option value="42">42 cm</option>
                                                                                        <option value="43">43 cm</option>
                                                                                        <option value="44">44 cm</option>
                                                                                        <option value="45">45 cm</option>
                                                                                        <option value="46">46 cm</option>
                                                                                        <option value="47">47 cm</option>
                                                                                        <option value="48">48 cm</option>
                                                                                        <option value="49">49 cm</option>
                                                                                        <option value="50">50 cm</option>
                                                                                        <option value="51">51 cm</option>
                                                                                        <option value="52">52 cm</option>
                                                                                        <option value="53">53 cm</option>
                                                                                        <option value="54">54 cm</option>
                                                                                        <option value="55">55 cm</option>
                                                                                        <option value="56">56 cm</option>
                                                                                        <option value="57">57 cm</option>
                                                                                        <option value="58">58 cm</option>
                                                                                        <option value="59">59 cm</option>
                                                                                        <option value="60">60 cm</option>
                                                                                        <option value="61">61 cm</option>
                                                                                        <option value="62">62 cm</option>
                                                                                        <option value="63">63 cm</option>
                                                                                        <option value="64">64 cm</option>
                                                                                        <option value="65">65 cm</option>
                                                                                        <option value="66">66 cm</option>
                                                                                        <option value="67">67 cm</option>
                                                                                        <option value="68">68 cm</option>
                                                                                        <option value="69">69 cm</option>
                                                                                        <option value="70">70 cm</option>
                                                                                        <option value="71">71 cm</option>
                                                                                        <option value="72">72 cm</option>
                                                                                        <option value="73">73 cm</option>
                                                                                        <option value="74">74 cm</option>
                                                                                        <option value="75">75 cm</option>
                                                                                        <option value="76">76 cm</option>
                                                                                        <option value="77">77 cm</option>
                                                                                        <option value="78">78 cm</option>
                                                                                        <option value="79">79 cm</option>
                                                                                        <option value="80">80 cm</option>
                                                                                        <option value="81">81 cm</option>
                                                                                        <option value="82">82 cm</option>
                                                                                        <option value="83">83 cm</option>
                                                                                        <option value="84">84 cm</option>
                                                                                        <option value="85">85 cm</option>
                                                                                        <option value="86">86 cm</option>
                                                                                        <option value="87">87 cm</option>
                                                                                        <option value="88">88 cm</option>
                                                                                        <option value="89">89 cm</option>
                                                                                        <option value="90">90 cm</option>
                                                                                        <option value="91">91 cm</option>
                                                                                        <option value="92">92 cm</option>
                                                                                        <option value="93">93 cm</option>
                                                                                        <option value="94">94 cm</option>
                                                                                        <option value="95">95 cm</option>
                                                                                        <option value="96">96 cm</option>
                                                                                        <option value="97">97 cm</option>
                                                                                        <option value="98">98 cm</option>
                                                                                        <option value="99">99 cm</option>
                                                                                        <option value="100">100 cm</option>
                                                                                        <option value="101">101 cm</option>
                                                                                        <option value="102">102 cm</option>
                                                                                        <option value="103">103 cm</option>
                                                                                        <option value="104">104 cm</option>
                                                                                        <option value="105">105 cm</option>
                                                                                        <option value="106">106 cm</option>
                                                                                        <option value="107">107 cm</option>
                                                                                        <option value="108">108 cm</option>
                                                                                        <option value="109">109 cm</option>
                                                                                        <option value="110">110 cm</option>
                                                                                        <option value="111">111 cm</option>
                                                                                        <option value="112">112 cm</option>
                                                                                        <option value="113">113 cm</option>
                                                                                        <option value="114">114 cm</option>
                                                                                        <option value="115">115 cm</option>
                                                                                        <option value="116">116 cm</option>
                                                                                        <option value="117">117 cm</option>
                                                                                        <option value="118">118 cm</option>
                                                                                        <option value="119">119 cm</option>
                                                                                        <option value="120">120 cm</option>
                                                                                        <option value="121">121 cm</option>
                                                                                        <option value="122">122 cm</option>
                                                                                        <option value="123">123 cm</option>
                                                                                        <option value="124">124 cm</option>
                                                                                        <option value="125">125 cm</option>
                                                                                        <option value="126">126 cm</option>
                                                                                        <option value="127">127 cm</option>
                                                                                        <option value="128">128 cm</option>
                                                                                        <option value="129">129 cm</option>
                                                                                        <option value="130">130 cm</option>
                                                                                        <option value="131">131 cm</option>
                                                                                        <option value="132">132 cm</option>
                                                                                        <option value="133">133 cm</option>
                                                                                        <option value="134">134 cm</option>
                                                                                        <option value="135">135 cm</option>
                                                                                        <option value="136">136 cm</option>
                                                                                        <option value="137">137 cm</option>
                                                                                        <option value="138">138 cm</option>
                                                                                        <option value="139">139 cm</option>
                                                                                        <option value="140">140 cm</option>
                                                                                        <option value="141">141 cm</option>
                                                                                        <option value="142">142 cm</option>
                                                                                        <option value="143">143 cm</option>
                                                                                        <option value="144">144 cm</option>
                                                                                        <option value="145">145 cm</option>
                                                                                        <option value="146">146 cm</option>
                                                                                        <option value="147">147 cm</option>
                                                                                        <option value="148">148 cm</option>
                                                                                        <option value="149">149 cm</option>
                                                                                        <option value="150">150 cm</option>
                                                                                        <option value="151">151 cm</option>
                                                                                        <option value="152">152 cm</option>
                                                                                        <option value="153">153 cm</option>
                                                                                        <option value="154">154 cm</option>
                                                                                        <option value="155">155 cm</option>
                                                                                        <option value="156">156 cm</option>
                                                                                        <option value="157">157 cm</option>
                                                                                        <option value="158">158 cm</option>
                                                                                        <option value="159">159 cm</option>
                                                                                        <option value="160">160 cm</option>
                                                                                        <option value="161">161 cm</option>
                                                                                        <option value="162">162 cm</option>
                                                                                        <option value="163">163 cm</option>
                                                                                        <option value="164">164 cm</option>
                                                                                        <option value="165">165 cm</option>
                                                                                        <option value="166">166 cm</option>
                                                                                        <option value="167">167 cm</option>
                                                                                        <option value="168">168 cm</option>
                                                                                        <option value="169">169 cm</option>
                                                                                        <option value="170">170 cm</option>
                                                                                        <option value="171">171 cm</option>
                                                                                        <option value="172">172 cm</option>
                                                                                        <option value="173">173 cm</option>
                                                                                        <option value="174">174 cm</option>
                                                                                        <option value="175">175 cm</option>
                                                                                        <option value="176">176 cm</option>
                                                                                        <option value="177">177 cm</option>
                                                                                        <option value="178">178 cm</option>
                                                                                        <option value="179">179 cm</option>
                                                                                        <option value="180">180 cm</option>
                                                                                        <option value="181">181 cm</option>
                                                                                        <option value="182">182 cm</option>
                                                                                        <option value="183">183 cm</option>
                                                                                        <option value="184">184 cm</option>
                                                                                        <option value="185">185 cm</option>
                                                                                        <option value="186">186 cm</option>
                                                                                        <option value="187">187 cm</option>
                                                                                        <option value="188">188 cm</option>
                                                                                        <option value="189">189 cm</option>
                                                                                        <option value="190">190 cm</option>
                                                                                        <option value="191">191 cm</option>
                                                                                        <option value="192">192 cm</option>
                                                                                        <option value="193">193 cm</option>
                                                                                        <option value="194">194 cm</option>
                                                                                        <option value="195">195 cm</option>
                                                                                        <option value="196">196 cm</option>
                                                                                        <option value="197">197 cm</option>
                                                                                        <option value="198">198 cm</option>
                                                                                        <option value="199">199 cm</option>
                                                                                        <option value="200">200 cm</option>
                                                                                        <option value="201">201 cm</option>
                                                                                        <option value="202">202 cm</option>
                                                                                        <option value="203">203 cm</option>
                                                                                        <option value="204">204 cm</option>
                                                                                        <option value="205">205 cm</option>
                                                                                        <option value="206">206 cm</option>
                                                                                        <option value="207">207 cm</option>
                                                                                        <option value="208">208 cm</option>
                                                                                        <option value="209">209 cm</option>
                                                                                        <option value="210">210 cm</option>
                                                                                        <option value="211">211 cm</option>
                                                                                        <option value="212">212 cm</option>
                                                                                        <option value="213">213 cm</option>
                                                                                        <option value="214">214 cm</option>
                                                                                        <option value="215">215 cm</option>
                                                                                        <option value="216">216 cm</option>
                                                                                        <option value="217">217 cm</option>
                                                                                        <option value="218">218 cm</option>
                                                                                        <option value="219">219 cm</option>
                                                                                        <option value="220">220 cm</option>
                                                                                        <option value="221">221 cm</option>
                                                                                        <option value="222">222 cm</option>
                                                                                        <option value="223">223 cm</option>
                                                                                        <option value="224">224 cm</option>
                                                                                        <option value="225">225 cm</option>
                                                                                        <option value="226">226 cm</option>
                                                                                        <option value="227">227 cm</option>
                                                                                        <option value="228">228 cm</option>
                                                                                        <option value="229">229 cm</option>
                                                                                        <option value="230">230 cm</option>
                                                                                    </select>
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
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="hairColor" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Đen</option>
                                                                                        <option value="2">Vàng</option>
                                                                                        <option value="3">Nâu</option>
                                                                                        <option value="4">Đỏ</option>
                                                                                        <option value="5">Xám</option>
                                                                                        <option value="6">Bạch kim</option>
                                                                                        <option value="7">Hói</option>
                                                                                        <option value="8">Nhuộm</option>
                                                                                        <option value="9">Khác</option>
                                                                                        <option value="10">Theo từng tháng</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="eyeColor">
                                                                                        MÀU MẮT
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="eyeColor" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Nâu</option>
                                                                                        <option value="2">Xám</option>
                                                                                        <option value="3">Xanh lá</option>
                                                                                        <option value="4">Xanh da trời</option>
                                                                                        <option value="5">Hazelnut</option>
                                                                                        <option value="6">Khác</option>
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
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="iWear">
                                                                                        TÔI ĐEO
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="iWear[]" class="dropdown">
                                                                                        <option value="0"></option>
                                                                                        <option value="LENSES">Sát tròng</option>
                                                                                        <option value="GLASSES">Kính</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="iHave">
                                                                                        TÔI CÓ
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="iHave[]" class="dropdown">
                                                                                        <option value="0"></option>
                                                                                        <option value="TATTOOS">Hình xăm</option>
                                                                                        <option value="PIERCINGS">Khuyên</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="clothingStyle">
                                                                                        PHONG CÁCH TRANG PHỤC
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="clothingStyle[]" class="dropdown">
                                                                                        <option value="0"></option>
                                                                                        <option value="1">Casual</option>
                                                                                        <option value="2">Theo xu thế</option>
                                                                                        <option value="3">Cổ điển</option>
                                                                                        <option value="4">Thành thị</option>
                                                                                        <option value="5">Doanh nhân</option>
                                                                                        <option value="6">Thể thao</option>
                                                                                        <option value="7">Thời trang</option>
                                                                                        <option value="8">Thay đổi luân phiên</option>
                                                                                        <option value="9">Retro</option>
                                                                                        <option value="10">Nhà bác học</option>
                                                                                        <option value="11">Người máy</option>
                                                                                        <option value="13">Skate</option>
                                                                                        <option value="14">Gothic Emo</option>
                                                                                        <option value="15">Khác</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="myNicestPart">
                                                                                        ĐIỂM ĐẸP NHẤT CỦA TÔI
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="myNicestPart" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Mặt</option>
                                                                                        <option value="2">Mắt</option>
                                                                                        <option value="3">Môi</option>
                                                                                        <option value="4">Miệng</option>
                                                                                        <option value="5">Nụ cười</option>
                                                                                        <option value="6">Mũi</option>
                                                                                        <option value="7">Hói</option>
                                                                                        <option value="8">Tóc</option>
                                                                                        <option value="9">Cổ</option>
                                                                                        <option value="10">Ngực</option>
                                                                                        <option value="11">Sáu múi</option>
                                                                                        <option value="12">Bụng</option>
                                                                                        <option value="13">Rốn</option>
                                                                                        <option value="14">Tay</option>
                                                                                        <option value="15">Bàn chân</option>
                                                                                        <option value="16">Mông</option>
                                                                                        <option value="17">Chân</option>
                                                                                        <option value="18">Cơ bắp</option>
                                                                                        <option value="19">Trí tuệ</option>
                                                                                        <option value="20">Lưng</option>
                                                                                        <option value="21">Cánh tay</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="overallAppearance">
                                                                                        NGOẠI HÌNH
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="overallAppearance" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Không xấu</option>
                                                                                        <option value="2">Đẹp trai</option>
                                                                                        <option value="3">Nhìn được</option>
                                                                                        <option value="4">Sexy</option>
                                                                                        <option value="5">Tỏa sáng</option>
                                                                                        <option value="6">Khó nói</option>
                                                                                        <option value="7">Có quan trọng không</option>
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
                                                    <div class="tw3-buttonGroup text--center">
                                                        <input type="submit" value="Lưu" class="tw3-button tw3-button--blue tw3-button--rounded"><a href="" class="jsEditableCancel tw3-button tw3-button--subtle tw3-button--rounded">Hủy</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tw3-field__editIcon">
                                            <a href="#" class="edit-link"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px"></i></a>
                                            <a href="#" style="display: none;" class="cancel"><i class="fa fa-ban" aria-hidden="true" style="font-size: 25px"></i></a>
                                        </div>
                                    </div>
                                    <div data-edit-feedback="Thông tin về tính cách của bạn đã được lưu." class="tw3-editable__block jsPersonalityProfileBlock  jsEditableBlock">
                                        <h5 class="jsEditableBlockTitle mb--default text--bold">TÍNH CÁCH</h5>
                                        <div class="tw3-field">
                                            <div class="tw3-field__view clearfix">
                                                <div class="tw3-row">
                                                    <div class="tw3-col-12 tw3-bp4-col-6">
                                                        <div class="tw3-row">
                                                            <div class="tw3-col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1 padding-info">
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Tính cách</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">
                                                                            ...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Cung hoàng đạo</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">Cự giải
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Lãng mạn</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Lần hẹn hò đầu tiên mong muốn</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Tôi chia sẻ với bạn đời</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
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
                                                                        <p class="tw3-field-title">Con cái</p>
                                                                    </div>
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-value">...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="tw3-row">
                                                                    <div class="tw3-col-6">
                                                                        <p class="tw3-field-title">Bạn bè</p>
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
                                                <form class="editForm" style="display: none" action="/profile" method="post">
                                                    <input type="hidden" value="saveBlock" name="action">
                                                    <input type="hidden" value="personality" name="block">
                                                    <input type="hidden" value="1" name="clearOnEmpty">


                                                    <div class="tw3-profileDetailsForms mb--default">
                                                        <div class="tw3-row">
                                                            <div class="tw3-col-12 tw3-bp4-col-6 mb--default">
                                                                <div class="tw3-row">
                                                                    <div class="col-12 tw3-bp4-col-11 tw3-bp4-offset-right-1">
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="character">
                                                                                        TÍNH CÁCH
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="character[]" class="dropdown">
                                                                                        <option value="0"></option>
                                                                                        <option value="1">Hòa đồng</option>
                                                                                        <option value="2">Thích phiêu lưu</option>
                                                                                        <option value="3">Bình tĩnh</option>
                                                                                        <option value="4">Vô tư</option>
                                                                                        <option value="5">Vui vẻ</option>
                                                                                        <option value="6">Nghiêm túc</option>
                                                                                        <option value="7">Hướng ngoại</option>
                                                                                        <option value="8">Trung thực</option>
                                                                                        <option value="9">Rộng lượng</option>
                                                                                        <option value="10">Hài hước</option>
                                                                                        <option value="11">Hướng nội</option>
                                                                                        <option value="12">Tự do</option>
                                                                                        <option value="13">Hoạt bát</option>
                                                                                        <option value="14">Cô độc</option>
                                                                                        <option value="15">Hồi hộp</option>
                                                                                        <option value="16">Thích chiếm hữu</option>
                                                                                        <option value="18">Ít nói</option>
                                                                                        <option value="19">Kín đáo</option>
                                                                                        <option value="20">Nhạy cảm</option>
                                                                                        <option value="21">Ngại</option>
                                                                                        <option value="22">Giao thiệp rộng</option>
                                                                                        <option value="23">Tự lập</option>
                                                                                        <option value="24">Cứng đầu</option>
                                                                                        <option value="25">Đa nghi</option>
                                                                                        <option value="26">Chu đáo</option>
                                                                                        <option value="27">Tự hào</option>
                                                                                        <option value="28">Tỉ mỉ</option>
                                                                                        <option value="29">Thân thiện</option>
                                                                                        <option value="30">Lịch sự</option>
                                                                                        <option value="31">Đáng tin</option>
                                                                                        <option value="32">Cẩn thận</option>
                                                                                        <option value="33">Thích giúp đỡ</option>
                                                                                        <option value="34">Kiên nhẫn</option>
                                                                                        <option value="35">Lạc quan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="romantism">
                                                                                        LÃNG MẠN
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="romantism" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Không lãng mạn</option>
                                                                                        <option value="2">Thỉnh thoảng</option>
                                                                                        <option value="3">Lãng mạn</option>
                                                                                        <option value="4">Tôi là người lãng mạn vô cùng</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="preferredFirstDate">
                                                                                        MONG MUỐN VỀ LẦN HẸN ĐẦU
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="preferredFirstDate" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Rất lãng mạn</option>
                                                                                        <option value="2">Một thách thức thể thao</option>
                                                                                        <option value="3">Chỗ của bạn hoặc của tôi</option>
                                                                                        <option value="4">Chỉ có hai ta</option>
                                                                                        <option value="5">Đi uống cùng</option>
                                                                                        <option value="6">Ăn tối trong ánh nến</option>
                                                                                        <option value="7">Đi xem phim</option>
                                                                                        <option value="8">Dạo công viên</option>
                                                                                        <option value="9">Mua sắm</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="iShareWithMyPartner">
                                                                                        TÔI CHIA SẺ VỚI BẠN ĐỜI
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="iShareWithMyPartner" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Sở thích</option>
                                                                                        <option value="2">Kỳ nghỉ</option>
                                                                                        <option value="3">Thể thao</option>
                                                                                        <option value="4">Đi chơi</option>
                                                                                        <option value="5">Hầu hết mọi thứ</option>
                                                                                        <option value="6">Mọi thứ</option>
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
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="marriageIs">
                                                                                        HÔN NHÂN LÀ
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select name="marriageIs" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Giấc mơ cuối cùng</option>
                                                                                        <option value="2">Cam kết quan trọng</option>
                                                                                        <option value="3">Ăn mừng với bạn bè</option>
                                                                                        <option value="4">Cần thiết cho lứa đôi</option>
                                                                                        <option value="5">Tôi còn quá trẻ để nghĩ đến chuyện đó</option>
                                                                                        <option value="6">Không cần thiết</option>
                                                                                        <option value="7">Không liên quan nữa</option>
                                                                                        <option value="8">Giấc mơ không có thật</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="jealous">
                                                                                        TÔI GHEN</label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="jealous" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Không bao giờ</option>
                                                                                        <option value="2">Hầu như không bao giờ</option>
                                                                                        <option value="3">Tin tưởng</option>
                                                                                        <option value="4">Nhiều</option>
                                                                                        <option value="5">Luôn luôn</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="children">
                                                                                        CON CÁI
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="children" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Không bao giờ</option>
                                                                                        <option value="2">Có thể</option>
                                                                                        <option value="3">Càng sớm càng tốt</option>
                                                                                        <option value="4">Đang mong đợi</option>
                                                                                        <option value="5">Tôi đã có con</option>
                                                                                        <option value="6">Đã từng trải nghiệm</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="friends">
                                                                                        BẠN BÈ
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="friends" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Không có bạn</option>
                                                                                        <option value="2">Vài người bạn</option>
                                                                                        <option value="3">Nhiều bạn</option>
                                                                                        <option value="4">Chỉ có bạn tốt</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tw3-row tw3-form__row">
                                                                            <div class="tw3-col-12">
                                                                                <div class="tw3-form__row__label">
                                                                                    <label for="pets">
                                                                                        THÚ NUÔI
                                                                                    </label>
                                                                                </div>
                                                                                <div class="tw3-dropdownHolder">
                                                                                    <select tabindex="1" name="pets" class="dropdown">
                                                                                        <option value="">&nbsp;</option>

                                                                                        <option value="1">Không bao giờ</option>
                                                                                        <option value="2">Có thú nuôi</option>
                                                                                        <option value="3">Muốn có</option>
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
                                                    <div class="tw3-buttonGroup text--center" style="margin-bottom: 20px;">
                                                        <input type="submit" value="Lưu" class="tw3-button tw3-button--blue tw3-button--rounded"><a href="" class="jsEditableCancel tw3-button tw3-button--subtle tw3-button--rounded">Hủy</a>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="tw3-field__editIcon">
                                            <a href="#" class="edit-link"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px"></i></a>
                                            <a href="#" style="display: none;" class="cancel"><i class="fa fa-ban" aria-hidden="true" style="font-size: 25px"></i></a>
                                        </div>
                                    </div>
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
                                                    <img style="background-image: url(https://twoo01-a.akamaihd.net/c/ed25bb5908882fb0c82ffffbe75fd9e6_3_5_0_959_960_600_720_0000748495.jpg)" class="jsTriggerPhotoBox tw3-thumb__link__image" data-photo-id="652228559" data-user-id="1950373542" alt="" src="https://twoo-a.akamaihd.net/static/864505989717655270395861131/shared/i/blank.gif">
                                                </a>
                                            </div>
                                            <div class="tw3-thumb jsPhotoThumb">
                                                <a class="tw3-thumb__link" href="">
                                                    <img style="background-image: url(https://twoo04-a.akamaihd.net/c/54f38d121906bffca3430d4baca22df0_3_5_0_576_576_600_720_0014554081.jpg)" class="jsTriggerPhotoBox tw3-thumb__link__image" data-photo-id="652228570" data-user-id="1950373542" alt="" src="https://twoo-a.akamaihd.net/static/864505989717655270395861131/shared/i/blank.gif">
                                                </a>
                                            </div>
                                            <div class="tw3-thumb jsPhotoThumb">
                                                <a class="tw3-thumb__link" href="">
                                                    <img style="background-image: url(https://twoo01-a.akamaihd.net/c/fbcacf57cabab00145cfe64793a9dc92_3_5_0_959_960_600_720_0012050110.jpg)" class="jsTriggerPhotoBox tw3-thumb__link__image" data-photo-id="652228587" data-user-id="1950373542" alt="" src="https://twoo-a.akamaihd.net/static/864505989717655270395861131/shared/i/blank.gif">
                                                </a>
                                            </div>
                                            <div class="tw3-thumb jsPhotoThumb">
                                                <a class="tw3-thumb__link" href="">
                                                    <img style="background-image: url(https://twoo01-a.akamaihd.net/c/8e1963b416e44a357c1012f659083847_3_5_0_960_960_600_720_0006110854.jpg)" class="jsTriggerPhotoBox tw3-thumb__link__image" data-photo-id="652228594" data-user-id="1950373542" alt="" src="https://twoo-a.akamaihd.net/static/864505989717655270395861131/shared/i/blank.gif">
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
    </body>