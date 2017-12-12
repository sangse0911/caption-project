@extends('admin.master')

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <ol class="breadcrumb no-bg mb-1">
            <div style="float: right;">
                <button type="button" class="btn btn-info btn-lg label-right b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" id="book-create">
                    <span class="btn-label"><i class="fa fa-user-plus"></i></span> Thêm
                </button>
            </div>
        </ol>
        <form enctype="multipart/form-data" type="hidden" id="form-action" name="" method="POST">
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
                            <div class="form-group col-md-6 supplier kind-book">
                                <h6>Loại Sách</h6>
                                <label class="custom-control custom-radio">
                                    <input id="radio1" name="kind" value="0" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Sách Bán</span>

                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radio2" name="kind" value="1" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Sách Thuê</span>
                                </label>
                                <br/>
                                <span class="help-block">
                                    <strong id="error-kind"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6 supplier method-pay">
                                <h6>Thanh toán bằng</h6>
                                <label class="custom-control custom-radio">
                                    <input id="radio1" name="method" value="0" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Tiền mặt</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radio2" name="method" value="1" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Thẻ ngân hàng</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radio2" name="method" value="2" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Cả 2 phương thức</span>
                                </label>
                                <br/>
                                <span class="help-block">
                                    <strong id="error-method"></strong>
                                </span>
                                {{-- {{ dd($account) }} --}}
                                {{-- <input type="hidden" name="account" id="account" class="form-control" value="{{ $account }}" /> --}}
                            </div>

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
                           {{--  <div class="form-group col-md-6 supplier">
                                <h6>Thể Loại</h6>
                                <select id="category" multiple="multiple" name="categories[]" class="category" style="width: 100%;">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    <strong id="error-category"></strong>
                                </span>
                            </div> --}}
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
                            {{-- <div class="form-group col-md-6 supplier">
                                <h6>Vị trí của sách</h6>
                                <select id="location" multiple="multiple" name="location[]" class="location" style="width: 100%;">
                                    @foreach($bookshelves as $bookshelf)
                                    <option name="" value="{{ $bookshelf->id }}">{{ $bookshelf->location }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    <strong id="error-location"></strong>
                                </span>
                            </div> --}}
                            <div class="form-group col-md-6 supplier">
                                <h6>Chất Lượng Sách</h6>
                                <select id="quality" multiple="multiple" name="quality[]" class="quality" style="width: 100%;">
                                    <option name="" value="5">Cũ</option>
                                    <option name="" value="6">Mới</option>

                                </select>
                                <span class="help-block">
                                    <strong id="error-quality"></strong>
                                </span>
                            </div>
                            <div class="form-group col-sm-6 form-status">
                                <h6>Cập nhật trạng thái</h6><br/>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="0">Không sẵn sàng</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1">Sẵn sàng</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="2">Đang </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="3">Đã bán</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="4">Đã cho thuê</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="5">Đã trả lại</label>

                                <span class="help-block">
                                    <strong id="error-status"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-12 supplier">
                                <h6>Tóm Tắt</h6>
                                <textarea class="ckeditor" rows="9" id="description" name="description" rows="10" placeholder="Tóm tắt về sách"></textarea>
                                <span class="help-block">
                                    <strong id="error-description"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-12 image-area">
                                <h6>Hình Ảnh</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" id="" class="dropify" name="images[]" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" id="" class="dropify" name="images[]" />
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-6">
                                        <input type="file" id="" class="dropify" name="images[]" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" id="" class="dropify" name="images[]" />
                                    </div>
                                </div>
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
        <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Tác gỉa</th>
                        <th>Năm xuất bản</th>
                        <th>Xuất bản lần thứ</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->republish }}</td>
                        <td align="center">
                            <button id="{{ $book->id }}" data-id="{{ $book->id }}" type="button" class="btn btn-warning btn-view btn-sm label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
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
    </div>
</div>
@endsection
