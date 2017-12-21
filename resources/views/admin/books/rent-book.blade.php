@extends('admin.master')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
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
                            <div class="form-group col-md-6 supplier kind-book">
                                <h6>Loại Sách</h6>
                                <label class="custom-control custom-radio kind-1">
                                    <input id="radio1" name="kind" value="0" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Sách Bán</span>

                                </label>
                                <label class="custom-control custom-radio kind-2">
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
                            <div class="form-group col-md-6 supplier">
                                <h6>Thể Loại</h6>
                                <select id="category" multiple="multiple" name="categories[]" class="category" style="width: 100%;">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    <strong id="error-category"></strong>
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
                            <div class="form-group col-md-6 supplier form-rent" style="display: none;">
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
                                <h6>Vị trí của sách</h6>
                                <select id="location" multiple="multiple" name="location[]" class="location" style="width: 100%;">
                                    @foreach($bookshelves as $bookshelf)
                                    <option name="" value="{{ $bookshelf->id }}">{{ $bookshelf->location }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    <strong id="error-location"></strong>
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
                                <input type="file" id="" class="dropify" name="images[]" />
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

                            &nbsp
                            <button type="button" data-id="{{ $book->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-edit"></i></span> Sửa
                            </button>
                            &nbsp
                            <button data-id="{{ $book->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light btn-delete">
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
@section('script')
<script>
$("#category").select2({ closeOnSelect: false });
$("#location").select2({ closeOnSelect: true, maximumSelectionLength: 1 });
$("#quality").select2({ closeOnSelect: true, maximumSelectionLength: 1 });
$('#year').datetimepicker({
    format: 'YYYY-MM-DD',
});
</script>
<script>
$(document).on('focus', 'input', function() {
    $(this).removeAttr('placeholder');
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#book-create').click(function(e) {
    $('.form-status').css("display", "none");
    $('.modal-title').text("Thêm mới sách");
    $('#name').val('').prop('readonly', false);
    $('#introduce').val('').prop('readonly', false);
    CKEDITOR.instances.description.setData('');
    $('#price').val('').prop('readonly', false);
    $('#price-rent').val('').prop('readonly', false);
    $('#author').val('').prop('readonly', false);
    $('#company').val('').prop('readonly', false);
    $('#year').val('').prop('readonly', false);
    $('#kind').val('').prop('readonly', false);
    $('#method').val('').prop('readonly', false);
    $('#account').prop('readonly', false);
    $('#category').val('').trigger('change');
    $('#quality').val('').trigger('change');
    $('#republish').val('').prop('readonly', false);
    $('#location').val('').trigger('change');
    $('#isbn').val('').prop('readonly', false);
    $('select').prop('disabled', false);
    $('.method-pay').removeAttr('style');
    $('.bank-account').css('display','none');
    $('.kind-book').removeAttr('style');
    $('.modal-footer').removeAttr('style');
    $('#book-update').css("display",'none');
    $('#create-book').removeAttr('style');
    $('.image-area').removeAttr('style');
})

$('#create-book').click(function(e) {

    $('#error-name').text("");
    $('#error-introduce').text("");
    $('#error-description').text("");
    $('#error-price').text("");
    $('#error-price-rent').text("");
    $('#error-author').text("");
    $('#error-company').text("");
    $('#error-year').text("");
    $('#error-kind').text("");
    $('#error-method').text("");
    $('#error-account').text("");
    $('#error-category').text("");
    $('#error-quality').text("");
    $('#error-republish').text("");
    $('#error-location').text("");
    $('#error-isbn').text("");

});


$('#form-action').submit(function(evt) {

    var formData = new FormData(this);

    $.ajax({
        async: true,
        method: 'POST',
        url: '/book/storeIfOwned',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            alert('Thêm mới sách thành công');
            window.location.assign('/admin/books');
        },
        error: function(data) {
            if(data.status === 422) {
                var errors = data.responseJSON;

                $('#error-name').text(errors['name']);
                $('#error-introduce').text(errors['introduce']);
                $('#error-description').text(errors['description']);
                $('#error-price').text(errors['price']);
                $('#error-price-rent').text(errors['price-rent']);
                $('#error-author').text(errors['author']);
                $('#error-company').text(errors['company']);
                $('#error-year').text((errors['year']));
                $('#error-kind').text(errors['kind']);
                $('#error-method').text(errors['method']);
                $('#error-account').text(errors['account']);
                $('#error-category').text(errors['category']);
                $('#error-quality').text(errors['quality']);
                $('#error-republish').text(errors['republish']);
                $('#error-location').text(errors['location']);
                $('#error-isbn').text(errors['isbn']);
            }
        }
    });
    evt.preventDefault();
});

