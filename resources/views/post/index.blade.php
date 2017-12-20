@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') {{-- @section('carousel') @include('particals.carousel') @endsection --}} @section('categories') @section('css')
<style type="text/css">
.pagination {
    display: inline-block;
    width: 100%;
}

.pagination li {
    list-style: none;
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 0 4px;
}

.pagination li.active {
    background-color: #a3d133;
    color: white;
    border: 1px solid #a3d133;
    border-radius: 5px;
}

.pagination li:hover:not(.active) {
    background-color: #ddd;
}
</style>
@endsection()
<div style="margin-top: 50px;"></div>
@include('particals.categories')
<img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
<span style="margin-left: 40%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Góc Sách</span>
<div class="hr">
    <hr />
</div>
<br>
<div class="shop-control-bar">
    <ul class="shop-view-switcher nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid" aria-expanded="true"><i class="fa fa-th"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" title="List View" href="#list-view" aria-expanded="false"><i class="fa fa-list"></i></a></li>
    </ul>
</div>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
        <ul class="products columns-3">
            @foreach($books as $book) {{-- {{ dd($book) }} --}} {{-- @foreach($book->images as $image) --}}
            <li class="product">
                <div class="product-outer" style="height: 391px;">
                    <div class="product-inner">
                        <span class="loop-product-categories">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                        </span>
                        <a data-toggle="modal" href="#myModal" class="book-show" data-id="{{ $book->id }}">
                            <h3>{{ $book->name }}</h3>
                            <div class="product-thumbnail">
                                <img style="max-width: 200px;max-height: 220px;margin: auto;" src="{{ URL::to('assets/images/product/' . $book->images[0]->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <span class="amount">{{ $book->price }} VNĐ</span>
                            <br><span style="font-size: 15px;">Người đăng: </span> <span style="font-size: 15px; color: blue;">
                                        {{ $book->contracts[0]->user->name }}
                                    </span>
                            <span class="amount"> </span>
                            </span>
                            </span>
                            {{-- <a rel="nofollow" href="javascript:void(0)" class="button add_to_cart_button">Add to cart</a> --}}
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div style="text-align: center;">
                            <i class="fa fa-bookmark" aria-hidden="true"></i> <span style="color: red;">
                                @php
                                    switch ($book->contracts[0]->kind) {
                                        case '1':
                                            echo 'Sách cho thuê';
                                            break;
                                        case '0':
                                            echo 'Sách bán';
                                            break;

                                        default:
                                            echo 'Sách cho mượn';
                                            break;
                                    }
                                @endphp
                            </span>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="false">
        <ul class="products columns-3">
            @foreach($books as $book)
            <li class="product list-view">
                <div class="media">
                    <div class="media-left">
                        <a data-toggle="modal" href="#myModal" class="book-show" data-id="{{ $book->id }}">
                            <img class="wp-post-image" src="{{ URL::to('assets/images/product/' . $book->images[0]->path) }}" alt="">
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="loop-product-categories"><a rel="tag" href="javascript:void(0)"></a></span><a href="javascript:void(0)"><h3>{{ $book->name }}</h3>
                                    <div class="product-rating">
                                        <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                    </div>
                                    <div class="product-short-description">
                                        <ul style="padding-left: 18px;">
                                            <li>Tác gỉa: {{ $book->author }}</li>
                                            <li>Tái bản: {{ $book->republish }}</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <div class="availability in-stock">
                                    Trạng thái: <span>Sẵn sàng</span>
                                </div>
                                <span class="price"><span class="electro-price"><span class="amount">{{ $book->price }} VNĐ</span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <form type="hidden" name="" id="post-form" method="POST">
        <input type="hidden" name="token" value="{{ csrf_token() }}">
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Thông tin chi tiết của sách</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="product" id="single-product">
                                <div class="single-product-wrapper">
                                    <div class="product-images-wrapper">

                                        <div class="images electro-gallery">
                                            <div class="thumbnails-single owl-carousel owl-loaded owl-drag">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage">
                                                        <div class="owl-item active" style="width: 300px;">
                                                            <a href="#" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                                                <img  class="wp-post-image" alt="" id="image-book">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumbnails-all columns-5 owl-carousel owl-loaded owl-drag">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage">
                                                        <div class="owl-item active synced" style="width: 87.6px; margin-right: 8px;">
                                                            <a href="assets/images/single-product/single-thumb1.jpg" class="first" title=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary entry-summary">
                                        <div class="summary entry-summary">
                                            <h1 itemprop="name" class="product_title entry-title" id="book-name"></h1>
                                            <div class="woocommerce-product-rating">
                                                <div class="star-rating" title="Rated 4.33 out of 5">
                                                    <span style="width:86.6%">
                                                          <strong itemprop="ratingValue" class="rating">4.33</strong>
                                                          out of <span itemprop="bestRating">5</span> based on
                                                    <span itemprop="ratingCount" class="rating">3</span> customer ratings
                                                    </span>
                                                </div>
                                                <a href="#reviews" class="woocommerce-review-link">
                                                   (<span itemprop="reviewCount" class="count">3</span> Đánh Giá)
                                                 </a>
                                            </div>
                                            <!-- .woocommerce-product-rating -->
                                            <!-- .brand -->
                                            <div class="availability in-stock">
                                                Tác Giả: <span class="book-author"></span>
                                            </div>
                                            <!-- .availability -->
                                            <hr class="single-product-title-divider" />
                                            <!-- .action-buttons -->
                                            <div itemprop="description">
                                                <ul>
                                                   Liên hệ: <li id="user-id"></li>
                                                </ul>
                                            </div>
                                            <!-- .description -->
                                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                <p class="price"><span class="electro-price"><ins>Giá Bán: <span class="amount" id="book-price"></span></ins>
                                                    <br>
                                                    <del>Giá Bìa: <span class="amount">120.000 VNĐ</span></del>
                                                    </span>
                                                </p>
                                                <meta itemprop="price" content="1215" />
                                                <meta itemprop="priceCurrency" content="USD" />
                                                <link itemprop="availability" href="http://schema.org/InStock" />
                                            </div>
                                            <!-- /itemprop -->
                                            <form class="variations_form cart" method="post">
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"></div>
                                                    <div class="woocommerce-variation-add-to-cart variations_button">
                                                        <br/>
                                                        <input type="hidden" name="add-to-cart" value="2452" />
                                                        <input type="hidden" name="product_id" value="2452" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                    </div>
                                                </div>
                                            </form>
                                            <br/>
                                        </div>
                                        <!-- .summary -->
                                    </div>
                                    <!-- /.single-product-wrapper -->
                                    <div class="woocommerce-tabs wc-tabs-wrapper">
                                        <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
                                            <li class="nav-item description_tab" style="margin-left: 40px;">
                                                <a href="#tab-description" class="active" data-toggle="tab">Giới Thiệu Sách</a>
                                            </li>
                                            <li class="nav-item specification_tab">
                                                <a href="#tab-specification" data-toggle="tab">Thông Tin Chi Tiết</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" style="margin-left: 40px;">
                                            <div class="tab-pane panel entry-content wc-tab" id="tab-accessories">
                                                <div class="accessories">
                                                    <div class="electro-wc-message"></div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-left">
                                                            <div class="check-products">
                                                                <div class="fb-comments" data-width="800" data-numposts="5"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
                                                <div class="electro-description" id="book-description">
                                                </div>
                                            </div>
                                            <div class="tab-pane panel entry-content wc-tab" id="tab-specification">
                                                <h3>Thông Tin Chi Tiết</h3>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tác Giả</td>
                                                            <td class="book-author"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ngày xuất bản</td>
                                                            <td id="book-year"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nhà xuất bản</td>
                                                            <td id="book-company"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="fb-root"></div>
                                    <script>
                                    (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=251903588593570';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="post-create">Lưu</button>
                        <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{!! $books->links() !!}
@endsection @section('sidebar') @include('particals.sidebar') @endsection @include('particals.contents') @endsection @section('footer') @include('particals.footer') @endsection() @push('scripts')
<script>
    $('#sidebar').css('margin-top', '150px');

</script>
<script>
    $('#sidebar').css('margin-top','150px');

    $('.book-show').click(function(e) {
        $('.modal-title').text('Thông tin chi tiết');
        $('.post').css("display","none");
        $('#single-product').removeAttr("style");
        $('.action-buttons').removeAttr("style");
    });

    $('#post-show').click(function(e) {
        var id = $(this).data('id');
        window.location.href = "/postByUser/" + id;
    });
</script>
<script>
    $('.book-show').on('click', function(e) {
        var book_id = $(this).data('id');
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/book/' + book_id,
            success: function(data) {
                // console.log(data['user']['phone']);
                $('#user-id').text(data['user']['phone']);
                $('#book-rate').val(data['book']['id']);
                $('#book-name').text(data['book']['name']);
                $('#book-status').text(data['book']['status']);
                $('#book-company').text(data['book']['company']);
                $('#book-year').text(data['book']['year']);
                $('#book-republish').text(data['book']['republish']);
                $('.book-author').text(data['book']['author']);
                $('#book-price').text('Gía: ' + data['book']['price'] + ' VND');
                $('#book-introduce').text(data['book']['introduce']);
                $('#book-description').text(data['book']['description']);
                $('#image-book').attr('src','{{ URL::to('assets/images/product/') }}' + '/' + data['images'][0]['path']);
                $('.fb-comments').attr('data-href',"http://localhost:8000/book/"+ book_id );
                $('.modal-footer').css('display','none');
            },
            error: function(data) {
            }
        });
        e.preventDefault();
    });
</script>
@endpush
