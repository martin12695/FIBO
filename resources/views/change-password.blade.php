@extends('layouts.master')
@section('title', 'Đổi mật khẩu')
@section('custom-css')
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="/css/alert.css">
@endsection
@section('content')
    <div class="tw3-wrapper" style="margin-top: 80px">
        <div class="tw3-content">
            <div class="tw3-container">
                <div class="tw3-box">
                    <div class="tw3-row">
                        <div class="tw3-col-12 tw3-bp3-col-6 tw3-bp3-offset-right-6">
                            <h1 class="mv10">Bạn muốn đổi mật khẩu? </h1>
                            <p>Nhập mật khẩu hiện tại cùng với mật khẩu mới của bạn bên dưới, sau đó chúng tôi sẽ đổi mật khẩu giúp bạn.<br> Hãy đảm bảo rằng mật khẩu của bạn liên quan đến tài khoản hiện tại của bạn</p>
                            <form class="formLarge pt--compact">
                                {{ csrf_field() }}
                                <div class="tw3-row mb--default">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="oldPassword">
                                                    Mật khẩu hiện tại
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <input class="tw3-text" type="password" maxlength="80" id="oldPassword" name="old_password" autofocus="autofocus">
                                                <div class="tw3-form__row__label">
                                                    <label for="oldPassword">
                                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_old_password">Bạn chưa nhập mật khẩu hiện tại</div>
                                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="errors_old_password">Mật khẩu hiện tại không chính xác</div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="newPassword">
                                                    Mật khẩu mới
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <div id="ajax-loader"></div>
                                                <input class="tw3-text" type="password" maxlength="80" id="newPassword" name="new_password" autofocus="autofocus">
                                                <div class="tw3-form__row__label">
                                                    <label for="newPassword">
                                                        <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none;" class="text--subtle" id="error_new_password">Bạn chưa nhập mật khẩu mới</div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw3-row">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row__input">
                                            <button type="button" style="background: #007be6; border-color: #007be6" class="tw3-button tw3-button--green" id="btn-submit">
                                                <div id="ajax-loader">Đổi mật khẩu</div>
                                            </button>
                                            <div style="display: none;margin-top: 10px;opacity: 0.8" class="alert-box success" id="success_change_password">Đổi mật khẩu thành công !!!</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="/js/change-pass.js" type="text/javascript"></script>
@endsection