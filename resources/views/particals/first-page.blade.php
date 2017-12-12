<img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
<span style="margin-left: 335px; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Sách Bán</span>
<div class="hr">
    <hr />
</div>
<br>
<section class="home-v2-categories-products-carousel section-products-carousel animate-in-view fadeIn animated animation">
    <header>
        <h2 class="h1"><a href="{{ route('book.sell') }}" style="font-size: 20px;">Xem Tất Cả</a></h2>
        <div class="owl-nav">
            <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2c4230" class="slider-prev"><i class="fa fa-angle-left"></i></a>
            <a href="#products-carousel-next" data-target="#products-carousel-57176fb2c4230" class="slider-next"><i class="fa fa-angle-right"></i></a>
        </div>
    </header>
    @if(Auth::guest()) @else
    <input type="hidden" name="" id="user-id" value="{{ Auth::user()->id }}"> @endif
    <div id="products-carousel-57176fb2c4230">
        <div class="woocommerce">
            <div class="products owl-carousel home-v2-categories-products products-carousel columns-6" id="owl-demo">
                @foreach($books as $book)
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item active" style="width: 215.75px;">
                            <div class="product">
                                <div class="product-outer" style="height: 331px;">
                                    <div class="product-inner" style="height: 360px;">
                                        <span class="loop-product-categories"><i class="fa fa-tags" aria-hidden="true"></i>
                                            Cũ
                                        </span>
                                        <a data-toggle="modal" href="#myModal" class="book-show" id="book-{{ $book->id}}">
                                            <h3 class="product-name">{{ $book->name }}</h3>
                                            <div class="product-thumbnail">
                                                <img src="{{ URL::to('assets/images/product'. '/'. $book->images[0]->path )}}" style="max-height: 190px;margin:auto; max-width: 150px;" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                        <div class="price-add-to-cart" style="margin-top: 150px;">
                                            <span class="price">
                                                <span class="electro-price" style="position: relative;">
                                                    <ins><span class="amount">VNĐ {{ $book->price }}</span></ins>
                                            <del style="position:absolute;left:0;top:-14px;"><span class="amount">$2,299.00</span></del>
                                            <span class="amount"> </span>
                                            </span>
                                            </span>
                                            <a rel="nofollow" href="javascript:void(0)" class="button add_to_cart_button" id="book-{{ $book->id }}" data-id="{{ $book->id }}">Thêm vào giỏ</a>
                                        </div>
                                        <!-- /.price-add-to-cart -->
                                        <div class="hover-area">
                                            <a href="javascript:void(0)" rel="nofollow" id="book-{{ $book->id }}" class="add_to_wishlist">Yêu thích</a>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div>
                                <!-- /.product-outer -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script>
    (function($) {

        var owl = $("#owl-demo");

        var block = false;
        $(".owl-carousel").mouseenter(function() {
            if (!block) {
                block = true;
                owl.trigger('stop.owl.autoplay')
                block = false;
            }
        });
        $(".owl-carousel").mouseleave(function() {
            if (!block) {
                owl.trigger('play.owl.autoplay', [1000])
                block = false;
            }
        });

        owl.owlCarousel({
            autoplay: true,
            autoPlaySpeed: 1000,
            autoplayHoverPause: true,
            loop: true,
            navigation: true,
            items: 4, //10 items above 1000px browser width
            itemsDesktop: [1000, 5], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

        });
    })(jQuery);
</script>
<script>
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
        var book_id = e.currentTarget.id.substring(5);
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/book/' + book_id,
            success: function(data) {
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
                $('.fb-comments').attr('data-href',"https://developers.facebook.com/"+ book_id );
                $('.modal-footer').css('display','none');
                $('#book-isbn').text(data['book']['isbn']);
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
        var bookId = e.currentTarget.id.substring(5);
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
</script>
@endpush
