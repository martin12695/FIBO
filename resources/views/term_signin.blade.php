<html class="css3 flexbox notouch">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FiBo - Gặp Bạn Mới</title>
    <meta name="description" content="FiBo là mạng xã hội phát triển nhanh nhất để chat, tìm kiếm, chia sẻ hình và chơi game làm quen. Miễn phí tham gia. Có ứng dụng cho iPhone, Android và các thiết bị di động khác.">

    <link rel="stylesheet" media="screen" href="https://www.twoo.com/static/0250057800156744833/css/sass/ltr/homepage.v2.css"><link rel="shortcut icon" href="https://twoo-a.akamaihd.net/static/8601852839616752753/images/favicon.ico" type="image/x-icon">
    <script src="/js/jquery-3.2.0.min.js"></script>
    <script src="/js/lib/jquery-ui.min.js"></script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/login-register.js" type="text/javascript"></script>
    <meta name="wot-verification" content="80362870129623d31f8d">
    <style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
        .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
        .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style></head>

<body id="default" class="ltr vi default unconfirmed chrome windows">
<div id="wrapper" data-step="login" class="homepageLogin ">
    <div class="bgImage">
        <div class="bgImage--blur"></div>
        <img src="/images/bg.jpg" class="pano">
    </div>
    <div class="homepageLinks homepageLinks--top">
        <div class="homepageLinks--top__right">
            <a href="{{ url('/signup') }}" class="button button--white button--large">Đăng ký</a>
        </div>
    </div>
    <div class="homepageContainer clearfix jsHomepageContainer">
        <div class="homepageContainer__content">
            <div class="homepageContainer__content__logo">
                <div class="homepageContainer__content__logo__image">
                    <img src="/images/logo.gif">
                </div>
            </div>
            <div class="homepageContainer__content__form registerContainer" id="registerContainer">
                <div class="homepageContainer__content__form--step2 step2Container pageAni jsRegisterFormContainer">
                    <div style="display: table; width: 100%;">
                        <div class="row row--height">
                            <div class="col--left">
                                <p>
                                    <a href="https://www.facebook.com/v2.8/dialog/oauth/?client_id=175694939152556&amp;redirect_uri=https%3A%2F%2Fwww.twoo.com%2Ffacebook%2Flogin%3Faction%3Dlogin&amp;scope=user_about_me,user_birthday,email,user_location,user_relationships,user_photos" class="button button--facebook button--xlarge button--full fbcntbtn" data-trigger="homepage_login" data-appid="175694939152556" data-permissions="user_about_me,user_birthday,email,user_location,user_relationships,user_photos"><i class="ficonFacebook ficonWhite tw3-iconNormal mr--compact"></i> Đăng nhập bằng Facebook</a>
                                </p>
                                <small>(đây là cách đăng ký nhanh, chúng tôi sẽ không bao giờ đăng trên Facebook)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homepageContainer__content__form homepageContainer__content__form--intro loginContainer" id="loginContainer">
                <div class="homepageContainer__content__slogan homepageContainer__content__slogan--bigHeader">
                    <h1>Chào mừng bạn đến với FiBo!</h1>
                </div>
                <div style="display: table; width: 100%;">
                    <div class="row row--height">
                        <div class="col--left">
                            <p>
                                <a href="" class="button button--facebook button--xlarge button--full fbcntbtn"> Đăng nhập bằng Facebook</a>
                            </p>
                            <small>(Đăng nhập cách này nhanh hơn, chúng tôi không bao giờ đăng lên Facebook của bạn)</small>
                        </div>
                        <div class="col--seperator">
                            <div class="tw3-divider--horizontal--or"><span><i>/</i></span></div>
                            <div class="divider--vertical hide"><span><i></i></span></div>
                        </div>
                        <div class="col--right">
                            <form ng-app="sign_form" ng-controller="sign_form_ctrl" name="sign_in_form">
                                <dl class="form formLarge formStacked tal formError">
                                    <dt class="jsLabelEmail">
                                        <label>
                                            <span class="formLarge__item__label">Địa chỉ email</span>
                                        </label>
                                    </dt>
                                    <dd>
                                        <input type="email" name="email" value="" tabindex="1" class="text" ng-model="email" required>
                                    </dd>
                                    <dt class="jsLabelPassword">
                                        <label>
                                            <span class="formLarge__item__label">Mật khẩu</span>
                                        </label>
                                    </dt>
                                    <dd>
                                        <input type="password" tabindex="2" name="password" class="text" ng-model="pass" required>
                                    </dd>

                                    <dt>
                                       <span ng-class="message" style="background: red">
                                        Email hoặc mật khẩu chưa đúng!
                                        </span>
                                        <span ng-class="check_field" style="background: red">
                                        Các trường không được để trống!
                                        </span>
                                    </dt>
                                    <dd>
                                        <button type="submit" tabindex="3" class="button button--green button--full button--xlarge" ng-click="sign_in_form.$valid && sign_in()">
                                            <span ng-class="button_info">Đăng nhâp</span>
                                            <img src="/images/icon/facebook.gif" height="20" ng-class="loading">
                                        </button>
                                    </dd>
                                    <dt>&nbsp;</dt>
                                    <dd class="form__extraOptions">
                                        <p class="m0">
                                            <a href="{{ url('/password/reset') }}">Quên mật khẩu</a>
                                        </p>
                                        <p>
                                            Chưa là thành viên? <a href="{{ url('/signup') }}">Đăng ký tại đây</a>
                                        </p>
                                    </dd>
                                </dl>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homepageContainer__loading">
                <div class="spinner">
                    <p><img src="https://twoo-a.akamaihd.net/static/580106430915135806410/images/loading_dialog.gif"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="homepageLinks homepageLinks--bottom jsHomepageFooterLinks">
    <div class="homepageLinks homepageLinks--bottom jsHomepageFooterLinks">
        <div class="homepageLinks--bottom__links">
            <ul>
                <li>
                    <a href="{{ url('/about') }}">Về chúng tôi</a>
                </li>
            </ul>
        </div>
        <div class="homepageLinks--bottom__counter">
            <h1 class="jsUserCounter newFontSize" data-counter="182052658.4073" data-step="0">{{ $count }}</h1>
            <p>người đã đang sử dụng FIBO</p>
        </div>
    </div>
</div>
</body>
</html>