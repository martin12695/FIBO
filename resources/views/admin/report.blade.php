@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Quản lý thành viên
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>  <a href="{{ url('/admin/index') }}">Trang chủ</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Thành viên
                        </li>

                    </ol>
                </div>
            </div>

            <div class="col-lg-12">
                <div >
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <th>Create Report</th>
                            <th>Delete</th>
                            <th>Cancel</th>
                            <th>Block</th>
                            <th>Unblock</th>
                        </tr>
                        @foreach($user as $row)
                            @if($row->status != 1)
                            <tr id="myTableRow">
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->user_id }}</td>
                                <td>{{ $row->user_name }}</td>
                                <td>{{ $row->user_email }}</td>
                                <td>{{ $row->reason }}</td>
                                @if( $row->status == 0)
                                    <td>Đang bị tố cáo</td>
                                    @elseif($row->status == 2)
                                    <td>Tài khoản đang bị khóa</td>
                                @endif
                                <td>{{ $row->create_report }}</td>
                                <td><a href="{{ route('del.id', $row->user_id) }}" class="XoaDuLieu btn btn-danger">Xóa</a></td>
                                <td><a href="{{ route('cancel.id', $row->user_id) }}" class="HuyDuLieu btn btn-info">Hủy</a></td>
                                <td><a href="{{ route('block.id', $row->user_id) }}" style="background-color: green; border-color: green" class="KhoaDuLieu btn btn-info">Khóa</a></td>
                                <td><a href="{{ route('unblock.id', $row->user_id) }}" style="background-color: green; border-color: green" class="MoKhoaDuLieu btn btn-info">Mở Khóa</a></td>
                            </tr>
                            @endif
                        @endforeach
                    </table>
                    {{ $user->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.XoaDuLieu').click(function(){
                if(confirm("Bạn có thực muốn xóa tài khoản này!")){
                    $('#myTableRow').remove();
                    return true;
                }else {
                    return false;
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.HuyDuLieu').click(function(){
                if(confirm("Bạn có thực muốn hủy tố cáo !")){
                    $('#myTableRow').remove();
                    return true;
                }else {
                    return false;
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.KhoaDuLieu').click(function(){
                if(confirm("Bạn có thực muốn khóa tài khoản này !")){
                    $('#myTableRow').remove();
                    return true;
                }else {
                    return false;
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.MoKhoaDuLieu').click(function(){
                if(confirm("Bạn có muốn mở khóa tài khoản này !")){
                    $('#myTableRow').remove();
                    return true;
                }else {
                    return false;
                }
            });
        });
    </script>
@endsection