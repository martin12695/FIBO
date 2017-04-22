<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.3 Image Upload with Validation example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/lib/editor-image.css">
</head>
<body>
<!-- <div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading"><h2>Laravel 5.3 Image Upload with Validation example</h2></div>
        <div class="panel-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <img src="/images/user/{{ Session::get('path') }}">
            @endif

            <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="image" />
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div> -->

<div class="wrapper">
    <!-- Open Modal Button -->
    <div class="change-icon"><a href="#" data-toggle='modal' data-target='#image-editor'><span class="change-icon-text">Tải hình lên</span><span class="icon-container"><i class="fa fa-picture-o"></i><i class="fa fa-crop"></i><i class="fa fa-download"></i></span></a></div>
    <!--    Editor Modal-->
    <div id="image-editor" class="modal fade editor-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Tùy chỉnh hình ảnh của bạn</h2>
                </div>
                <div class="modal-body">
                    <div class="editor-wrapper">
                        <div class="editor-container">
                            <div class="editor">
                                <div class="resize-container">
                                    <span class="resize-handle resize-handle-nw"></span>
                                    <span class="resize-handle resize-handle-ne"></span>
                                    <img class="resize-image" src="" alt="">
                                    <span class="resize-handle resize-handle-se"></span>
                                    <span class="resize-handle resize-handle-sw"></span>
                                </div>
                                <div class="overlay">
                                    <div class="overlay-inner"></div>
                                </div>
                                <div class="overlay overlay-preview">
                                    <div class="overlay-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="upload">
                        <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <input type="file" acccept="images/" class="form-control" id="uploaded-img" placeholder="Input field" accept="image/*">
                            <div class="upload-button">
                                <label for="uploaded-img">
                                    <span class="label-text">Chọn hình để tải lên</span><span class="upload-icon"><i class="fa fa-upload"></i></span>
                                </label>
                            </div>
                            <div class="edit-button">
                                <button class="btn form-control preview-crop">Xem trước</button>
                                <button type="submit" class="js-crop btn form-control" data-dismiss="modal">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src="js/lib/editor-image.js"></script>

</body>
</html>