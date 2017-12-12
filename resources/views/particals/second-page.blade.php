<img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
<span style="margin-left: 325px; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Sách Thuê</span>
<div class="hr">
    <hr />
</div>
<br>
<section class="home-v2-categories-products-carousel section-products-carousel animate-in-view fadeIn animated animation">
    <header>
        <h2 class="h1"><a href="{{ route('book.renter') }}" style="font-size: 20px;">Xem Tất Cả</a></h2>
        <div class="owl-nav">
            <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2c4230" class="slider-prev"><i class="fa fa-angle-left"></i></a>
            <a href="#products-carousel-next" data-target="#products-carousel-57176fb2c4230" class="slider-next"><i class="fa fa-angle-right"></i></a>
        </div>
    </header>
    <div id="products-carousel-57176fb2c4230">
        <div class="woocommerce">
            <div class="products owl-carousel home-v2-categories-products products-carousel columns-6" id="owl-demo4">
            @foreach($books as $book)
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item active" style="width: 215.75px;">
                            <div class="product">
                                <div class="product-outer" style="height: 360px;">
                                    <div class="product-inner" style="height: 360px;">
                                        <span class="loop-product-categories">
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            Cũ
                                        </span>
                                        <a data-toggle="modal" href="#myModal" class="book-show" id="book-{{ $book->id}}">
                                            <h3 class="product-name">{{ $book->name }}</h3>
                                            <div class="product-thumbnail">
                                                <img src="{{ URL::to('assets/images/product'. '/'. $book->images[0]['path'])}}" class="img-responsive" style="max-height: 190px;margin:auto; max-width: 150px;" alt="">
                                            </div>
                                        </a>
                                        <br>
                                        <br>
                                        <div class="price-add-to-cart" style="margin-top: 150px;">
                                            <span class="price">
                                                <span class="electro-price" style="position: relative;">
                                                    <ins><span class="amount">{{ $book->price }} VNĐ</span></ins>
                                            {{-- <del style="position:absolute;left:0;top:-14px;"><span class="amount">$2,299.00</span></del> --}}
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

        var owl4 = $("#owl-demo4");

        var block = false;
        $(".owl-carousel").mouseenter(function() {
            if (!block) {
                block = true;
                owl4.trigger('stop.owl.autoplay')
                block = false;
            }
        });
        $(".owl-carousel").mouseleave(function() {
            if (!block) {
                owl4.trigger('play.owl.autoplay', [1000])
                block = false;
            }
        });

        owl4.owlCarousel({
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
@endpush
