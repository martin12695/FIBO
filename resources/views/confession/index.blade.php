@extends('layouts.master')
@section('title', 'FIBO Confession')
@section('custom-css')
@endsection
@section('content')
    <span id="username">{{Auth::id()}}</span>
    <div class="tw3-wrapper" style="position: relative; margin-bottom: 208px; margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="row"><a href="/confession/write" class="btn btn-primary">Viết bài</a></div>
<!-- Blog Post Content Column -->
                <div class="col-lg-12">
                    <h1>Danh sách các bài viết</h1>
                    <br>

                    @foreach($listPost as $post)
                    <div class="row">
                        <div class="span8">
                            <div class="row">
                                <div class="span8">
                                    <h4><strong><a href="{{url('/confession/'.$post->id)}}">{{$post->title}}</a></strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    <p>
                                        <i class="icon-user"></i> Bút danh <a href="#">{{$post->author}}</a>
                                        | <i class="icon-calendar"></i> Sept 16th, 2012
                                        | <i class="icon-comment"></i> <a href="#">{{$post->comments}} bình Luận</a>
                                        | <i class="icon-share"></i> <a href="#">{{$post->views}} lượt xem</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                <hr>
            </div>
        </div>

    </div>
@endsection
@section('custom-js')
@endsection