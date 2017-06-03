@extends('layouts.master')
@section('title', '')
@section('content')
    <div class="tw3-wrapper" >
        <div class="tw3-content" style="margin-top: 80px;">
            <div class="tw3-container" >
                <div class="tw3-row">
                    <div class="jsActivityWhoIKnow tw3-box tw3-box--padding--off">
                        <div class="tw3-activity--whoiknow__addContacts">
                            <div class="tw3-box__header"><span class="text--bold">Danh sách bạn bè đang online</span>
                            </div>
                            <div class="p--default">
                                <div class="tw3-col-12">
                                    <form action="" method="post" class="jsContactImporterContactlist">
                                        <div class="tw3-contactList tw3-contactList-v2 jsContactImporterContactlistScrollArea">
                                            <ul class="tw3-thumbsHolder" id="member">
                                               {{-- @foreach($listFriend as $friend)
                                                <li class="tw3-thumb jsContactImporterContactNonSensitive" data-name="hr" >
                                                    <a href="{{ route('user.id', $friend->id) }}" class="tw3-thumb__link">
                                                        <img src="/{{$friend->avatar}}" class="tw3-thumb__link__image">
                                                        <span class="tw3-thumb__link__name">{{$friend->name}}</span>
                                                    </a>
                                                </li>
                                                @endforeach--}}
                                            </ul>
                                        </div>
                                        <p class="text--center">
                                            <input type="hidden" class="tw3-button tw3-button--blue tw3-button--rounded jsConnectButton" value="Kết nối">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tw3-activity--whoiknow__existingContacts">
                            <div class="tw3-box__header">Lời mời kết bạn - hẹn hò</div>
                                <ul class="plr--default jsContactLinksContainer">
                                    @foreach($listCouple as $people)
                                        <li class="tw3-mediav2 tw3-mediav2--auto tw3-mediav2--desktop">
                                            <div class="tw3-mediav2__figure">
                                                <a href="" class="jsVisitButton">
                                                    <img src="https://twoo01-a.akamaihd.net/static/1636596845823273814/images/generic/avatar-male.jpg" alt="Martin" width="48" height="48" class="tw3-avatar--circle">
                                                </a>
                                            </div>
                                            <div class="tw3-mediav2__body text--left">
                                                <div>
                                                    <a href="" class="jsVisitButton text--bold text--black text--smaller">
                                                        {{$people->name}}</a>, {{$people->yob}}
                                                </div>
                                                <div class="text--subtle">
                                                    muốn hẹn hò với bạn</div>
                                                </div>
                                            <div class="tw3-mediav2__actions">
                                                <a href="friend/acceptCouple/{{$people->id}}" class="jsChatButton tw3-button tw3-button-blue tw3-button--small tw3-button--subtle tw3-button--agree">Đồng ý</a>
                                            </div>
                                            <div class="tw3-mediav2__actions">
                                                <a href="#" class="jsChatButton tw3-button tw3-button tw3-button--small tw3-button--subtle tw3-button--dismiss">Từ chối</a>
                                            </div>
                                        </li>
                                    @endforeach
                                        @foreach($listPending as $people)
                                            <li class="tw3-mediav2 tw3-mediav2--auto tw3-mediav2--desktop">
                                                <div class="tw3-mediav2__figure">
                                                    <a href="" class="jsVisitButton">
                                                        <img src="https://twoo01-a.akamaihd.net/static/1636596845823273814/images/generic/avatar-male.jpg" alt="Martin" width="48" height="48" class="tw3-avatar--circle">
                                                    </a>
                                                </div>
                                                <div class="tw3-mediav2__body text--left">
                                                    <div>
                                                        <a href="" class="jsVisitButton text--bold text--black text--smaller">
                                                            {{$people->name}}</a>, {{$people->yob}}
                                                    </div>
                                                    <div class="text--small text--subtle">
                                                        Thành phố Hồ Chí Minh</div>
                                                </div>
                                                <div class="tw3-mediav2__actions">
                                                    <a href="friend/accept/{{$people->id}}" class="jsChatButton tw3-button tw3-button-blue tw3-button--small tw3-button--subtle tw3-button--agree">Đồng ý</a>
                                                </div>
                                                <div class="tw3-mediav2__actions">
                                                    <a href="#" class="jsChatButton tw3-button tw3-button tw3-button--small tw3-button--subtle tw3-button--dismiss">Từ chối</a>
                                                </div>
                                            </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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

        var presenceChanel = pusher.subscribe('{{ $chanel }}');
        presenceChanel.bind('pusher:subscription_succeeded', function (member) {
            $('#member').empty();
            var p = '';
            member.each(function (member) {
                p += '<li id="member_'+member.id+'" class="tw3-thumb jsContactImporterContactNonSensitive">' +
                        '<a href="/user/profile/'+member.id+'" class="tw3-thumb__link">' +
                        '<img src="'+member.info.avatar+'" class="tw3-thumb__link__image">' +
                        '<span class="tw3-thumb__link__name">'+member.info.name+'</span>'
                '</a>'
                '</li>';
                $('#member').html(p);
            });
        });

        presenceChanel.bind('pusher:member_added', function (member) {
            addMember(member);
        });

        presenceChanel.bind('pusher:member_removed', function (member) {
            removeMember(member);
        });

        function addMember(member) {
            var p = '<li id="member_'+member.id+'" class="tw3-thumb jsContactImporterContactNonSensitive">' +
                        '<a href="/user/profile/'+member.id+'" class="tw3-thumb__link">' +
                            '<img src="'+member.info.avatar+'" class="tw3-thumb__link__image">' +
                            '<span class="tw3-thumb__link__name">'+member.info.name+'</span>'
                        '</a>'
                    '</li>';
            $('#member').append(p);
        }

        function removeMember(member) {
            $('#member_'+member.id).remove();
        }

    </script>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
@endsection