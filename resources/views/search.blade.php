@extends('layouts.master')
@section('title', 'Chào Mừng Bạn Đến Với FiBo')
@section('custom-css')
    <link rel="stylesheet" href="./css/home.css">
@endsection
@section('content')
    <div class="tw3-wrapper" style="margin-top: 160px" ng-app ="home" ng-controller="home_ctrl">
        <div class="tw3-search tw3-search--results jsSearch" id="gameContainerV3">
            <div class="tw3-content">
                <div class="tw3-search__results">
                    <div class="tw3-container">
                        <div class="tw3-col-12">
                            <div id="nextContainer" class="jsDesktopNextResultsContainer">

                                <div id="searchPage_1" class="clearfix">
                                    <div class="clearfix photoBlockContainer tw3-search__cardsHolder">
                                        <div class="tw3-cards jsResults">
                                            {{--Noi dung hien thi tai day--}}
                                            {{-----------------}}
                                            @foreach($listPeople as $people)
                                                <div class="tw3-card--gridFlex">
                                                    <div class="tw3-card jsCard jsVisitButton noline  jsShowOnboardingCard " id="profile_590393644" data-otheruser="590393644" data-p="0" data-r="search_v3_all" data-s="search">
                                                        <div class="tw3-card__avatar">
                                                            <a href="" class="noline tw3-card__avatar__link jsVisitButton jsSearchV3AvatarLinkTrigger jsShowOnboardingCard" data-otheruser="590393644" data-p="0" data-r="search_v3_all" data-s="search">
                                                                <div class="scrollableHolder jsScrollableHolder" data-userid="590393644" data-needstopaytovisitprofiles="false" data-r="search_v3_all" data-p="0">
                                                                    <div class="scrollable jsScrollable">
                                                                        <div class="scrollable__panel jsScrollablePanel" style="width: 100%;">
                                                                            <div class="scrollable__panel__item photoCover__bkg__image jsScrollablePanelItem" data-photoid="661672646" style="background-image: url({{ $people->avatar }}); width: 100%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="tw3-card__userInfo">
                                                            <div class="tw3-card__actions">
                                                                <a class="jsMatchScoreBadge jsVisitButton" data-questions-count="6" data-otheruser="590393644" data-p="0" data-r="search_v3_all" data-s="search" data-hash="panel=questions" href="/590393644?r=search_v3_all&amp;s=search&amp;p=#panel=questions">
                                                                    <div class="badge--blue badge--matchScore vam">
                                                                        Bạn có thích bạn ấy không?
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php $getAge = \App\Http\Middleware\FunctionBasic::getAge($people->birthday);?>
                                                            <div>
                                                                <strong><span class="name">{{ $people->name }}, {{ $getAge }}</span></strong>
                                                            </div>
                                                            <div class="tw3-card__userInfo__locAndWork">
                                                                <span>Tp Hồ Chí Minh</span>
                                                            </div>
                                                            <div class="tw3-card__userInfo__locAndWork">
                                                                <span>ĐH Khoa học xã hội & nhân văn</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    {{ $listPeople->links() }}
                                    {{--////Pagination--}}
                                    <div class="text--center tw3-col-hide tw3-bp3-col-show-block">
                                        <div class="tw3-pager tw3-paging tw3-swap jsPager" data-next="Tiếp" data-previous="Trước">
                                            <span class="tw3-pager__item disabled first jsPrevious">
                                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                <span class="tw3-pager__item__span">Trước</span>
                                            </span>
                                            <span class="tw3-pager__item current jsCurrent" data-page="1">1</span>
                                            <a href="/search?page=2" data-page="2" rel="ajax" class="tw3-pager__item jsPagerItem"><span>2</span></a>
                                            <a href="/search?page=3" data-page="3" rel="ajax" class="tw3-pager__item jsPagerItem"><span>3</span></a>
                                            <span class="tw3-pager__item dots">...</span>
                                            <a href="/search?page=2" data-page="2" class="tw3-pager__item last jsPagerItem" rel="ajax"><span class="tw3-pager__item__span">Tiếp</span>
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection