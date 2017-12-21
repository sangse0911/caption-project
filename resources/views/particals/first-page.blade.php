<img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
<span style="margin-left: 40%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Sách Bán</span>
<div class="hr">
    <hr />
</div>
<br>
<section class="section-product-cards-carousel" >
    <header>
        <h2 class="h1"><a href="{{ route('book.sell') }}" style="font-size: 20px;">Xem Tất Cả</a></h2>
        <div class="owl-nav">
            <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2c4230" class="slider-prev"><i class="fa fa-angle-left"></i></a>
            <a href="#products-carousel-next" data-target="#products-carousel-57176fb2c4230" class="slider-next"><i class="fa fa-angle-right"></i></a>
        </div>
    </header>
 <div id="recommended-product">
     <div class="woocommerce columns-4">
           <div class="products owl-carousel products-carousel columns-4 owl-loaded owl-drag" id="owl-demo">
                @foreach($books as $book)
                    <div class="product">
                        <div class="product-outer" style="height: 360px;">
                            <div class="product-inner" style="height: 360px;">
                                <span class="loop-product-categories"><i class="fa fa-tags" aria-hidden="true"></i>

                                </span>
                                <a data-toggle="modal" href="#myModal" class="book-show" id="book-{{ $book->id}}">
                                    <h3 class="product-name">{{ $book->name }}</h3>
                                    <div class="product-thumbnail">
                                        <img src="{{ URL::to('assets/images/product'. '/'. $book->images[0]->path )}}" style="max-height: 150px;margin:auto; max-width: 130px;" class="img-responsive" alt="">
                                    </div>
                                </a>
                                <div class="price-add-to-cart" style="margin-top: 150px;">
                                    <span class="price">
                                        <span class="electro-price" style="position: relative; font-size: 18px;">
                                            <ins><span class="amount">{{ $book->price }} VNĐ</span></ins>

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


</script>
<script>

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
