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

                            <form class="formLarge pt--compact" method="POST" action="{{ route('password.email') }}">

                                {{ csrf_field() }}

                                <div class="tw3-row mb--default">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="emailText">
                                                    Địa chỉ email hiên tại
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <input class="tw3-text" type="email" maxlength="80" value="" id="emailText" name="email" autofocus="autofocus">
                                               <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000;display: none;" class="text--subtle" id="error_reset_password-1">
                                                    Địa chỉ email không chính xác hoặc bạn đang bỏ trống
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw3-row">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row__input">
                                            <input type="submit" class="tw3-button tw3-button--green" id="btn-submit-reset-password" value="Nhận mật khẩu mới">
                                        </div>
                                        @if ( !empty(session('status')) )
                                            <div class="alert alert-success" style="margin-top: 10px; opacity: 0.8;" id="success_reset_password">
                                                Hãy truy cập vào địa chỉ Email dùng để đăng ký tài khoản để đổi mật khẩu !!!
                                            </div>
                                        @endif
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
