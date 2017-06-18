@extends('layouts.master')
@section('title', 'Chào Mừng Bạn Đến Với FiBo')
@section('custom-css')
    <link rel="stylesheet" href="./css/home.css">
@endsection
@section('content')
<div id="fb-root"></div>
<div id = 'App2' class="tw3-wrapper" style="margin-top: 160px" ng-app ="home" ng-controller="home_ctrl">
    <div class="tw3-content" id="gameContainerV3">
        <div class="tw3-container jsGameContainer">
            <div class="tw3-row">
                <div class="banner__holder mb--loose" style="margin-bottom: -100px">
                </div>
                <div class="tw3-bp4-col-8 tw3-col-12">
                    <div id="gameColLeft" class="gameV3 jsGameV3">
                        <div class="jsDiscover discover promoPosunder">
                            <div class="jsPhotoCoverContainer photoCoverHolder">
                                <div class="photoCover block_carousel">
                                    @foreach($listPeople as $people)
                                        <div class="info_basic" ng-init="button_info[{{$people->id}}] = 'Kết bạn'">
                                            <aside class="profile-card">
                                                <header>
                                                    <a href="{{ route('user.id', $people->id) }}">
                                                        <img height="200" width="200" src="/{{$people->avatar}}">
                                                    </a>
                                                    <h1>{{$people->name}}</h1>
                                                    <h2>{{$people->email}}</h2>
                                                </header>
                                                <div class="profile-bio">
                                                    <p>Chào mừng các bạn</p>
                                                    <p>{{$people->intro}}</p>
                                                    <div class="button">
                                                        <a  class="jsChatButton tw3-button tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--agree tw3-button--addfriends" ng-click="addFriend({{$people->id}})"><% button_info[{{$people->id}}] %></a>
                                                    </div>
                                                </div>
                                            </aside>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="jsPromotionBlock" data-promocode="MTk1MDM3MzU0MjoyODpnZW5lcmljOjI6MDoxNDkxMTExNjM5OjplCMXFoTA4we96GS5ALlMY">
                                <h3>Tin tức</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tw3-bp4-col-4 tw3-col-hide tw3-bp4-col-show-block">
                    <div class="jsSidebar tw3-sidebarContainer" id="profileBar">
                        <div class="tw3-box--padding--off mb--compact">
                            <ul class="tw3-menu__top">
                                <li>
                                    <div class="tw3-completeContainer tw3-row">
                                        <div class="jsBoostMenu jsUserComplete clearfix">
                                            <div class="tw3-col-4">
                                                <a href="/profile" class=""><img src="/{{$user->avatar}}" class="tw3-avatar tw3-avatar--circle tw3-avatar--fluid"></a>
                                            </div>
                                            <div class="tw3-col-8 ">
                                                <p class="text--small text--subtle mb--tight">Lượng thông tin đã điền</p>
                                                <div class="clearfix jsContent">
                                                    <div class="tw3-completeContainer__bar mb--compact">
                                                        <span class="tw3-completeContainer__bar__overlay" style="width: 28%; background: #FF7102;"></span>
                                                    </div>
                                                    <p class="mb--tight">
                                                        <a href="/user/profile" class="text--blue"><i class="ficonEdit"></i> Viết vài dòng về bạn</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tw3-menu">
                                <li>
                                    <div class="tw3-row" >
                                        <a href="/search">
                                            <div class="tw3-menu__title">
                                                <i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm bạn bè
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="tw3-row">
                                        <a href="/whoiknow" >
                                            <div class="tw3-menu__title">
                                                <i class="fa fa-heart" aria-hidden="true"></i> Bạn bè
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="tw3-row">
                                        <a href="/chat">
                                            <div class="tw3-menu__title">
                                                <i class="fa fa-commenting" aria-hidden="true"></i> Chat
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tw3-box--padding--off mb--compact">
                            <a href="" class="noline inhouseAds inhouseAds--boost2 jsBuyProduct" style="background: url(https://www.twoo.com/static/7493194841967495115302/images/v3/ads-inhouse/boost1.png) no-repeat;background-size: 100%;">
                                <div class="centerBlock">
                                    <div class="centerBlock__item">
                                        <img src="/{{$user->avatar}}" width="42" height="42" class="tw3-avatar tw3-avatar--circle" style="top:42px; right: 42px;">
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
</div>
<!--mfe-->

@endsection
@section('custom-js')
    <script src="/js/home.js" type="text/javascript"></script>
    <script>

    </script>
@endsection