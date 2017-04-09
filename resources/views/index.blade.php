@extends('layouts.master')
@section('title', 'Chào Mừng Bạn Đến Với FiBo')
@section('custom-css')
    <link rel="stylesheet" href="./css/home.css">
@endsection
@section('content')
<div id="fb-root"></div>
<div class="tw3-wrapper" style="margin-top: 160px" ng-app ="home" ng-controller="home_ctrl">
    <div class="tw3-content" id="gameContainerV3">
        <div class="tw3-container jsGameContainer">
            <div class="tw3-row">
                <div class="banner__holder mb--loose" style="margin-bottom: -100px">
                </div>
                <div class="tw3-bp4-col-8 tw3-col-12">
                    <div id="gameColLeft" class="gameV3 jsGameV3">
                        <div class="jsDiscover discover promoPosunder">
                            <div class="jsPhotoCoverContainer photoCoverHolder ">
                                <div class="photoCover block_carousel">
                                    @foreach($listPeople as $people)
                                        <div class="info_basic" ng-init="button_info[{{$people->id}}] = 'Kết bạn'">
                                            <aside class="profile-card">
                                                <header>
                                                    <a>
                                                        <img height="200" width="200" src="https://twoo00-a.akamaihd.net/t/cfc3981f88f7f58c3474169c9d95799b_1_6_0_959_960_180_180_0015436499.jpg">
                                                    </a>
                                                    <h1>{{$people->name}}</h1>
                                                    <h2>{{$people->email}}</h2>
                                                </header>
                                                <div class="profile-bio">
                                                    <p>Chào mừng các bạn</p>
                                                    <p>{{$people->intro}}</p>
                                                </div>
                                            </aside>
                                            <div class="button"><a  class="tw3-button tw3-button--blue tw3-button--small tw3-button--rounded" ng-click="addFriend({{$people->id}})"><% button_info[{{$people->id}}] %></a></div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                            <div class="jsPromotionBlock" data-promocode="MTk1MDM3MzU0MjoyODpnZW5lcmljOjI6MDoxNDkxMTExNjM5OjplCMXFoTA4we96GS5ALlMY">
                                <a href="javascript:;" data-trigger="promo_game_fis" data-prcd="MTk1MDM3MzU0MjoyODpnZW5lcmljOjI6MDoxNDkxMTExNjM5OjplCMXFoTA4we96GS5ALlMY" data-productid="26" class="noline jsBuyProduct">
                                    <div class="tw3-promoHor tw3-promoHor--fis">
                                        <div class="tw3-media tw3-media--figure--fluid tw3-media--middle">
                                            <div class="tw3-media__figure">
                                                <img src="https://twoo-a.akamaihd.net/static/864505989717655270395861131/shared/i/blank.gif" class="tw3-promoHor__icon" style="background: url('https://twoo-a.akamaihd.net/static/568138209611541256/images/onboarding/img-purple-fis.png'); background-size: 100%;" width="64" height="64">
                                            </div>
                                            <div class="tw3-media__content">
                                                Chắc chắn bạn là người <strong>đầu tiên</strong> mọi người thấy trong kết quả tìm kiếm.
                                                <p class="m0">
                                                    <small class="text--subtle">
                                                        Giá: 100 Tín dụng</small>
                                                </p>
                                            </div>
                                            <div class="tw3-media__actions">
                                                <p class="mb--tight">
                                                </p><div class="tw3-button tw3-button--blue tw3-button--fis tw3-button--rounded">Đầu mục Tìm kiếm</div>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
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
                                                <a href="/profile" class=""><img src="https://twoo00-a.akamaihd.net/t/cfc3981f88f7f58c3474169c9d95799b_1_6_0_959_960_180_180_0015436499.jpg" class="tw3-avatar tw3-avatar--circle tw3-avatar--fluid"></a>
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
                                        <a href="/activity/likesyou?menu=1">
                                            <div class="tw3-menu__title">
                                                <i class="fa fa-check" aria-hidden="true"></i> Người thích bạn
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="tw3-row">
                                        <a href="/activity/likes" >
                                            <div class="tw3-menu__title">
                                                <i class="fa fa-heart" aria-hidden="true"></i> Người bạn thích
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="tw3-row">
                                        <a href="/activity/matches">
                                            <div class="tw3-menu__title">
                                                <i class="fa fa-bell" aria-hidden="true"></i> Người phù hợp
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
</div>
<!--mfe-->

@endsection
@section('custom-js')
    <script src="/js/home.js" type="text/javascript"></script>
@endsection