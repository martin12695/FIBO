@extends('layouts.master')
@section('title', 'Giới thiệu FiBo')
@section('custom-css')
    <style type="text/css">

        html,body
        {
            font-family: 'Segoe UI Light', 'Helvetica Neue', 'RobotoLight', 'Segoe UI', 'Segoe WP', sans-serif;

        }

        #greeting
        {
            text-align: center;
        }

        #chat-window
        {
            height: 400px;
            border-left: solid 1px lightgray;
            border-right: solid 1px lightgray;
        }
        .dialog {
            margin-top: 100px;
            margin-bottom: 100px;
        }

    </style>
@endsection
@section('content')
    <div class="col-lg-4 col-lg-offset-4 dialog">
        <h1 id="greeting">Hello, <span id="username">{{$username}}</span></h1>

        <div id="chat-window" class="col-lg-12">
        </div>
        <div id="typingStatus" class="col-lg-12" style="padding: 15px"></div>
        <input type="text" id="text" class="col-lg-12" autofocus="" onblur="notTyping()" style="position: absolute; z-index: 10000">
    </div>

@endsection
@section('custom-js')
    <script src="/js/chat.js" type="text/javascript"></script>
@endsection