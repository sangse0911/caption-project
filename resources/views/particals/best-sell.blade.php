<section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
    <header>
          <h2 class="h1"><a href="" style="font-size: 20px;">Xem Tất Cả</a></h2>
        <ul class="nav nav-inline">
            <li class="nav-item active"><span class="nav-link">Top 20</span></li>
        </ul>
    </header>
    <div id="home-v1-product-cards-careousel">
        <div class="woocommerce columns-2 home-v1-product-cards-carousel product-cards-carousel owl-carousel" id="owl-demo2">
            @foreach($books->chunk(4) as $new_book)
            @foreach($new_book as $book)
            @foreach($book->images as $image)
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item" style="width: 863px;">
                        <ul class="products columns-2">
                            <li class="product product-card first">
                                <div class="product-outer" style="height: 216px;">
                                    <div class="media product-inner">
                                        <a class="media-left book-show" data-toggle="modal" href="#myModal" title="{{ $book->name }}" id="book-{{ $book->id}}">
                                            <img class="media-object wp-post-image img-responsive" src="{{ URL::to('assets/images/product/'. $image->path) }}" alt="">
                                        </a>
                                        <div class="media-body">
                                            <span class="loop-product-categories">
                                                <a href="#" rel="tag"></a>
                                            </span>
                                            <a href="#">
                                                <h3>{{ $book->name }}</h3>
                                            </a>
                                            <div class="price-add-to-cart">
                                                <span class="price">
                                                    <span class="electro-price">
                                                        <ins><span class="amount">{{ $book->price }}</span></ins>
                                                        <del><span class="amount">$4,780.00</span></del>
                                                        <span class="amount"></span>
                                                    </span>
                                                </span>
                                                <a href="javascript:void(0)" class="button add_to_cart_button" data-id="{{ $book->id }}">Thêm vào giỏ</a>
                                            </div>
                                            <!-- /.price-add-to-cart -->
                                            <div class="hover-area">
                                                <div class="action-buttons">
                                                    <a href="javascript:void(0)" class="add_to_wishlist">Yêu thích</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div>
                                <!-- /.product-outer -->
                            </li>
                                <!-- /.products -->
                            <li class="product product-card last">
                                <div class="product-outer" style="height: 216px;">
                                    <div class="media product-inner">
                                        <a class="media-left book-show" data-toggle="modal" href="#myModal" title="{{ $book->name }}" id="book-{{ $book->id}}">
                                            <img class="media-object wp-post-image img-responsive" src="{{ URL::to('assets/images/product/'. $image->path) }}" alt="">
                                        </a>
                                        <div class="media-body">
                                            <span class="loop-product-categories">
                                                <a href="#" rel="tag">Smartphones</a>
                                            </span>
                                            <a href="single-product.html">
                                                <h3>{{ $book->name }}</h3>
                                            </a>
                                            <div class="price-add-to-cart">
                                                <span class="price">
                                                    <span class="electro-price">
                                                        <ins><span class="amount">{{ $book->price }}</span></ins>
                                                        <span class="amount"> $500</span>
                                                    </span>
                                                </span>
                                                <a href="javascript:void(0)" class="button add_to_cart_button" data-id="{{ $book->id }}">Thêm vào giỏ</a>
                                            </div>
                                            <!-- /.price-add-to-cart -->
                                            <div class="hover-area">
                                                <div class="action-buttons">
                                                    <a href="javascript:void(0)" class="add_to_wishlist">Yêu thích</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div>
                                <!-- /.product-outer -->
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach @endforeach @endforeach
        </div>
    </div>
</section>
@push('scripts')
<script>
    (function($) {

        var owl2 = $("#owl-demo2");

        var block = false;
        $(".owl-carousel").mouseenter(function() {
            if (!block) {
                block = true;
                owl2.trigger('stop.owl.autoplay')
                block = false;
            }
        });
        $(".owl-carousel").mouseleave(function() {
            if (!block) {
                owl2.trigger('play.owl.autoplay', [1000])
                block = false;
            }
        });

        owl2.owlCarousel({
            autoplay: true,
            autoPlaySpeed: 1000,
            autoplayHoverPause: true,
            loop: true,
            navigation: true,
            items: 2, //10 items above 1000px browser width
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

        });
    })(jQuery);
</script>
@endpush
