@extends('layouts.master')
@section('title', 'Tìm kiếm - FIBO')
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
                                                            <a href="{{ route('user.id', $people->id) }}" class="noline tw3-card__avatar__link jsVisitButton jsSearchV3AvatarLinkTrigger jsShowOnboardingCard" data-otheruser="590393644" data-p="0" data-r="search_v3_all" data-s="search">
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
                                                                        @if($people->sex == '1')
                                                                            Bạn có thích anh ấy không?
                                                                        @else
                                                                            Bạn có thích cô ấy không?
                                                                        @endif
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <?php $getAge = \App\Http\Middleware\FunctionBasic::getAge($people->birthday);?>
                                                            <hr>
                                                            <div>
                                                                <strong><span class="name">{{ $people->name }}, {{ $getAge }} tuổi</span></strong>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{ $listPeople->links() }}
                                    {{--////Pagination--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection