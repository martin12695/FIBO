@extends('admin.layouts.master_admin')
@section('title','Dashboard')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Quản lý bình luận
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>  <a href="">Trang chủ</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Bình luận
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-inline">
                    <h4>
                        <form method="get" action="{{ route('contacts.autocomplete') }}">
                            {{ csrf_field() }}
                            Nội dung bình luận:
                            <input name="term" id="term" class="form-control" placeholder="Nhập nội dung bình luận..." value="">
                            <input id="btn-timkiem" type="submit"  class="btn btn-primary" value="Tìm">
                        </form>
                    </h4>
                </div>
                <div >
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Người bình luận</th>
                            <th>Tên bài viết</th>
                            <th>Ngày bình luận</th>
                            <th>Nội dung</th>
                            <th></th>
                        </tr>
                        @if( !empty($user) && !empty($ket) )
                                @foreach( $user as $item)
                                    @foreach( $ket as $value)
                                    @if( $value->user_id == $item->id )
                                        <tr id="content-data">
                                            <td>{{ $item->name}}</td>
                                            <td>{{ $value->title }}</td>
                                            <td>{{ $value->created }}</td>
                                            <td>
                                                @if(strlen($value->detail) < 30 )
                                                    {!! $value->detail !!}
                                                @else
                                                    {!! substr($value->detail,0,30)."..." !!}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('detailComment.id', $value->id) }}" class="btn btn-success">Xem chi tiết</a>
                                                <a href="{{ route('delComment.id', $value->id) }}" class="XoaDuLieu btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    @endif
                                        @endforeach
                                 @endforeach
                        @endif
                    </table>
                    {{ $ket->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $("#term").autocomplete({
                source: "{{ route('contacts.autocomplete') }}",
                minLength: 3,
                select: function(event, ui) {
                    $("#term").val(ui.item.value);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {

            $('.XoaDuLieu').click(function(){
                if(!confirm("Bạn có thực muốn xóa !"))
                    return false;
            });

        });
    </script>
@endsection

