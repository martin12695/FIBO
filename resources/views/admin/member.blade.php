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
                    <li><a href="{{ url('/admin/add-member') }}" class="ThemDulieu btn btn-info">Thêm thành viên</a></li>

                </ol>
            </div>
        </div>

        <div class="col-lg-12">
            <div >
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Sex</th>
                        <th>Phone</th>
                        <th>Come From</th>
                        <th>Birthday</th>
                        <th>Level</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($user as $row)
                        @foreach($sex as $item)
                            @foreach($come_from as $key)
                                @if( $item->id == $row->id && $key->id == $item->id && $key->id == $row->id)
                                    <tr id="myTableRow">
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->age }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $item->value }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $key->value }}</td>
                                        <td>{{ $row->birthday }}</td>
                                        <td>{{ $row->level }}</td>
                                        <td><a href="{{ route('getDel.id', $row->id) }}" class="XoaDuLieu btn btn-danger">Xóa</a></td>
                                        <td><a href="{{ route('getEdit.id', $row->id) }}" class="SuaDuLieu btn btn-info">Sửa</a></td>
                                    </tr>
                                 @endif
                            @endforeach
                        @endforeach
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