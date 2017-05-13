@extends('layouts.master')
@section('title', 'FIBO Confession')
@section('custom-css')
@endsection
@section('content')
    <span id="userId" hidden>{{Auth::id()}}</span>
    <div class="tw3-wrapper" style="position: relative; margin-bottom: 208px; margin-top: 100px">
        <div class="container">
            <div class="row">
<!-- Blog Post Content Column -->
                <div class="col-lg-12">
                <!-- Blog Post -->
                <!-- Title -->
                    <h1>{{$info->title}}</h1>
                    <!-- Author -->
                    <p class="lead">
                        bút danh <a href="#">{{$info->author}}</a>
                    </p>
                    <hr>
                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span> Ngày đăng {{$info->date_create}}</p>
                    <hr>
                    <!-- Post Content -->
                    <div>{!! $info->detail !!}</div>
                    <hr>
                    <!-- Blog Comments -->
                    <!-- Comments Form -->
                    <div class="well">
                        <h4>Bình luận:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="sendComment({{$info->id}})">Gửi</button>
                        </form>
                    </div>
                    <hr>
                    <!-- Posted Comments -->
                    <!-- Comment -->
                    @foreach($listComment as $comment)
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="/{{$comment->avatar}}" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{$comment->name}}
                                <small>{{$comment->created}}</small>
                            </h4>
                            {{$comment->detail}}
                        </div>
                    </div>
                    @endforeach

                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="/js/comment.js" type="text/javascript"></script>
@endsection
<!-- Nested Comment -->
{{--<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="http://placehold.it/64x64" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">Nested Start Bootstrap
            <small>August 25, 2014 at 9:30 PM</small>
        </h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
</div>--}}
<!-- End Nested Comment -->