@extends('layouts.master')
@section('title', 'FIBO Confession')
@section('custom-css')
@endsection
@section('content')
    <span id="username">{{Auth::id()}}</span>
    <div class="tw3-wrapper" style="position: relative; margin-bottom: 208px; margin-top: 100px">
        <div class="container">
            <div class="row">

<!-- Blog Post Content Column -->
                <div class="col-lg-12">
                    <h1>Danh sách các bài viết</h1>
                    <div class="row">
                        <div class="span8">
                            <div class="row">
                                <div class="span8">
                                    <h4><strong><a href="#">Title of the post</a></strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    <p></p>
                                    <p>
                                        <i class="icon-user"></i> by <a href="#">Mark</a>
                                        | <i class="icon-calendar"></i> Sept 16th, 2012
                                        | <i class="icon-comment"></i> <a href="#">3 Comments</a>
                                        | <i class="icon-share"></i> <a href="#">39 Shares</a>
                                        | <i class="icon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a>
                                        <a href="#"><span class="label label-info">Bootstrap</span></a>
                                        <a href="#"><span class="label label-info">UI</span></a>
                                        <a href="#"><span class="label label-info">growth</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>

    </div>
@endsection
@section('custom-js')
@endsection