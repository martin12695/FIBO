@extends('layouts.master')
@section('title', 'FIBO Chat')
@section('custom-css')
@endsection
@section('content')
    <span id="username">{{Auth::id()}}</span>
    <div class="tw3-wrapper" style="position: relative; margin-bottom: 208px">
        <div class="tw3-container">
            <div class="tw3-row">
                <div class="jsMessageHeightHelper messagesHeightHelper">
                    <div class="jsMessagesContainer messagesContainer tw3-box tw3-box--rounded tw3-box--padding--off messagesContainer--full" style="margin-top: 20px">
                        <div class="jsMessageInboxTypes inboxContainer__menu jsShowOnboardingInbox">
                            <div class="tw3-tabsHolder tw3-tabsHolder--contains--dropdown">
                                <a href="" data-inbox="INBOX" class="tw3-tab jsTab jsInbox selected">Hộp thư đến</a>
                            </div>
                        </div>
                        <div class="jsInboxContainer inboxContainer">
                            <div class="tw3-row inboxContainer__filter jsShowOnboardingInboxFilter">
                                <div class="jsMessageMenuSearch inboxContainer__filter__searchForm">
                                    <div class="searchInputContainer jsMessageMenuSearchInputContainer tw3-filter" id="searchInputContainer">
                                        <input type="text" placeholder="Tìm kiếm người quen" class="jsSearchfield tw3-text tw3-searchfield">
                                        <a href="#" class="jsMessageClear tw3-aniIcon" style="display: none;"><i class="tw3-iconCloseCross"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="inboxContainer__tw3-personList jsMessageInboxList">
                                <ul class="tw3-personList scrollPane jsMessageInboxListItems">
                                    @foreach($listFriend as $friend)
                                    <li class="tw3-person" >
                                        <a href="#" class="noline" data-toggle="tooltip" data-placement="bottom" onclick="makeChat({{$friend->id}})" title="{{$friend->latest_position->location_name}}">
                                            <div class="tw3-person__image tw3-avatarContainer">
                                                <div class="tw3-avatarContainer">
                                                    <img src="/{{$friend->avatar}}" data-src-small="https://twoo00-a.akamaihd.net/t/796d96c522e9b3d170df05f4873bfee3_1_5_0_960_1280_75_75_0011425603.jpg" data-src-medium="https://twoo01-a.akamaihd.net/t/796d96c522e9b3d170df05f4873bfee3_1_6_0_960_1280_180_180_0002574208.jpg" data-src-large="https://twoo04-a.akamaihd.net/c/02949757b7a1b831b6c49937bb955e3e_1_5_0_960_1280_215_215_0013627751.jpg" alt="Cao" class="tw3-avatar--circle tw3-avatar--fluid userGrid__avatar jsAvatar">
                                                </div>
                                            </div>
                                            <div class="tw3-person__info">
                                                <p class="tw3-person__info__title">{{$friend->name}}, <span class="">{{$friend->yob}}</span> <i class="tw3-iconOnlineStatus tw3-iconGreen jsUserOnlineIndicator_1220099905"></i>
                                                </p>
                                                <div class="tw3-person__info__description jsLastMessage">đang ở <span class="text--bold text--shadesOfBlack">{{$friend->latest_position->location_name}}</span>.</div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="conversationsContainer jsConversationsContainer helper--takeHeightOfContainer  conversationsContainer--visible conversationsContainer--senderBar--normal" style="display: none">
                            <div id="chat-window" class="helper--takeHeightOfContainer jsThreadsContainer" style="height: 72%; margin-top:62px; overflow-y:scroll; overflow-x:hidden">
                            </div>
                            <div class="conversationsContainer__item__bottomBar jsMessageSenderBar">
                                <div class="conversationsContainer__item__bottomBar__container conversationsContainer__item__bottomBar__container--normal">
                                    <div id="jsSendMessageFormSend" class="container--normal">
                                        <div class="bottomBar__textarea"><input id="text" cols="40" rows="5"  autofocus=""  class="jsChatInput tw3-textarea" data-tip-id="#jsMessageToShort"  name="message" placeholder="Viết tin nhắn..." style="height: 58px;"></div>
                                        <div class="bottomBar__actions clearfix">
                                            <button onclick="sendMessage()" class="jsChatButton tw3-button tw3-button--grey tw3-button--small tw3-button--subtle tw3-button--agree tw3-button--addfriends ng-binding">Gửi</button>
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

    </div>
@endsection
@section('custom-js')
    <script src="/js/chat.js" type="text/javascript"></script>
@endsection