<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                @yield('part-content') @yield('carousel') @yield('categories') @yield('first') @yield('second') @yield('best-sell') @yield('event') @yield('post-book') @yield('cart')
                <form type="hidden" name="" id="post-form" method="POST">
                    {{-- {{ csrf_field() }} --}}
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
                                        @yield('single-book-field')
                                        @yield('post-book-field')

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
                                <strong>Miễn phí vận chuyển</strong> từ $50
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-returning"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>14 ngày</strong> đổi trả
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-payment"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>Thanh toán</strong> qua ngân hàng
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-tag"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>Sách đã bán</strong> đều đảm bảo
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="widget widget_electro_products_carousel_widget">
                <section class="section-products-carousel">
                    <header>
                        <h1>Sách hay</h1>
                        <div class="owl-nav">
                            <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2dc4a8" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#products-carousel-next" data-target="#products-carousel-57176fb2dc4a8" class="slider-next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </header>
                    <div id="products-carousel-57176fb2dc4a8">
                        <div class="products owl-carousel  products-carousel-widget columns-1 owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
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

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>
            <aside class="widget electro_posts_carousel_widget">
                <section class="section-posts-carousel">
                    <header>
                        <h3 class="widget-title">Đánh gía của chuyên gia</h3>
                        <div class="owl-nav">
                            <a href="#posts-carousel-prev" data-target="#posts-carousel-57176fb2e4a7f" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#posts-carousel-next" data-target="#posts-carousel-57176fb2e4a7f" class="slider-next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </header>
                    <div id="posts-carousel-57176fb2e4a7f" class="blog-carousel-homev2">
                        <div class="owl-carousel post-carousel blog-carousel-widget owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item" style="width: 278px;">
                                        <div class="post-item">
                                            <a class="post-thumbnail" href="blog-single.html">
                                                <img width="270" height="180" src="assets/images/blog/blog-1.jpg" class="wp-post-image" alt="1">
                                            </a>
                                            <div class="post-content">
                                                <span class="post-category"><a href="blog-single.html" rel="category tag">Design</a>, <a href="blog-single.html" rel="category tag">Technology</a></span> -
                                                <span class="post-date">March 4, 2016</span>
                                                <a class="post-name" href="blog-single.html">Robot Wars – Post with Gallery</a>
                                                <span class="comments-link"><a href="blog-single.html#comments">Leave a comment</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
    </div>
    <!-- .container -->
</div>
<!-- #content -->

<script>

</script>
