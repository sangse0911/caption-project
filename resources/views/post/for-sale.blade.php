@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('customer')
<div style="clear: both; margin-top: 100px;"></div>
<form id="ahuhu" class="" type="hidden" method="POST">
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
        <label for="">Gía</label>
        <input type="text" name="price" id="price" class="form-control" placeholder="Gía bạn mong muốn">
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
        <div class="col-md-6">
            <input type="file" id="input-file-now" class="dropify" name="images[]" />
        </div>
        <div class="col-md-6">
            <input type="file" id="input-file-now" class="dropify" name="images[]" />
        </div>
    </div>
    <div class="form-group" style="clear: both;"></div>
    <div class="form-group" style="display: block; float: right;">
        <button type="submit" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="post-create">Lưu</button>
        <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Đóng</button>
    </div>
</form>
<script>
</script>
@endsection @section('sidebar')
<div id="sidebar" class="sidebar" role="complementary">
    <div style="clear: both; margin-top: 50px;"></div>
    <aside class="widget widget_text">
        <div class="textwidget">
            <a href="#">
                <img src="{{ URL::to('assets/images/banner/banner1.jpg') }}" alt="Banner">
            </a>
        </div>
    </aside>
    <aside class="widget widget_text">
        <div class="textwidget">
            <a href="#">
                <img src="{{ URL::to('assets/images/banner/banner2.jpg') }}" alt="Banner">
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
    <aside class="widget widget_electro_products_carousel_widget">
        <section class="section-products-carousel">
            <header>
                <h1>Sách hay</h1>
                <div class="owl-nav">
                    <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2dc4a8" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                    <a href="#products-carousel-next" data-target="#products-carousel-57176fb2dc4a8" class="slider-next"><i class="fa fa-angle-right"></i></a>
                </div>
            </header>
            <div id="products-carousel-57176fb2dc4a8">
                <div class="products owl-carousel  products-carousel-widget columns-1 owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item" style="width: 278px;">
                                <div class="product-carousel-alt">
                                    <a href="single-product.html">
                                        <div class="product-thumbnail"><img width="250" height="232" src="assets/images/products/1.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Smartwatch2"></div>
                                    </a>
                                    <span class="loop-product-categories"><a href="single-product.html" rel="tag">Smartwatches</a></span><a href="single-product.html"><h3>Smartwatch 2.0 LTE Wifi  Waterproof</h3></a>
                                    <span class="price"><span class="electro-price"><span class="amount">$725.00</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
    <aside class="widget electro_posts_carousel_widget">
        <section class="section-posts-carousel">
            <header>
                <h3 class="widget-title">Đánh gía của chuyên gia</h3>
                <div class="owl-nav">
                    <a href="#posts-carousel-prev" data-target="#posts-carousel-57176fb2e4a7f" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                    <a href="#posts-carousel-next" data-target="#posts-carousel-57176fb2e4a7f" class="slider-next"><i class="fa fa-angle-right"></i></a>
                </div>
            </header>
            <div id="posts-carousel-57176fb2e4a7f" class="blog-carousel-homev2">
                <div class="owl-carousel post-carousel blog-carousel-widget owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item" style="width: 278px;">
                                <div class="post-item">
                                    <a class="post-thumbnail" href="blog-single.html">
                                                <img width="270" height="180" src="assets/images/blog/blog-1.jpg" class="wp-post-image" alt="1">
                                            </a>
                                    <div class="post-content">
                                        <span class="post-category"><a href="blog-single.html" rel="category tag">Design</a>, <a href="blog-single.html" rel="category tag">Technology</a></span> -
                                        <span class="post-date">March 4, 2016</span>
                                        <a class="post-name" href="blog-single.html">Robot Wars – Post with Gallery</a>
                                        <span class="comments-link"><a href="blog-single.html#comments">Leave a comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection @include('particals.contents') @endsection
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