$('.btn-view').click(function(e) {
    $('.image-area').css("display", "none");
    $('#book-update').removeAttr("style");
    $('#create-book').css("display", "none");
    $('.form-status').removeAttr("style");

    $('.modal-title').text('Thông tin sách');
    $('.bank-account').css("display", "none");
    $('.method-pay').css("display", "none");
    $('.kind-book').css("display", "none");
    $('.modal-footer').css('display', 'none');
    $('#error-name').text("");
    $('#error-introduce').text("");
    $('#error-description').text("");
    $('#error-price').text("");
    $('#error-price-rent').text("");
    $('#error-author').text("");
    $('#error-company').text("");
    $('#error-year').text("");
    $('#error-kind').text("");
    $('#error-method').text("");
    $('#error-category').text("");
    $('#error-quality').text("");
    $('#error-republish').text("");
    $('#error-location').text("");
    $('#error-isbn').text("");

    var book_id = $(this).data('id');
    var array = [];

    $.ajax({
        cache: false,
        method: 'GET',
        dataType: 'JSON',
        url: '/admin/books/' + book_id,
        success: function(data) {
            $('#name').val(data['book']['name']).prop("readonly",true);
            for (var i = 0; i < data['categories'].length; i++) {
                array.push(data['categories'][i]['category_id']);
            }

            $('#id').prop("readonly",true).val(data['book']['id']);
            $('#category').val(array).trigger('change').prop("readonly",true);
            $('#description').val(CKEDITOR.instances.description.setData(data['book']['description']));
            $('#introduce').val(data['book']['introduce']).prop("readonly",true);
            $('#location').val(data['book']['bookshelf_id']).trigger('change');
            $('#quality').val(data['details'][0]['quality']).trigger('change');
            $('#price').val(data['book']['price']).prop("readonly",true);
            $('#price-rent').val(data['book']['rental_fee']).prop("readonly",true);
            $('#author').val(data['book']['author']).prop("readonly",true);
            $('input[type=radio][name="status"][value=' + data['book']['status'] + ']').prop('checked', true);
            $('input[type=radio][name="status"]').prop('disabled', true);
            $('#company').val(data['book']['company']).prop("readonly",true);
            $('#year').val(data['book']['year']).prop("readonly",true);
            $('#republish').val(data['book']['republish']).prop("readonly",true);
            $('#isbn').val(data['book']['isbn']).prop("readonly",true);
            $('select').prop('disabled', true);
        },
        error: function(data) {
        }
    });
});


