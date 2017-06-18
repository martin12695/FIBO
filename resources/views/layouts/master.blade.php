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
    <link rel="stylesheet" media="screen" href="{{ asset('css/group-more.p1.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('css/group-more.p2.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('css/group-more.p3.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('css/message-v3.css') }}">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
    <link rel="stylesheet" href="/css/dropdown.css">
    <link rel="stylesheet" href="/css/btn.css">
    <link rel="stylesheet" href="/css/lib/notification.css">
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
                    <a href="{{url("/")}}">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Trang chủ</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="{{ url('/search') }}">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Tìm kiếm</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="/chat">
                        <i class="fa fa-commenting" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Chat</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="{{ url('/whoiknow') }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Bạn bè</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="{{ url('/confession') }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Góc tâm sự</span>
                    </a>
                </li>
                <li class="menuItem tw3-headerV2__navigation__item">
                    <a href="{{ url('/dating') }}">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <span class="tw3-headerV2__navigation__item__label">Hẹn hò</span>
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
                    <a style="margin-top: 10px;text-decoration: none" href="{{ url('/signout') }}" class="tw3-button tw3-button--blue tw3-button--small tw3-button--rounded">Đăng xuất</a>
                </li>
                <li class="menuItem tw3-header__actions__item">
                    <a style="margin-top: 10px;text-decoration: none" href="{{ url('/change-password') }}" class="tw3-button tw3-button--blue tw3-button--small tw3-button--rounded">Đổi mật khẩu</a>
                </li>
                <li class="menuItem tw3-headerV2__actions__item">
                    <a class="noline tw3-pointerMenuToggle jsHeaderPointerMenuNotificationsToggle active">
                        <i class="glyphicon glyphicon-bell notification-icon"></i>
                        <span class="badge--darkRed jsCount" id="number_noti" data-count='0' style="vertical-align: 4px;">0</span>
                    </a>
                    <div class="tw3-pointerMenu tw3-notifications jsNotificationsPopdown " style="display: none;" id="lala">
                        <div class="tw3-tabsHolder">
                            <a href="" class="tw3-tab jsNotificationTab selected" data-type="REQUEST">Yêu cầu <span class="jsUnreadActivityCount" style="display: none;"></span></a>
                        </div>
                        <div class="jsMenuNotificationContent tab-item selected" data-type="ACTIVITY">
                            <div class="tw3-notifications__container jsNotificationsContainer" data-type="ACTIVITY" style="height: 388px;">
                                <ul class="plr--default jsActivityContainer" style="display: block;" ng-app="notify" ng-controller="notify_ctrl">
                                    <li class="tw3-mediav2  text--smaller tw3-mediav2--auto tw3-mediav2--desktop jsNotification" ng-repeat="item in listNotify">
                                        <div class="tw3-mediav2__figure">
                                            <a data-hidesidebar="1" data-currentposition="0"  class="avatarLink noline avatarContainer photoBox">
                                                <img ng-src='/<% item.avatar %>' width="40" height="40" class="tw3-avatar--circle">
                                            </a>
                                        </div>
                                        <div class="tw3-mediav2__body text--left jsNotificationBody" >
                                            <a href="/whoiknow" >
                                                <div class="mb--tight">
                                                    <span class="text--bold"><% item.name %></span> <% item.value %>.
                                                </div>
                                                <div class="text--subtle text--small">hơn một tuần trước</div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="/notifications" class="tw3-pointerMenu--footer jsNotificationSeeMore" style="display: block;">Xem thêm</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@yield('content')
<div class="tw3-footerContainer" style="border-bottom: 3px solid #007be6">
    <div class="jsFooterContainer tw3-footerContainer" style="border-bottom: 3px solid #007be6">
        <div class="tw3-container tw3-footer">
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
<script type="text/javascript">
    var notify = angular.module('notify', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');

    });
    notify.controller('notify_ctrl', function($scope, $http) {
        $scope.listNotify = '';
        $scope.getNotify = function() {
            $http({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/getnotify',
                method: "POST",
            }).then(function (data){
                $scope.listNotify = data.data;
            },function (error){

            });
        };
        $scope.getNotify();
    });




    var notificationsCount  = parseInt($('#number_noti').attr("data-count"));
    if (notificationsCount <= 0) {
        $('#number_noti').hide();
    }

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('eb42aed387d45591a942', {
        cluster: 'ap1',
        authEndpoint: '/pusher/auth',
        encrypted: true,
        auth: {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }
    });

    var presenceChanel = pusher.subscribe('presence-online');
    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('notify-{{auth::id()}}');

    // Bind a function to a Event (the full Laravel class)
    channel.bind('App\\Events\\Notify', function(data) {
        var existingNotifications = $('.jsActivityContainer').html()
        var newNotificationHtml = `
          <li class="tw3-mediav2  text--smaller tw3-mediav2--auto tw3-mediav2--desktop jsNotification" data-id="1354178037" data-notificationtype="ACTIVITY" data-read="1" data-type="VISITOR">
            <div class="tw3-mediav2__figure">
                <a data-hidesidebar="1" data-currentposition="0" data-user-id="330559124" data-photo-type="ALL" data-photo-id="652375808" href="/photos/?u=330559124&amp;view=show&amp;id=652375808#photo" class="avatarLink noline avatarContainer photoBox">
                    <img src="https://twoo04-a.akamaihd.net/t/7260457e07442f59b7a29f4626c9a46c_1_6_0_679_631_180_180_0011541383.jpg" width="40" height="40" class="tw3-avatar--circle">
                </a>
            </div>
            <div class="tw3-mediav2__body text--left jsNotificationBody">
                <a href="/whoiknow">
                    <div class="mb--tight">
                        <span class="text--bold">` + data.message + `</span>
                    </div>
                    <div class="text--subtle text--small">khoảng vài phút trước</div>
                </a>
            </div>
        </li>
        `;
        $('.jsActivityContainer').html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        $('#number_noti').text(notificationsCount);
        $('#number_noti').show();


    });
</script>
@yield('custom-js')
</html>


