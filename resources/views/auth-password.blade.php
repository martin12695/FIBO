@extends('layouts.second')
@section('title', 'Đổi mật khẩu')
@section('custom-css')
    <link rel="stylesheet" href="./css/home.css">
@endsection
@section('content')
    <div class="tw3-wrapper" style="margin-top: 80px">
        <div class="tw3-content">
            <div class="tw3-container">
                <div class="tw3-box">
                    <div class="tw3-row">
                        <div class="tw3-col-12 tw3-bp3-col-6 tw3-bp3-offset-right-6">
                            <p>
                                <a href="{{url('/signin')}}" class="swap">
                                    <i class="ficonArrowLeft"></i>
                                    <span>Quay lại</span>
                                </a>
                            </p>

                            <h1 class="mv10">Bạn đã quên mật khẩu? </h1>
                            <p>Nhập địa chỉ email của bạn bên dưới, sau đó chúng tôi sẽ phục hồi mật khẩu giúp bạn.<br> Hãy đảm bảo rằng bạn nhập địa chỉ email liên quan đến tài khoản của bạn của bạn</p>
                            <form class="formLarge pt--compact" method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="tw3-row mb--default">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="emailText">
                                                    Địa chỉ email hiên tại
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <input class="tw3-text" type="email" maxlength="80" value="{{ $email or old('email') }}" id="emailText" name="email" autofocus="autofocus" novalidate="">
                                                <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none;" class="text--subtle" id="error_reset_password">Bạn chưa nhập địa chỉ email hoặc email không tồn tại</div>

                                            </div>
                                        </div>
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="newPassword">
                                                    Mật khẩu mới
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <input class="tw3-text" type="password" maxlength="80" id="newPassword" name="new_password" autofocus="autofocus">
                                                <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none" class="text--subtle" id="error_new_password">Bạn chưa nhập mật khẩu mới</div>
                                            </div>
                                        </div>
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="confirmPassword">
                                                    Xác nhận mật khẩu
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <div id="ajax-loader"></div>
                                                <input class="tw3-text" type="password" maxlength="80" id="confirmPassword" name="confirmPassword" autofocus="autofocus">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="/js/reset-pass.js" type="text/javascript"></script>
@endsection