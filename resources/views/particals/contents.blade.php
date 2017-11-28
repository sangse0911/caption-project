<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                @yield('part-content') @yield('carousel') @yield('categories') @yield('first') @yield('best-sell') @yield('event') @yield('post-book') @yield('cart')
                <form type="hidden" name="" id="post-form" method="POST">
                    {{-- {{ csrf_field() }} --}}
                    <input type="hidden" name="token" value="{{ csrf_token() }}">
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Thong tin chi tiet cua sach</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        @yield('single-book-field')
                                        @yield('post-book-field')

                                    </div>
                                </div>
                                <div style="clear: both;"></div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="post-create">Luu</button>
                                    <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Dong</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
        <div id="sidebar" class="sidebar" role="complementary" style="margin-top: 778px;">
            <aside class="widget widget_text">
                <div class="textwidget">
                    <a href="#">
                        <img src="assets/images/banner/ad-banner-sidebar.jpg" alt="Banner">
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
                                <strong>Free Delivery</strong> from $50
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-customers"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>99% Positive</strong> Feedbacks
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-returning"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>365 days</strong> for free return
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-payment"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>Payment</strong> Secure System
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-tag"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>Only Best</strong> Brands
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="widget widget_electro_products_carousel_widget">
                <section class="section-products-carousel">
                    <header>
                        <h1>Featured Products</h1>
                        <div class="owl-nav">
                            <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2dc4a8" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#products-carousel-next" data-target="#products-carousel-57176fb2dc4a8" class="slider-next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </header>
                    <div id="products-carousel-57176fb2dc4a8">
                        <div class="products owl-carousel  products-carousel-widget columns-1 owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-278px, 0px, 0px); transition: 0.25s; width: 1112px;">
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
                                    <div class="owl-item active" style="width: 278px;">
                                        <div class="product-carousel-alt">
                                            <a href="single-product.html">
                                                <div class="product-thumbnail"><img width="250" height="232" src="assets/images/products/2.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="WirelessSound"></div>
                                            </a>
                                            <span class="loop-product-categories"><a href="single-product.html" rel="tag">Audio Speakers</a></span><a href="single-product.html"><h3>Wireless Audio System Multiroom 360</h3></a>
                                            <span class="price"><span class="electro-price"><ins><span class="amount">$1,999.00</span></ins>
                                            <del><span class="amount">$2,299.00</span></del>
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 278px;">
                                        <div class="product-carousel-alt">
                                            <a href="single-product.html">
                                                <div class="product-thumbnail"><img width="250" height="232" src="assets/images/products/3.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Laptop4"></div>
                                            </a>
                                            <span class="loop-product-categories"><a href="single-product.html" rel="tag">Laptops</a></span><a href="single-product.html"><h3>Notebook Widescreen Y700-17 GF790</h3></a>
                                            <span class="price"><span class="electro-price"><span class="amount">$1,299.00</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 278px;">
                                        <div class="product-carousel-alt">
                                            <a href="single-product.html">
                                                <div class="product-thumbnail"><img width="250" height="232" src="assets/images/products/4.jpg" class="wp-post-image" alt="GamePad">
                                                </div>
                                            </a><span class="loop-product-categories"><a href="single-product.html" rel="tag">Game Consoles</a></span><a href="single-product.html"><h3>Game Console Controller <br>+ USB 3.0 Cable</h3></a>
                                            <span class="price"><span class="electro-price"><ins><span class="amount">$79.00</span></ins>
                                            <del><span class="amount">$99.00</span></del>
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="owl-prev"></div>
                                <div class="owl-next"></div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </section>
            </aside>
            <aside class="widget electro_posts_carousel_widget">
                <section class="section-posts-carousel">
                    <header>
                        <h3 class="widget-title">From the Blog</h3>
                        <div class="owl-nav">
                            <a href="#posts-carousel-prev" data-target="#posts-carousel-57176fb2e4a7f" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#posts-carousel-next" data-target="#posts-carousel-57176fb2e4a7f" class="slider-next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </header>
                    <div id="posts-carousel-57176fb2e4a7f" class="blog-carousel-homev2">
                        <div class="owl-carousel post-carousel blog-carousel-widget owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-834px, 0px, 0px); transition: 0.25s; width: 1112px;">
                                    <div class="owl-item" style="width: 278px;">
                                        <div class="post-item">
                                            <a class="post-thumbnail" href="blog-single.html">
                        <img width="270" height="180" src="assets/images/blog/blog-1.jpg" class="wp-post-image" alt="1"></a>
                                            <div class="post-content">
                                                <span class="post-category"><a href="blog-single.html" rel="category tag">Design</a>, <a href="blog-single.html" rel="category tag">Technology</a></span> -
                                                <span class="post-date">March 4, 2016</span>
                                                <a class="post-name" href="blog-single.html">Robot Wars – Post with Gallery</a>
                                                <span class="comments-link"><a href="blog-single.html#comments">Leave a comment</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 278px;">
                                        <div class="post-item">
                                            <a class="post-thumbnail" href="blog-single.html">
                        <img width="270" height="138" src="assets/images/blog/blog-2.jpg" class="wp-post-image" alt="6">
                    </a>
                                            <div class="post-content">
                                                <span class="post-category"><a href="blog-single.html" rel="category tag">Design</a>, <a href="blog-single.html" rel="category tag">News</a>, <a href="blog-single.html" rel="category tag">Uncategorized</a></span> -
                                                <span class="post-date">March 3, 2016</span>
                                                <a class="post-name" href="blog-single.html">Robot Wars – Now Closed – Post with Audio</a>
                                                <span class="comments-link"><a href="blog-single.html#comments">Leave a comment</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 278px;">
                                        <div class="post-item">
                                            <a class="post-thumbnail" href="blog-single.html">
                        <img width="270" height="152" src="assets/images/blog/blog-3.jpg" class="attachment-electro_blog_carousel size-electro_blog_carousel wp-post-image" alt="video-format">
                    </a>
                                            <div class="post-content">
                                                <span class="post-category"><a href="blog-single.html" rel="category tag">Videos</a></span> -
                                                <span class="post-date">March 3, 2016</span>
                                                <a class="post-name" href="blog-single.html">Robot Wars – Now Closed – Post with Video</a>
                                                <span class="comments-link"><a href="blog-single.html#comments">Leave a comment</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 278px;">
                                        <div class="post-item">
                                            <a class="post-thumbnail" href="blog-single.html">
                                                <div class="electro-img-placeholder"><img src="http://placehold.it/270x180/DDD/DDD/" alt=""><i class="fa fa-paragraph"></i></div>
                                            </a>
                                            <div class="post-content">
                                                <span class="post-category"><a href="blog-single.html" rel="category tag">Events</a>, <a href="blog-single.html" rel="category tag">News</a></span> -
                                                <span class="post-date">March 2, 2016</span>
                                                <a class="post-name" href="blog-single.html">Announcement – Post without Image</a>
                                                <span class="comments-link"><a href="blog-single.html#comments">Leave a comment</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="owl-prev"></div>
                                <div class="owl-next disabled"></div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
    </div>
    <!-- .container -->
</div>
<!-- #content -->

<!-- <script>
(function($) {
    $('.nav-item a').on('click', function(e) {
        e.preventDefault();
        var page = $(this).attr('href');
        $('.tab-content').load(page);
    });
});
</script>
 -->

<script>

</script>
