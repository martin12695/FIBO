@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Quản lý bài viết đã đăng
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>  <a href="{{ url('/admin/index') }}">Trang chủ</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Bài viết đã đăng
                        </li>

                    </ol>
                </div>
            </div>

            <div class="col-lg-12">
                <div >
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Detail</th>
                            <th>Author</th>
                            <th>View</th>
                            <th>Comment</th>
                            <th>date_create</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($cfs as $row)
                            <tr id="myTableRow">
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{!! $row->detail !!} </td>
                                <td>{{ $row->author }}</td>
                                <td>{{ $row->views }}</td>
                                <td>{{ $row->comments }}</td>
                                <td>{{ $row->date_create }}</td>
                                <td><a href="{{ route('delConfessed.id', $row->id) }}" class="XoaDuLieu btn btn-danger">Xóa</a></td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $cfs->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.XoaDuLieu').click(function(){
                if(confirm("Bạn có thực muốn xóa !")){
                    $('#myTableRow').remove();
                    return true;
                }else {
                    return false;
                }
            });
        });
    </script>
@endsection