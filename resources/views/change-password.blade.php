@extends('layouts.master')
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
                            <h1 class="mv10">Bạn muốn đổi mật khẩu? </h1>
                            <p>Nhập mật khẩu hiện tại cùng với mật khẩu mới của bạn bên dưới, sau đó chúng tôi sẽ đổi mật khẩu giúp bạn.<br> Hãy đảm bảo rằng mật khẩu của bạn liên quan đến tài khoản hiện tại của bạn</p>
                            <form class="formLarge pt--compact" method="post" action="{{url('change-password')}}">
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
                                                <input class="tw3-text" type="password" maxlength="80" value="" id="oldPassword" name="old_password" autofocus="autofocus" novalidate="">
                                                <div>
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
                                                <input class="tw3-text" type="password" maxlength="80" value="" id="newPassword" name="new_password" autofocus="autofocus" novalidate="">
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw3-row">
                                    <div class="tw3-col-12">
                                        <div class="tw3-form__row__input">
                                            <input style="background: #007be6; border-color: #007be6" type="submit" class="tw3-button tw3-button--green" value="Đổi mật khẩu">
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