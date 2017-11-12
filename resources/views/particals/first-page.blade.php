<section class="home-v2-categories-products-carousel section-products-carousel animate-in-view fadeIn animated animation" data-animation="fadeIn">
    <header>
        <h2 class="h1">Goc sach ban</h2>
        <h2 class="h1">Goc sach mua</h2>
        <h2 class="h1">Goc doc sach</h2>
        <div class="owl-nav">
            <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2c4230" class="slider-prev"><i class="fa fa-angle-left"></i></a>
            <a href="#products-carousel-next" data-target="#products-carousel-57176fb2c4230" class="slider-next"><i class="fa fa-angle-right"></i></a>
        </div>
    </header>
    <div id="products-carousel-57176fb2c4230">
        <div class="woocommerce">
            <div class="products owl-carousel home-v2-categories-products products-carousel columns-6" id="owl-demo">
                @foreach($books as $book)  @foreach($book->images as $image)
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item active" style="width: 215.75px;">
                            <div class="product">
                                <div class="product-outer" style="height: 331px;">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="single-product.html">
                                            <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                            <div class="product-thumbnail">
                                                <img src="assets/images/product-category/2.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price" style="position: relative;">
                                                    <ins><span class="amount"> $1,999.00</span></ins>
                                                    <del style="position:absolute;left:0;top:-14px;"><span class="amount">$2,299.00</span></del>
                                                    <span class="amount"> </span>
                                                </span>
                                            </span>
                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                        </div>
                                        <!-- /.price-add-to-cart -->
                                        <div class="hover-area">
                                            <div class="action-buttons">
                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
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
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item active" style="width: 215.75px;">
                            <div class="product">
                                <div class="product-outer" style="height: 331px;">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="single-product.html">
                                            <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                            <div class="product-thumbnail">
                                                <img src="assets/images/product-category/2.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price" style="position: relative;">
                                                    <ins><span class="amount"> $1,999.00</span></ins>
                                                    <del style="position:absolute;left:0;top:-14px;"><span class="amount">$2,299.00</span></del>
                                                    <span class="amount"> </span>
                                                </span>
                                            </span>
                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                        </div>
                                        <!-- /.price-add-to-cart -->
                                        <div class="hover-area">
                                            <div class="action-buttons">
                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
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
                @endforeach @endforeach
            </div>
        </div>
    </div>
</section>
