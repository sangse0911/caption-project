<section class="home-v2-categories-products-carousel section-products-carousel animate-in-view fadeIn animated animation">
    <header>
        <h2 class="h1">Góc sách cho thuê</h2>

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
                                <div class="product-outer" style="height: 331px;">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="#" rel="tag">a</a></span>
                                        <a data-toggle="modal" href="#myModal" class="book-show" id="book-{{ $book->id}}">
                                            <h3 class="product-name">{{ $book->name }}</h3>
                                            <div class="product-thumbnail">
                                                <img src="{{ URL::to('assets/images/product'. '/'. $book->images[0]['path'])}}" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                        <div class="price-add-to-cart">
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
                                            <div class="action-buttons">
                                                <a href="javascript:void(0)" rel="nofollow" id="book-{{ $book->id }}" class="add_to_wishlist">Yêu thích</a>
                                            </div>
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