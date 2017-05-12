@extends('layouts.master')
@section('title', 'FIBO Confession')
@section('custom-css')
    <link rel="stylesheet" href="./css/write_confess.css">
@endsection
@section('content')
    <script language="javascript" src="/js/lib/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script language="javascript" src="/js/lib/ckeditor/config.js" type="text/javascript"></script>
    <span id="username">{{Auth::id()}}</span>
    <div class="tw3-wrapper" style="position: relative; margin-bottom: 208px; margin-top: 100px">
        <div class="container">
            <div class="row">
                <!-- Blog Post Content Column -->
                <div class="col-lg-12">
                    <form role="form" action="submit" method="post">
                    {{ csrf_field() }}
                        <!-- Title -->
                        <div class="row overview_info">
                            <div class="tw3-col-12 mb--default">
                                <div class="tw3-form__row__label">
                                    <label for="firstname">
                                        Tiêu đề
                                    </label>
                                </div>
                                <div class="tw3-form__row__input">
                                    <input type="text" name="title" id="firstname" class="tw3-text" >
                                </div>
                            </div>
                            <div class="tw3-col-12 mb--default">
                                <div class="tw3-form__row__label">
                                    <label for="author">
                                        Bút danh
                                    </label>
                                </div>
                                <div class="tw3-form__row__input">
                                    <input type="text" name="author" id="firstname" class="tw3-text" >
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="tw3-col-12 mb--default">
                                <div class="tw3-form__row__label">
                                    <label for="firstname">
                                        Nội dung
                                    </label>
                                </div>
                                <textarea class="content ckeditor" id="content" name="detail"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi bài</button>
                    </form>
                </div>
                <hr>
            </div>
        </div>

    </div>
@endsection
@section('custom-js')
    <script>
        CKEDITOR.replace('content',
        {
            toolbar : 'Basic', /* this does the magic */
            uiColor : '#9AB8F3'
        });
    </script>
@endsection