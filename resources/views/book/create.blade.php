@extends('admin.master') @section('content')
<div class="content-area py-1">
    <div class="content-area py-1">
        <div class="container-fluid">
            <h4>Thêm Sách Mới</h4>
            <ol class="breadcrumb no-bg mb-1">
                <li class="breadcrumb-item active">Sách</li>
                <li class="breadcrumb-item active">Thêm Sách</li>
            </ol>
            <div class="box box-block bg-white">
                <form form enctype="multipart/form-data" type="hidden" name="" id="ahihi" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group col-md-6">
                        <h6>Loại Sách</h6>
                        <label class="custom-control custom-radio">
                            <input type="hidden" name="id" id="id" value="{{ \Request::segment(3) }}">
                            <input id="radio1" name="status" value="0" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Sách Bán</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input id="radio2" name="status" value="1" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Sách Thuê</span>
                        </label>
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tài khoản ngân hàng</h6>
                        <input type="text" name="account" id="account" class="form-control" placeholder="Tai khoan ngan hang">
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Phương thức thanh toán</h6>
                        <label class="custom-control custom-radio">
                            <input id="radio3" name="method" value="0" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Tiền mặt</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input id="radio4" name="method" value="1" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Chuyển khoản</span>
                        </label>
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tác Giả</h6>
                        <input type="text" name="author" id="author" class="form-control" placeholder="Nhập Tên Tác Giả">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tên Sách</h6>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nhập Tên Sách">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Giới thiệu qua về sách</h6>
                        <input type="text" name="introduce" class="form-control" id="introduce" placeholder="Giới thiệu sách">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Nhà Xuất Bản</h6>
                        <input type="text" name="company" class="form-control" id="company" placeholder="Nhập Tên Nhà Xuất Bản">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Thể Loại</h6>
                        <select id="category" multiple="multiple" name="categories[]" class="category" style="width: 100%;">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Năm Xuất Bản</h6>
                        <input type="text" name="year" class="form-control" id="year" placeholder="Nhập Năm Xuất Bản">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Giá</h6>
                        <input type="text" name="price" class="form-control form-control-success" id="price">
                        <br>
                    </div>
                     <div class="form-group col-md-6">
                        <h6>Giá thuê</h6>
                        <input type="text" name="price-rent" class="form-control form-control-success" id="price-rent">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>ISBN</h6>
                        <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Ma so sach">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tái Bản Lần Thứ</h6>
                        <input type="text" name="republish" class="form-control" id="republish" placeholder="Tai ban lan thu">
                        <br>
                    </div>
                     <div class="form-group col-md-6">
                        <h6>Vị trí của sách</h6>
                        <select id="location" multiple="multiple" name="location[]" class="location" style="width: 100%;">
                            @foreach($bookshelves as $bookshelf)
                            <option name="" value="{{ $bookshelf->id }}">{{ $bookshelf->location }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Chất Lượng Sách</h6>
                        <select id="quality" multiple="multiple" name="quality[]" class="quality" style="width: 100%;">
                            <option name="" value="1">25% den 50%</option>
                            <option name="" value="2">51% den 65%</option>
                            <option name="" value="3">66% den 75%</option>
                            <option name="" value="4">76% den 90%</option>
                        </select>
                        <br>
                    </div>
                    <div class="form-group col-sm-12 post">
                        <label for="description">Mô tả về sách</label>
                        <textarea class="form-control" id="description" name="description" rows="10" placeholder="Mô tả về sách"></textarea>
                    </div>
                    <div class="form-group col-md-12">
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
                    <div style="clear: both;"></div>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-success btn-rounded w-min-sm  waves-effect waves-light" id="book-create">Thêm</button>
                        <button type="reset" class="btn btn-info btn-rounded w-min-sm  waves-effect waves-light">Làm Mới</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-xs-center">
                    <div class="col-sm-6 text-sm-left mb-0-5 mb-sm-0" style="text-align: center;">
                        2017 © BSO Team
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection @section('script')
<script>
    $("#category").select2({ closeOnSelect: false });
    $("#location").select2({ closeOnSelect: true , maximumSelectionLength: 1});
    $("#quality").select2({ closeOnSelect: true , maximumSelectionLength: 1});
    $('#year').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#ahihi').submit(function(evt) {

        var formData = new FormData(this);

        $.ajax({
            async: true,
            method: 'POST',
            url: '/book/store',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
            },
            success: function(data) {
                window.location.assign('/admin/books');
            },
            error: function(data) {
                console.log(data);
            }
        });
        evt.preventDefault();
    });


</script>
@endsection
