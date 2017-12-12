@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('customer')
<nav class="woocommerce-breadcrumb"><a href="#">Trang Chủ</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Bán Sách
</nav>
<article class="page type-page status-publish hentry">
    <header class="entry-header">
        <img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
        <span style="left: 50%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;" >Bán Sách</span>
        <div class="hr"><hr /></div>
        <br>
        <div style="clear: both;"></div>
<form id="ahuhu" class="" type="hidden" method="POST" style="text-align: left;border-style: dotted;padding-top: 20px;border-color: #a3d133;">
    <div class="form-group col-sm-6 post">
        <label for="introduce">Bạn muốn làm gì với sách</label>
        <br/>
        <label class="radio-inline">
            <input type="radio" name="kind" value="0">Bán</label>
        <label class="radio-inline">
            <input type="radio" name="kind" value="1">Cho thuê</label>
        <br/>
        <span class="help-block">
            <strong id="error-kind"></strong>
        </span>
    </div>
    <div class="form-group col-sm-6 post">
        <label for="introduce">Bạn muốn thanh toán bằng</label>
        <br/>
        <label class="radio-inline">
            <input type="radio" name="method" value="0">Tiền mặt</label>
        <label class="radio-inline">
            <input type="radio" name="method" value="1">Chuyển khoản</label>
        <br/>
        <span class="help-block">
            <strong id="error-method"></strong>
        </span>
    </div>
    <div class="form-group col-sm-6 post">
        <label for="name">Số tài khoản</label>
        <input type="text" name="account" class="form-control" id="account" value="" placeholder="Tài khoản">
        <span class="help-block">
            <strong id="error-account"></strong>
        </span>
    </div>
    <div class="form-group col-md-6 post">
        <label for="">Giá</label>
        <input type="text" name="price" id="price" class="form-control" placeholder="Giá bạn mong muốn">
        <span class="help-block">
            <strong id="error-price"></strong>
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
        <textarea class="form-control" id="description" name="description" rows="10" placeholder="Mô tả về sách" style="border-width: 1px;"></textarea>
    </div>
    <div class="form-group image-area post">
        <div class="col-md-6">
            <input type="file" id="input-file-now" class="dropify" name="images[]" />
        </div>
        <div class="col-md-6">
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
<script>
</script>
@endsection @section('sidebar')
<div id="sidebar" class="sidebar" role="complementary">
    <div style="clear: both; margin-top: 50px;"></div>
    <aside class="widget widget_text">
        <div class="textwidget">
            <a href="#">
                <img src="{{ URL::to('assets/images/banner/banner1.jpg') }}" id="borderimg2" alt="Banner">
            </a>
        </div>
    </aside>
    <aside class="widget widget_text">
        <div class="textwidget">
            <a href="#">
                <img src="{{ URL::to('assets/images/banner/banner2.jpg') }}" id="borderimg2" alt="Banner">
            </a>
        </div>
    </aside>
    @yield('recently')
    <aside id="electro_features_block_widget-2" class="widget widget_electro_features_block_widget">
        <div class="features-list columns-1">
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-transport"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Miễn phí vận chuyển</strong> từ $50
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-returning"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>14 ngày</strong> đổi trả
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-payment"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Thanh toán</strong> qua ngân hàng
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-tag"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Sách đã bán</strong> đều đảm bảo
                    </div>
                </div>
            </div>
        </div>
    </aside>


</div>
 @endsection @include('particals.contents') @endsection @section('footer') @include('particals.footer') @endsection
@section('script')
<script>
    $("#quality").select2({ closeOnSelect: true, maximumSelectionLength: 1 });
    $('#year').datetimepicker({

        format: 'YYYY-MM-DD'
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

    $('#ahuhu').submit(function(evt) {

        var formData = new FormData(this);

        $.ajax({
            async:true,
            method: 'POST',
            url: '/book/storeSaleBook',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
            },
            success: function() {
                alert("Chúc mừng bạn đã đăng bài thành công");
                window.location.assign('/books');
            },
            error: function(data) {
                if(data.status === 422) {
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
        evt.preventDefault();
    });
</script>
@endsection
