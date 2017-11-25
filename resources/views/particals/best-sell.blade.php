<section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
    <header>
        <h2 class="h1">Sach ban chay nhat</h2>
        <ul class="nav nav-inline">
            <li class="nav-item active"><span class="nav-link">Top 20</span></li>
            {{--
            <li class="nav-item"><a class="nav-link" href="product-category.html">Smart Phones &amp; Tablets</a></li>
            <li class="nav-item"><a class="nav-link" href="product-category.html">Laptops &amp; Computers</a></li>
            <li class="nav-item"><a class="nav-link" href="product-category.html">Video Cameras</a></li> --}}
        </ul>
    </header>
    <div id="home-v1-product-cards-careousel">
        <div class="woocommerce columns-2 home-v1-product-cards-carousel product-cards-carousel owl-carousel" id="owl-demo2">
            @foreach($books as $book) @foreach($book->images as $image)
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item" style="width: 863px;">
                        <ul class="products columns-2">
                                <li class="product product-card first">
                                    <div class="product-outer" style="height: 216px;">
                                        <div class="media product-inner">
                                            <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                                <img class="media-object wp-post-image img-responsive" src="assets/images/product-cards/3.jpg" alt="">
                                            </a>
                                            <div class="media-body">
                                                <span class="loop-product-categories">
                                                    <a href="product-category.html" rel="tag">Headphone Cases</a>
                                                </span>
                                                <a href="single-product.html">
                                                    <h3>Universal Headphones Case in Black</h3>
                                                </a>
                                                <div class="price-add-to-cart">
                                                    <span class="price">
                                                        <span class="electro-price">
                                                            <ins><span class="amount"> $3,788.00</span></ins>
                                                            <del><span class="amount">$4,780.00</span></del>
                                                            <span class="amount"> </span>
                                                        </span>
                                                    </span>
                                                    <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                                </div>
                                                <!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                    <div class="action-buttons">
                                                        <a href="#" class="add_to_wishlist">Wishlist</a>
                                                        <a href="#" class="add-to-compare-link">Compare</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.product-inner -->
                                    </div>
                                    <!-- /.product-outer -->
                                    arr[i].name
                                </li>
                                <!-- /.products -->
                                <li class="product product-card last">
                                <div class="product-outer" style="height: 216px;">
                                    <div class="media product-inner">
                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="media-object wp-post-image img-responsive" src="assets/images/product-cards/2.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <span class="loop-product-categories">
                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                            </span>
                                            <a href="single-product.html">
                                                <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                            </a>
                                            <div class="price-add-to-cart">
                                                <span class="price">
                                                    <span class="electro-price">
                                                        <ins><span class="amount"> </span></ins>
                                                        <span class="amount"> $500</span>
                                                    </span>
                                                </span>
                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div>
                                            <!-- /.price-add-to-cart -->
                                            <div class="hover-area">
                                                <div class="action-buttons">
                                                    <a href="#" class="add_to_wishlist">Wishlist</a>
                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div>
                                <!-- /.product-outer -->
                                arr[i+1].name
                               </li>

                            <!-- /.products -->
                            <li class="product product-card first">
                                <div class="product-outer" style="height: 216px;">
                                    <div class="media product-inner">
                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="media-object wp-post-image img-responsive" src="assets/images/product-cards/3.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <span class="loop-product-categories">
                                                <a href="product-category.html" rel="tag">Headphone Cases</a>
                                            </span>
                                            <a href="single-product.html">
                                                <h3>Universal Headphones Case in Black</h3>
                                            </a>
                                            <div class="price-add-to-cart">
                                                <span class="price">
                                                    <span class="electro-price">
                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                        <del><span class="amount">$4,780.00</span></del>
                                                        <span class="amount"> </span>
                                                    </span>
                                                </span>
                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div>
                                            <!-- /.price-add-to-cart -->
                                            <div class="hover-area">
                                                <div class="action-buttons">
                                                    <a href="#" class="add_to_wishlist">Wishlist</a>
                                                    <a href="#" class="add-to-compare-link">Compare</a>
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
                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="media-object wp-post-image img-responsive" src="assets/images/product-cards/2.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <span class="loop-product-categories">
                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                            </span>
                                            <a href="single-product.html">
                                                <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                            </a>
                                            <div class="price-add-to-cart">
                                                <span class="price">
                                                    <span class="electro-price">
                                                        <ins><span class="amount"> </span></ins>
                                                        <span class="amount"> $500</span>
                                                    </span>
                                                </span>
                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div>
                                            <!-- /.price-add-to-cart -->
                                            <div class="hover-area">
                                                <div class="action-buttons">
                                                    <a href="#" class="add_to_wishlist">Wishlist</a>
                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div>
                                <!-- /.product-outer -->
                            </li>
                            <!-- /.products -->
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach @endforeach
        </div>
    </div>
    <!-- #home-v1-product-cards-careousel -->
</section>