$('.btn-update').on('click', function(e) {
    $('.image-area').css("display", "none");
    $('#book-update').removeAttr("style");
    $('#create-book').css("display", "none");
    $('.form-status').removeAttr("style");
    $('.modal-footer').removeAttr('style');

    $('.modal-title').text('Cập nhật thông tin sách');
    $('.bank-account').css("display", "none");
    $('.method-pay').css("display", "none");
    $('.kind-book').css("display", "none");

    $('#error-name').text("");
    $('#error-introduce').text("");
    $('#error-description').text("");
    $('#error-price').text("");
    $('#error-price-rent').text("");
    $('#error-author').text("");
    $('#error-company').text("");
    $('#error-year').text("");
    $('#error-kind').text("");
    $('#error-method').text("");
    $('#error-category').text("");
    $('#error-quality').text("");
    $('#error-republish').text("");
    $('#error-location').text("");
    $('#error-isbn').text("");

    var book_id = $(this).data('id');
    var array = [];

    $.ajax({
        cache: false,
        method: 'GET',
        dataType: 'JSON',
        url: '/admin/books/' + book_id,
        success: function(data) {
            $('#name').val(data['book']['name']).prop('readonly', false);
            for (var i = 0; i < data['categories'].length; i++) {
                array.push(data['categories'][i]['category_id']);
            }

            $('#id').val(data['book']['id']);
            $('#category').val(array).trigger('change');
            $('#description').val(CKEDITOR.instances.description.setData(data['book']['description']));
            $('#introduce').val(data['book']['introduce']).prop('readonly', false);
            $('#location').val(data['book']['bookshelf_id']).trigger('change');
            $('#quality').val(data['details'][0]['quality']).trigger('change');
            $('#price').val(data['book']['price']).prop('readonly', false);
            $('#price-rent').val(data['book']['rental_fee']).prop('readonly', false);
            $('#author').val(data['book']['author']).prop('readonly', false);
            $('input[type=radio][name="status"][value=' + data['book']['status'] + ']').prop('checked', true);
            $('input[type=radio][name="status"]').prop('disabled', false);
            $('#company').val(data['book']['company']).prop('readonly', false);
            $('#year').val(data['book']['year']).prop('readonly', false);
            $('#republish').val(data['book']['republish']).prop('readonly', false);
            $('#isbn').val(data['book']['isbn']).prop('readonly', false);
            $('select').prop('disabled', false);
        },
        error: function(data) {
        }
    });
});
$('#book-update').click(function(evt) {

    $('#error-name').text("");
    $('#error-introduce').text("");
    $('#error-description').text("");
    $('#error-price').text("");
    $('#error-price-rent').text("");
    $('#error-author').text("");
    $('#error-company').text("");
    $('#error-year').text("");
    $('#error-kind').text("");
    $('#error-method').text("");
    $('#error-category').text("");
    $('#error-quality').text("");
    $('#error-republish').text("");
    $('#error-location').text("");
    $('#error-isbn').text("");

    var id = $('#id').val();
    var name = $('#name').val();
    var categories = $('#category').val();
    var description = CKEDITOR.instances['description'].getData();
    var introduce = $('#introduce').val();
    var location = $('#location').val();
    var price = $('#price').val();
    var author = $('#author').val();
    var status = $('input[name=status]:checked').val();
    var company = $('#company').val();
    var year = $('#year').val();
    var republish = $('#republish').val();
    var isbn = $('#isbn').val();
    var rent = $('#price-rent').val();
    var quality = $('#quality').val();

    $.ajax({

        cache: false,
        method: 'PUT',
        dataType: 'JSON',
        url: '/book/update',
        data: {
            id: id,
            name: name,
            categories: categories,
            status: status,
            description: description,
            introduce: introduce,
            location: location,
            price: price,
            author: author,
            company: company,
            year: year,
            republish: republish,
            isbn: isbn,
            rent: rent,
            quality: quality
        },
        success: function(data) {
            alert("Cập nhật thành công thông tin sách");
            window.location.reload(true);
        },
        error: function(data) {
            if(data.status === 422) {
                var errors = data.responseJSON;

                $('#error-name').text(errors['name']);
                $('#error-introduce').text(errors['introduce']);
                $('#error-description').text(errors['description']);
                $('#error-price').text(errors['price']);
                $('#error-price-rent').text(errors['rent']);
                $('#error-author').text(errors['author']);
                $('#error-company').text(errors['company']);
                $('#error-year').text((errors['year']));
                $('#error-kind').text(errors['kind']);
                $('#error-method').text(errors['method']);
                $('#error-category').text(errors['category']);
                $('#error-quality').text(errors['quality']);
                $('#error-republish').text(errors['republish']);
                $('#error-location').text(errors['location']);
                $('#error-isbn').text(errors['isbn']);
            }
        }
    });
    evt.preventDefault();
});

$('.btn-delete').click(function(e) {
    var id = parseInt($(this).data('id'));
    console.log(id);

    $.ajax({
        cache: false,
        method: 'PUT',
        dataType: 'JSON',
        data: {
            id: id,
        },
        url: '/book/delete',
        success: function(data) {
            alert('Bạn đã xóa thành công sách khỏi hệ thống');
            window.location.reload(true);
        },
        error: function(data) {
            alert('Có lỗi xảy ra, vui lòng thử lại');
        }
    });
    e.preventDefault();
});
$('#radio2').click(function() {
    $('.form-rent').removeAttr('style');
    $('#price-rent').val('');
});
$('#radio1').click(function() {
    $('.form-rent').css('display','none');
    $('#price-rent').val(0);
});

</script>
@endsection
