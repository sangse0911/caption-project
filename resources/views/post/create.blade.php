@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('customer')
<nav class="woocommerce-breadcrumb"><a href="/">Trang Chủ</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Đăng Bài
</nav>
<article class="page type-page status-publish hentry">
    <header class="entry-header">
        <img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
        <span style="left: 50%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Đăng Bài</span>
        <div class="hr">
            <hr />
        </div>
        <br>
        <div style="clear: both;"></div>
    </header>
    <form enctype="multipart/form-data" id="ahaha" class="" type="hidden" method="POST" style="text-align: left;border-style: dotted;padding-top: 20px;border-color: #a3d133;">
        {!! csrf_field() !!}
        <div class="form-group col-sm-6 post">
            <label for="introduce">Bạn muốn làm gì với sách</label>
            <br/>
            <label class="radio-inline">
                <input type="radio" name="kind" id="1" value="0">Bán</label>
            <label class="radio-inline">
                <input type="radio" name="kind" id="2" value="1">Cho thuê</label>
            <label class="radio-inline">
                <input type="radio" name="kind" id="3" value="2">Cho mượn</label>
            <br/>
            <span class="help-block">
            <strong id="error-kind"></strong>
        </span>
        </div>
        <div class="form-group col-sm-6 post">
            <label for="introduce">Bạn muốn thanh toán bằng</label>
            <br/>
            <label class="radio-inline">
                <input type="radio" name="method" id="4" value="0">Tiền mặt</label>
            <label class="radio-inline">
                <input type="radio" name="method" id="5" value="1">Chuyển khoản</label>
            <br/>
            <span class="help-block">
                <strong id="error-method"></strong>
            </span>
        </div>
        <div class="form-group col-sm-6 post account" style="display: none;">
            <label for="name">Số tài khoản</label>
            <input type="text" name="account" class="form-control" id="account" value="" placeholder="Tài khoản">
            <span class="help-block">
            <strong id="error-account"></strong>
        </span>
        </div>
        <div class="form-group col-md-6 post">
            <label for="">Gía</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Gía bạn mong muốn">
            <span class="help-block">
            <strong id="error-price"></strong>
        </span>
        </div>
        <div class="form-group col-md-6 price-rent" style="display: none;">
            <label for="">Gía thuê</label>
            <input type="text" name="price-rent" id="price-rent" class="form-control" placeholder="Gía bạn mong muốn">
            <span class="help-block">
            <strong id="error-price-rent"></strong>
        </span>
        </div>
        <div class="form-group col-md-6 post">
            <label for="">Số điện thoại</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Số điện thoại nhà cung cấp">
            <span class="help-block">
            <strong id="error-phone"></strong>
        </span>
        </div>
        <div class="form-group col-sm-6 post">
            <label for="name">Địa chỉ của bạn</label>
            <input type="text" name="address" class="form-control" id="address" value="" placeholder="Địa chỉ nhà cung cấp">
            <span class="help-block">
            <strong id="error-address"></strong>
        </span>
        </div>
        <div class="form-group col-sm-6 post">
            <label for="name">Tên sách</label>
            <input type="hidden" name="id" value="" id="id">
            <input type="text" name="name" class="form-control" id="name" value="" placeholder="Tên sách">
            <span class="help-block">
            <strong id="error-name"></strong>
        </span>
        </div>
        <div class="form-group col-sm-6 post">
            <label for="introduce">Giới thiệu về sách</label>
            <input type="text" name="introduce" class="form-control" id="introduce" value="" placeholder="Giới thiệu về sách">
            <span class="help-block">
            <strong id="error-introduce"></strong>
        </span>
        </div>
        <div class="form-group col-sm-6 post">
            <label for="author">Tác gỉa</label>
            <input type="text" class="form-control" name="author" id="author" value="" placeholder="Tác gỉa">
            <span class="help-block">
            <strong id="error-author"></strong>
        </span>
        </div>
        <div class="form-group col-sm-6 post">
            <label for="publishing-company">Nhà xuất bản</label>
            <input type="text" class="form-control" name="company" id="company" value="" placeholder="Nhà xuất bản">
            <span class="help-block">
            <strong id="error-company"></strong>
        </span>
        </div>
        <div class="form-group col-sm-6 post">
            <label for="publishing-year">Năm xuất bản</label>
            <input type="text" class="form-control" name="year" id="year" value="" placeholder="Năm xuất bản">
            <span class="help-block">
            <strong id="error-year"></strong>
        </span>
        </div>
        <div class="form-group col-sm-6 post">
            <label for="republish">Tái bản lần thứ</label>
            <input type="text" class="form-control" name="republish" id="republish" value="" placeholder="Tái bản lần thứ">
            <span class="help-block">
            <strong id="error-republish"></strong>
        </span>
        </div>
        <div class="form-group col-md-6 supplier">
            <label for="quality">Chất Lượng Sách</label for="quality">
            <select id="quality" multiple="multiple" name="quality[]" class="quality" style="width: 100%;">
                <option name="" value="5">Cũ</option>
                <option name="" value="6">Mới</option>
            </select>
            <span class="help-block">
            <strong id="error-quality"></strong>
        </span>
        </div>
        <div class="form-group col-sm-12 post">
            <label for="description">Mô tả về sách</label>
            <textarea class="form-control" id="description" name="description" rows="5"
                placeholder="Mô tả về sách" style="border-width: 1px;">
            </textarea>
        </div>
        <div class="form-group image-area post">
            <div class="col-md-12">
                <input type="file" id="input-file-now" class="dropify" name="images[]" />
            </div>
        </div>
        <div class="form-group" style="clear: both;"></div>
        <div class="form-group" style="text-align: center;">
            <button type="submit" class="btn-success" id="post-create">&nbsp&nbsp&nbspGửi&nbsp&nbsp&nbsp</button>
            <button type="reset" class="btn-danger" data-dismiss="modal">Làm mới</button>
        </div>
        <div class="form-group" style="clear: both;"></div>
    </form>
