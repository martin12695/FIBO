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

                            <form class="formLarge pt--compact" method="post" action="">

                                <input type="hidden" name="action" value="">
                                <div class="tw3-row mb--default">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row">
                                            <div class="tw3-form__row__label">
                                                <label for="emailText">
                                                    Địa chỉ email hiên tại
                                                </label>
                                            </div>
                                            <div class="tw3-form__row__input">
                                                <input class="tw3-text" type="email" maxlength="80" value="" id="emailText" name="email" autofocus="autofocus" novalidate="">
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw3-row">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row__input">
                                            <input type="submit" class="tw3-button tw3-button--green" value="Nhận mật khẩu mới">
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