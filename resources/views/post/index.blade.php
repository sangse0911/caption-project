@extends('layouts.master') @section('title') Cua hang sach hang dau @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('cart')
{{-- <nav class="woocmmerce-breadcrumb"><a href="#">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Cảt
</nav> --}}
<article class="page type-page status-publish hentry">
    <header class="entry-header">
        <h1 itemprop="name" class="entry-title">Danh sách bài đăng</h1></header>
    <!-- .entry-header -->
    <form enctype="multipart/form-data" type="hidden" id="form-action" name="" method="POST">
            <!-- <input type="hidden" name="token" value="{{ csrf_token() }}"> -->
            {{ csrf_field() }}
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg" style="max-width: 1100px;">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Chỉnh sửa sách</h4>
                        </div>
                        <input type="hidden" name="" id="id">
                        <div class="modal-body">
                            <div class="form-group col-md-6 supplier">
                                <h6>Tác Giả</h6>
                                <input type="text" name="author" id="author" class="form-control" placeholder="Nhập Tên Tác Giả">
                                <span class="help-block">
                                    <strong id="error-author"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Giới thiệu qua về sách</h6>
                                <input type="text" name="introduce" id="introduce" class="form-control" placeholder="Giới thiệu về sách">
                                <span class="help-block">
                                    <strong id="error-introduce"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Tên Sách</h6>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nhập Tên Sách">
                                <span class="help-block">
                                    <strong id="error-name"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Nhà Xuất Bản</h6>
                                <input type="text" name="company" class="form-control" id="company" placeholder="Nhập Tên Nhà Xuất Bản">
                                <span class="help-block">
                                    <strong id="error-company"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Năm Xuất Bản</h6>
                                <input type="text" name="year" class="form-control" id="year" placeholder="Nhập Năm Xuất Bản">
                                <span class="help-block">
                                    <strong id="error-year"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Giá Bán</h6>
                                <input type="text" name="price" class="form-control form-control-success" id="price">
                                <span class="help-block">
                                    <strong id="error-price"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Giá thuê</h6>
                                <input type="text" name="price-rent" class="form-control form-control-success" id="price-rent">
                                <span class="help-block">
                                    <strong id="error-price-rent"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>ISBN</h6>
                                <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Mã số sách">
                                <span class="help-block">
                                    <strong id="error-isbn"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Tái Bản Lần Thứ</h6>
                                <input type="text" name="republish" class="form-control" id="republish" placeholder="Tái bản lần thứ">
                                <span class="help-block">
                                    <strong id="error-republish"></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6 supplier">
                                <h6>Chất Lượng Sách</h6>
                                <select id="quality" multiple="multiple" name="quality[]" class="quality" style="width: 100%;">
                                    <option name="" value="1">25% đến 50%</option>
                                    <option name="" value="2">51% đến 65%</option>
                                    <option name="" value="3">66% đến 75%</option>
                                    <option name="" value="4">76% đến 90%</option>
                                </select>
                                <span class="help-block">
                                    <strong id="error-quality"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-12 supplier">
                                <h6>Tóm Tắt</h6>
                                <textarea class="ckeditor" rows="9" id="description" name="description" rows="10" placeholder="Tóm tắt về sách"></textarea>
                                <span class="help-block">
                                    <strong id="error-description"></strong>
                                </span>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info btn-default b-a-0 waves-effect waves-light" id="create-book">Thêm mới</button>
                            <button type="button" class="btn btn-success" id="book-update" style="display: none;">Lưu</button>
                            <button type="button" class="btn btn-danger " data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <form>
        <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sách</th>
                        <th>Ngày đăng</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td align="center">
                            <button id="{{ $book->id }}" data-id="{{ $book->id }}" type="button" class="btn btn-warning " data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-eye" ></i></span> Xem
                            </button>
                            &nbsp
                            <button type="button" id="update-{{ $book->id }}" data-id="{{ $book->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-edit"></i></span> Sửa
                            </button>
                            &nbsp
                            <button id="view-{{ $book->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span> Xóa
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>

</article>
@endsection @section('recently') @include('particals.recently') @endsection @section('sidebar')  @include('particals.sidebar')
@endsection @include('particals.contents') @endsection
@section('footer') @include('particals.footer') @endsection()
@section('script')
<script>
    $("#quality").select2({ closeOnSelect: true, maximumSelectionLength: 1 });
    $('#year').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>
@endsection