</article>
@endsection @section('sidebar') @include('particals.sidebar') @endsection @include('particals.contents') @endsection @section('footer') @include('particals.footer') @endsection @push('scripts')
<script>
$("#quality").select2({ closeOnSelect: true, maximumSelectionLength: 1 });
$('#year').datetimepicker({
    format: 'YYYY-MM-DD',
});

$('#2').click(function(e) {
    $('.price-rent').removeAttr('style');
    $('#price-rent').val('');
});

$('#1').click(function() {
    $('.price-rent').css('display','none');
    $('#price-rent').val(parseInt(0));
});

$('#3').click(function() {
    $('.price-rent').css('display','none');
    $('#price-rent').val(parseInt(0));
});

$('#4').click(function() {
    $('.account').css('display','none');
    $('#account').val('000000');
});

$('#5').click(function() {
    $('.account').removeAttr('style');
    $('#account').val('');
});

$('#post-create').click(function(e) {
    $('#error-name').text("");
    $('#error-introduce').text("");
    $('#error-price').text("");
    $('#error-author').text("");
    $('#error-company').text("");
    $('#error-year').text("");
    $('#error-kind').text("");
    $('#error-method').text("");
    $('#error-account').text("");
    $('#error-quality').text("");
    $('#error-republish').text("");
    $('#error-phone').text('');
});


$('#ahaha').submit(function(evt) {
    evt.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        async: true,
        method: 'POST',
        url: '/book/storePostBook',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function() {
            alert("Chúc mừng bạn đã đăng bài thành công");
            window.location.href = '/';
        },
        error: function(data) {
            if (data.status === 422) {
                var errors = data.responseJSON;

                $('#error-name').text(errors['name']);
                $('#error-introduce').text(errors['introduce']);
                $('#error-price').text(errors['price']);
                $('#error-author').text(errors['author']);
                $('#error-company').text(errors['company']);
                $('#error-year').text((errors['year']));
                $('#error-kind').text(errors['kind']);
                $('#error-method').text(errors['method']);
                $('#error-account').text(errors['account']);
                $('#error-quality').text(errors['quality']);
                $('#error-republish').text(errors['republish']);
                $('#error-phone').text(errors['phone']);
                $('#error-address').text(errors['address']);
            }
        }
    });
});

$('#sidebar').css('margin-top', '150px');
</script>
@endpush
