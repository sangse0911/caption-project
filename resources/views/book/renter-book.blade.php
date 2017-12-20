@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') {{-- @section('carousel') @include('particals.carousel') @endsection --}} @section('categories')
@section('css')
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

.pagination li:hover:not(.active) {background-color: #ddd;}
          </style>
@endsection()
<div style="margin-top: 50px;"></div>
@include('particals.categories')

<img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
<span style="margin-left: 40%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Sách Thuê</span>
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
     @if(Auth::guest())

    @else
        <input type="hidden" name="" id="user-id" value="{{ Auth::user()->id }}">
    @endif
    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
        <ul class="products columns-3">
            @foreach($books as $book)
            @foreach($book->images as $image)
            <li class="product">
                <div class="product-outer" >
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="javascript:void(0)" rel="tag">Sách thuê</a></span>
                        <span class="loop-product-categories" style="color: red;">{{ $book->name }}</span>
                        <a data-toggle="modal" href="#myModal" class="book-show" data-id="{{ $book->id }}">
                            <h3></h3>
                        {{-- <span class="loop-product-categories"><a href="javascript:void(0)" rel="tag">Sách thuê</a></span> --}}
                        <span class="loop-product-categories"><i class="fa fa-tags" aria-hidden="true"></i>
                        Cũ
                        </span>
                        <a href="javascript:void(0)">
                            <h3>{{ $book->name }}</h3>
                            <div class="product-thumbnail">
                                <img style="max-width: 200px;max-height: 220px;margin: auto;" src="{{ URL::to('assets/images/product/' . $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">{{ $book->price }} VNĐ</span></ins>
                            </span>
                            </span>
                            <a rel="nofollow" href="javascript:void(0)" data-id="{{ $book->id }}" class="button add_to_cart_button">Add to cart</a>
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <a href="javascript:void(0)" data-id="{{ $book->id }}" rel="nofollow" class="add_to_wishlist">
                                    Yêu thích
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach @endforeach
        </ul>
    </div>

    <div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="false">
        <ul class="products columns-3">
            @foreach($books as $book)
            @foreach($book->images as $image)
            <li class="product list-view">
                <div class="media">
                    <div class="media-left">
                        <a data-toggle="modal" href="#myModal" class="book-show" data-id="{{ $book->id }}">
                            <img class="wp-post-image" src="{{ URL::to('assets/images/product/' . $image->path) }}" alt="">
                        </a>
                    </div>
                     <div class="media-body media-middle">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="loop-product-categories">
                                    <a rel="tag" href="javascript:void(0)">Sách thuê</a>
                                </span><a href="javascript:void(0)"><h3>{{ $book->name }}</h3>
                                    <div class="product-rating">
                                        <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                    </div>
                                    <div class="product-short-description">
                                        <ul style="padding-left: 18px;">
                                            <li>Tác gỉa :{{ $book->author }}</li>
                                            <li>Gía thuê:{{ $book->rental_fee }}</li>
                                            <li>Tái bản: {{ $book->republish }}</li>
                                            {{-- <li>20 MP front Camera</li> --}}
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
                                <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-id="{{ $book->id }}" data-quantity="1" href="javascript:void(0)" rel="nofollow">Thêm vào giỏ</a>
                                <div class="hover-area">
                                    <div class="action-buttons">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist">
                                            <a class="add_to_wishlist" data-product-type="simple" data-id="{{ $book->id }}" rel="nofollow" href="javascript:void(0)">Yêu thích</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach @endforeach
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
                                        <span class="onsale">Cũ</span>
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
                                            <!-- .thumbnails-single -->
                                            <div class="thumbnails-all columns-5 owl-carousel owl-loaded owl-drag">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage">
                                                        <div class="owl-item active synced" style="width: 87.6px; margin-right: 8px;">
                                                            <a href="assets/images/single-product/single-thumb1.jpg" class="first" title=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .thumbnails-all -->
                                        </div>
                                        <!-- .electro-gallery -->
                                    </div>
                                    <!-- /.product-images-wrapper -->
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
                                            <div class="action-buttons">
                                                <a href="javascript:void(0)" class="add_to_wishlist">
                                                    Yêu thích
                                                </a>
                                            </div>
                                            <!-- .action-buttons -->
                                            <div itemprop="description">
                                                <ul>
                                                    <li>Miễn phí giao hàng toàn quốc cho đơn hàng từ 200.000 đ</li>
                                                    <li>Miễn phí giao hàng tại Hà Nội cho đơn hàng từ 100.000 đ</li>
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
                                            <li class="nav-item reviews_tab">
                                                <a href="#tab-reviews" data-toggle="tab">Đánh Giá</a>
                                            </li>
                                            <li class="nav-item accessories_tab">
                                                <a href="#tab-accessories" data-toggle="tab">Bình Luận</a>
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
                                                        <tr>
                                                            <td>ISBN/ISSN</td>
                                                            <td id="book-isbn"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.panel -->
                                            <div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
                                                <div id="reviews" class="electro-advanced-reviews">
                                                    <div class="advanced-review row">
                                                        <div class="col-xs-12 col-md-6">
                                                            <h2 class="based-title">Dựa trên 3 đánh giá</h2>
                                                            <div class="avg-rating">
                                                                <span class="avg-rating-number">4.3</span> overall
                                                            </div>
                                                            <div class="rating-histogram">
                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                                        <span style="width:100%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:33%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count">1</div>
                                                                </div>
                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 4 out of 5">
                                                                        <span style="width:80%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:67%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count">2</div>
                                                                </div>
                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 3 out of 5">
                                                                        <span style="width:60%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:0%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                </div>
                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 2 out of 5">
                                                                        <span style="width:40%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:0%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                </div>
                                                                <div class="rating-bar">
                                                                    <div class="star-rating" title="Rated 1 out of 5">
                                                                        <span style="width:20%"></span>
                                                                    </div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span style="width:0%" class="rating-percentage"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-md-6">
                                                            <div id="review_form_wrapper">
                                                                <div id="review_form">
                                                                    <div id="respond" class="comment-respond">
                                                                        <h3 id="reply-title" class="comment-reply-title">Thêm đánh giá
                                                                            <small>
                                                                                <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                                                                            </small>
                                                                        </h3>
                                                                        <input type="hidden" name="book-rate" id="book-rate" />
                                                                        <form method="post" id="commentform" class="comment-form">
                                                                            <p class="comment-form-rating">
                                                                                <label>Vote cho sách</label>
                                                                            </p>
                                                                            <p class="my-rating-9">
                                                                            </p>
                                                                            <p class="live-rating"></p>
                                                                            <p class="comment-form-comment">
                                                                                <p>
                                                                                    <label for="comment">Đánh giá của bạn</label>
                                                                                </p>
                                                                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                            </p>
                                                                            <p class="form-submit">
                                                                                <input name="submit" type="submit" class="submit-rate" value="Thêm đánh gía">
                                                                                <input type="hidden" name="comment_post_ID" value="2452" id="comment_post_ID">
                                                                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                                            </p>
                                                                            <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="c7106f1f46">
                                                                            <script>
                                                                            (function() { if (window === window.parent) { document.getElementById('_wp_unfiltered_html_comment_disabled').name = '_wp_unfiltered_html_comment'; } })();
                                                                            </script>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="comments">
                                                        <ol class="commentlist">
                                                            <li itemprop="review" class="comment even thread-even depth-1">
                                                                <div id="comment-390" class="comment_container">
                                                                    <img alt="" src="assets/images/blog/avatar.jpg" class="avatar" height="60" width="60">
                                                                    <div class="comment-text">
                                                                        <div class="star-rating" title="Rated 4 out of 5">
                                                                            <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                                        </div>
                                                                        <p class="meta">
                                                                            <strong>John Doe</strong> –
                                                                            <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>:
                                                                        </p>
                                                                        <div itemprop="description" class="description">
                                                                        </div>
                                                                        <p class="meta">
                                                                            <strong itemprop="author">John Doe</strong> –
                                                                            <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
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
@endsection
@section('sidebar')
@include('particals.sidebar')
@endsection
@include('particals.contents')
@endsection
@section('footer')
@include('particals.footer')
@endsection()
@push('scripts')
<script>
    $('#sidebar').css('margin-top','150px');

    $('.book-show').click(function(e) {
        $('.modal-title').text('Thông tin chi tiết');
        $('.post').css("display","none");
        $('#single-product').removeAttr("style");
        $('.action-buttons').removeAttr("style");
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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
                // $('.electro-nav-tabs').val('');
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
                $('#book-isbn').text(data['book']['isbn']);
                $('.add_to_wishlist').attr('id','book-'+ book_id);
            },
            error: function(data) {
            }
        });
        e.preventDefault();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.add_to_cart_button').click(function(e) {
        e.preventDefault();

        var id = $(this).data('id');

        $.ajax({

            cache: false,
            method: 'POST',
            url: '/cart/add',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(data) {
                alert('Bạn đã thêm thành công sản phẩm vào giỏ hàng');
                var count = parseInt($('.cart-items-count')[0].innerHTML);
                count += 1;
                $('.cart-items-count').each(function(e) {
                    $(this).text(count);
                });
            },
            error: function(data) {
                console.log("có lỗi với", data);
            }
        });
    });
    $('.add_to_wishlist').click(function(e) {
        var bookId = $(this).data('id');
        var userId = $('#user-id').val();

        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: '/addBookWishlist',
            data: {
                bookId: bookId,
                userId: userId
            },
            success: function(data) {
                alert("Bạn đã thêm thành công vào danh sách yêu thích");
            },
            error: function(data) {
                if(data.status === 401) {
                    alert('Vui lòng đăng nhập trưóc khi thêm sách vào yêu thích');
                }
                if(data.status === 500) {
                    alert('Sách đã có trong danh sách yêu thích của bạn');
                }
            }
        });
        e.preventDefault();
    });
    $(".my-rating-9").starRating({
        starSize: 20,
        initialRating: 0,
        disableAfterRate: false,
        strokeColor: '#a3d133',
        onHover: function(currentIndex, currentRating, $el){
          $('.live-rating').text(currentIndex);
        },
        onLeave: function(currentIndex, currentRating, $el){
          $('.live-rating').text(currentRating);
        }
    });

    $('.submit-rate').click(function(evt) {

        var bookId = $('#book-rate').val();
        var userId = $('#user-id').val();
        var comment = $('#comment').val();
        var rate = $('.my-rating-9').starRating('getRating');

        $.ajax({

            cache:false,
            method: 'POST',
            url: '/addBookRate',
            data: {
                userId: userId,
                bookId: bookId,
                comment: comment,
                rate: rate,
            },
            dataType: 'JSON',
            success: function(data) {
                alert("Cảm ơn bạn đã đánh gía");
                $('#myModal').modal('hide');
            },
            error: function(data) {
                if(data.status ===401) {
                    alert('Vui lòng đăng nhập trước khi đánh gía sách, xin cảm ơn');
                }
                if(data.status === 500) {
                    alert('Bạn đã vote cho sách này, cảm ơn bạn');
                }
            }
        });
        evt.preventDefault();
    });
</script>
@endpush
