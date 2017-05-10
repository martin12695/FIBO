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
    <h4>Leave a Comment:</h4>
    <form role="form">
        <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<hr>

<!-- Posted Comments -->

<!-- Comment -->
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="http://placehold.it/64x64" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">Start Bootstrap
            <small>August 25, 2014 at 9:30 PM</small>
        </h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
</div>

<!-- Comment -->
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="http://placehold.it/64x64" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">Start Bootstrap
            <small>August 25, 2014 at 9:30 PM</small>
        </h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        <!-- Nested Comment -->
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Nested Start Bootstrap
                    <small>August 25, 2014 at 9:30 PM</small>
                </h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <!-- End Nested Comment -->
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