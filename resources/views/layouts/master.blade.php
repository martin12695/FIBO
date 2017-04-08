<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FIBO - @yield('title')</title>
    @yield('custom-css')
        <!--[if lt IE 9]>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="https://www.twoo.com/static/839517239821694064891/css/sass/ltr/twoo.invite.css">
    <link rel="stylesheet" media="screen" href="https://www.twoo.com/static/456398502947355001/css/sass/ltr/ui.css">
    <link rel="stylesheet" media="screen" href="https://www.twoo.com/static/15642180402667165/css/sass/ltr/group-more.p1.css">
    <link rel="stylesheet" media="screen" href="https://www.twoo.com/static/6188132174502284106364/css/sass/ltr/group-more.p2.css">
    <link rel="stylesheet" media="screen" href="https://www.twoo.com/static/37339762993591368798/css/sass/ltr/group-more.p3.css">
    <link rel="stylesheet" media="screen" href="https://www.twoo.com/static/020154603095955706158/css/sass/ltr/twoo.messages.v3.css">
    <link rel="stylesheet" href="/css/dropdown.css">
    <link rel="stylesheet" href="/css/btn.css">
    @include('layouts.basic')

    <style type="text/css">
        .padding-info .tw3-row{
            padding-bottom: 10px;
        }
        .tw3-tab.selected {
            color: #007be6;
            position: relative;
        }
        .tw3-tab.selected:after {
            background: #007be6;
            left: 0;
            right: 0;
        }
    </style>
</head><!--/head-->
<body>
<div class="tw3-header tw3-header--guest">
    <div class="tw3-headerV2--desktop jsHeaderDesktop">
        <div class="tw3-container">
            <ul class="tw3-headerV2__navigation clearfix left">
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Trang chủ</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Tìm kiếm</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="">
                        <i class="fa fa-commenting" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Chat</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Bạn bè</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="/about">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Về Fibo</span>
                    </a>
                </li>
            </ul>
            <ul class="tw3-headerV2__actions clearfix right">
                <li class="menuItem tw3-header__actions__item">
                    <a style="margin-top: 20px;" href="{{ url('/signout') }}" class="tw3-button tw3-button--blue tw3-button--small tw3-button--rounded">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@yield('content')
<div class="tw3-footerContainer" style="border-bottom: 3px solid #007be6">
    <div class="jsFooterContainer tw3-footerContainer" style="border-bottom: 3px solid #007be6">
        <div class="tw3-container tw3-footer">
            <div class="socialButtons">
                <a href="https://itunes.apple.com/app/twoo/id486773266?mt=8" class="noline" target="_blank">
                    <img height="32" src="https://twoo-a.akamaihd.net/static/4967311808377140445/images/homepage/appstore/vi/appstore.svg" class="mr--compact" alt="">
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.twoo&amp;referrer=eyJmaXJzdG5hbWUiOiJOZ3V5XHUxZWM1biIsImF2YXRhciI6Imh0dHBzOlwvXC90d29vMDEtYS5ha2FtYWloZC5uZXRcL2NcL2VkMjViYjU5MDg4ODJmYjBjODJmZmZmYmU3NWZkOWU2XzFfNV8wXzk1OV85NjBfNDAwXzM3MF8wMDAyMjYwNDQ3LmpwZyIsImxrIjoidzk3OXV1XzU3YjZiNTA2ODciLCJyayI6ImFwcHNzbzU4ZTA4YTc3ZDk2YjUwLjgyNjY3ODU5OTIxNmMxNzgyZTA4NzY4YmJlOWRkOGE4OTcyZjQ2ZTUiLCJpbnN0YW50IjpmYWxzZX0" class="noline" target="_blank">
                    <img height="32" alt="Get it on Google Play" src="https://twoo-a.akamaihd.net/static/007872031331757802/images/homepage/playstore/vi/playstore.svg" class="ffImageScalingHack  mr--compact">
                </a>
            </div>
            <ul class="tw3-footer--mainMenu">
                <li>
                    <a href="{{ url('/about') }}">Thông tin</a>
                </li>
                <li>
                    <a href="{{ url('/about/team') }}">Chúng tôi</a>
                </li>
                <li>
                    <a href="{{ url('/game/contact') }}">Liên hệ</a>
                </li>
            </ul>
            <ul class="tw3-footer--subMenu">
                <li>
                    <a href="" target="_blank">Facebook</a>
                </li>
                <li>
                    <a href="" target="_blank">Twitter</a>
                </li>
                <li>
                    <a href="" target="_blank">Google+</a>
                </li>
                <li>
                    <a href="" target="_blank">Youtube</a>
                </li>
                <li>
                    © 2017 FiBo</li>
            </ul>
        </div>
    </div>

</div>
</body>
@yield('custom-js')
</html>


