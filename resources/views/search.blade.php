@extends('layouts.master')
@section('title', 'Tìm kiếm - FIBO')
@section('custom-css')
    <link rel="stylesheet" href="./css/home.css">
@endsection

@section('content')
    <div class="tw3-wrapper ajax-load-paginate" style="margin-top: 160px" ng-app ="home" ng-controller="home_ctrl">
        <div class="tw3-search tw3-search--results jsSearch" id="gameContainerV3">
            <form action="{{ url('/search') }}" method="post" class="clearfix jsFormFilter" id="formFilter" rel="ajax">
                {{ csrf_field() }}
                <div class="tw3-search__filter jsSearchFilter">
                    <div class="tw3-container" style="margin-top: -30px">
                        <div class="tw3-row">
                            <div class="tw3-col-12 tw3-filter jsShowOnboardingSearch">
                                <div class="tw3-filter__form" style="top: -30px; margin-bottom: -80px">
                                    <div class="tw3-search__filter__filters jsFilterFilters jsShowOnboardingSearchFilters" style="opacity: 1;">
                                        <div class="tw3-row" style="position: relative; left: 70px; top: 1px;">
                                            <div class="tw3-filter__form__content" style="left: 70px;">
                                                <div class="tw3-row">
                                                    <div class="tw3-filter__form__content__flex">
                                                        <div class="tw3-rangeHolder jsCustomRange" name="age">
                                                            <div class="tw3-col-12">
                                                                <div class="tw3-form__row__label">
                                                                    <label for="age">
                                                                        ĐỘ TUỔI
                                                                    </label>
                                                                </div>
                                                                <div class="tw3-dropdownHolder">
                                                                    <select name="age" class="dropdown">
                                                                        @if( is_array($getAge) || is_object($getAge) )
                                                                            <option value="0" selected>Toàn Bộ</option>
                                                                        @foreach($getAge as $item)
                                                                            <option value="{{$item->id}}" {{$item->id == '0' ?  'selected="selected"' : ''}} >{{$item->value}}</option>
                                                                        @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw3-row" style="position: relative; top: -50px; ">
                                            <div class="tw3-col-12 tw3-bp3-col-8 text--subtle tw3-filter__submit__submitSection tw3-filter__submit__submitSection--submit--refresh jsSubmitContainer ">
                                                <div class="tw3-filter__submit__submitSection__submit">
                                                    <input type="submit" value="Tìm kiếm" class="tw3-button tw3-button--blue tw3-button--rounded buttonApplyChanges jsApplyChanges jsSubmitSearch jsOnboardingSubmit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="tw3-content ">
                <div class="tw3-search__results">
                    <div class="tw3-container">
                        <div class="tw3-col-12">
                            <div id="nextContainer" class="jsDesktopNextResultsContainer">

                                <div id="searchPage_1" class="clearfix">
                                    <div class="clearfix photoBlockContainer tw3-search__cardsHolder">
                                        <div class="tw3-cards jsResults">
                                            {{--Noi dung hien thi tai day--}}
                                            {{-----------------}}
                                            @if( !empty($listPeople) )
                                            @foreach($listPeople as $people)
                                                @if( !empty($listUser) )
                                                @foreach($listUser as $user)
                                                @if($people->id == $user->id)
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
                                                            <div>
                                                                <strong><span class="name">{{ $people->name }}, {{ $getAge }} tuổi</span></strong>
                                                            </div>
                                                            <div class="tw3-card__userInfo__locAndWork">
                                                                <span>Sống tại: {{ ($user->id_province == '79') ? 'Tp '.$user->value : $user->value }}</span>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                @endif
                                            @endforeach
                                            @endif
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
    {{--////Ajax pagination--}}
    {{--<script type="text/javascript">--}}

        {{--$(document).ready(function() {--}}
            {{--$(document).on('click', '.tw3-bp3-col-show-block .jsPager a', function (e) {--}}
                {{--var test = $(this).attr('href').split('page=')[1];--}}
                {{--getSearch(test);--}}
                {{--e.preventDefault();--}}
            {{--});--}}
        {{--});--}}
        {{--function getSearch(page) {--}}

            {{--if (!isNaN(page) && page > 0) {--}}
                {{--page = '?page=' + page;--}}
            {{--} else {--}}
                {{--page = '';--}}
            {{--}--}}
            {{--$.ajax({--}}
                {{--url : 'search' + page--}}
            {{--}).done(function (data) {--}}

                {{--$('.ajax-load-paginate').html(data);--}}
                {{--console.log(data);--}}
                {{--location.hash = page;--}}

            {{--}).fail(function () {--}}
                {{--alert('Could not be loaded.');--}}
            {{--});--}}
        {{--}--}}

    {{--</script>--}}
@endsection