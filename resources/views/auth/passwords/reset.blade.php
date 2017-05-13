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
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="tw3-row mb--default">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="email">
                                                    Địa chỉ email hiên tại
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <input id="email" type="email" class="tw3-text" name="email" value="{{ $email or old('email') }}" autofocus>
                                                @if ($errors->has('email'))
                                                    <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000" class="text--subtle">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="password">
                                                    Mật khẩu mới
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <input id="password" type="password" class="tw3-text" name="password">
                                                @if ($errors->has('password'))
                                                    <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000" class="text--subtle">
                                                        {{ $errors->first('password') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="password">
                                                    Xác nhận mật khẩu mới
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <input id="password-confirm" type="password" class="tw3-text" name="password_confirmation">
                                                @if ($errors->has('password_confirmation'))
                                                    <div style="text-transform: none;font-weight: normal;margin-top: 10px;color: #FF0000" class="text--subtle">
                                                        {{ $errors->first('password_confirmation') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tw3-row">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row__input">
                                            <button type="submit" style="background: #007be6; border-color: #007be6" class="tw3-button tw3-button--green">
                                                Đổi mật khẩu
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
