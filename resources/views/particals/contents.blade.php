<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                @yield('part-content') @yield('carousel') @yield('categories') @yield('first') @yield('recently') @yield('best-sell') @yield('event')
                <form type="hidden" name="" id="" method="POST">
                    {{ csrf_field() }}
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
                                        <div class="product">
                                            <div class="single-product-wrapper">
                                                <div class="product-images-wrapper">
                                                    <span class="onsale">Sale!</span>
                                                    <div class="images electro-gallery">
                                                        <div class="thumbnails-single owl-carousel owl-loaded owl-drag">
                                                            <div class="owl-stage-outer">
                                                                <div class="owl-stage">
                                                                    <div class="owl-item active" style="width: 470px;">
                                                                        <a href="#" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                                                            <img src="" class="wp-post-image" alt="">
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
                                                                        <a href="assets/images/single-product/single-thumb1.jpg" class="first" title="">
                                                                            <img src="assets/images/single-product/single-thumb1.jpg" class="wp-post-image" alt="">
                                                                        </a>
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
                                                    <span class="loop-product-categories">
                                                        <a href="#" rel="tag">Headphones</a>
                                                    </span>
                                                    <!-- /.loop-product-categories -->
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
                                                            (<span itemprop="reviewCount" class="count">3</span> customer reviews)
                                                        </a>
                                                    </div>
                                                    <!-- .woocommerce-product-rating -->
                                                    <div class="availability in-stock">
                                                        Trang thai: <span id="book-status"></span>
                                                    </div>
                                                    <!-- .availability -->
                                                    <hr class="single-product-title-divider">
                                                    <div class="action-buttons">
                                                        <a href="#" class="add_to_wishlist">Wishlist</a>
                                                    </div>
                                                    <!-- .action-buttons -->
                                                    <div itemprop="description">
                                                        <ul>
                                                            <li id="book-author"></li>
                                                            <li id="book-company"></li>
                                                            <li id="book-year"></li>
                                                            <li id="book-republish"></li>
                                                        </ul>
                                                    </div>
                                                    <!-- .description -->
                                                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                        <p class="price"><span class="electro-price">
                                                            <ins><span class="amount" id="book-price"></span></ins>
                                                        </p>
                                                        <meta itemprop="price" content="1215">
                                                        <meta itemprop="priceCurrency" content="VND">
                                                        <link itemprop="availability" href="http://schema.org/InStock">
                                                    </div>
                                                    <!-- /itemprop -->
                                                    <form class="variations_form cart" method="post">
                                                        <div class="single_variation_wrap">
                                                            <div class="woocommerce-variation single_variation"></div>
                                                            <div class="woocommerce-variation-add-to-cart variations_button">
                                                                <button type="submit" class="single_add_to_cart_button button">Them vao gio</button>
                                                                <input type="hidden" name="add-to-cart" value="2452">
                                                                <input type="hidden" name="product_id" value="2452">
                                                                <input type="hidden" name="variation_id" class="variation_id" value="0">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- .summary -->
                                            </div>

                                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                                <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
                                                    <li class="nav-item description_tab">
                                                        <a href="#tab-description" class="active" data-toggle="tab">Mo ta ve sach</a>
                                                    </li>
                                                    <li class="nav-item reviews_tab">
                                                        <a href="#tab-reviews" data-toggle="tab">Danh gia cua doc gia</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
                                                        <div class="electro-description">
                                                            <h3 id="book-introduce"></h3>
                                                            <p id="book-description"></p>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
                                                        <div id="reviews" class="electro-advanced-reviews">
                                                            <div class="advanced-review row">
                                                                <div class="col-xs-12 col-md-6">
                                                                    <h2 class="based-title">Based on 3 reviews</h2>
                                                                    <div class="avg-rating">
                                                                        <span class="avg-rating-number">4.3</span> overall
                                                                    </div>
                                                                    <div class="rating-histogram">
                                                                        <div class="rating-bar">
                                                                            <div class="star-rating" title="Rated 5 out of 5">
                                                                                <span style="width:100%"></span>
                                                                            </div>
                                                                            <div class="rating-percentage-bar">
                                                                                <span style="width:33%" class="rating-percentage">

                                                                                </span>
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
                                                                                <h3 id="reply-title" class="comment-reply-title">Them danh gia
                                                                                    <small>
                                                                                        <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                                                                                    </small>
                                                                                </h3>
                                                                                <form action="#" method="post" id="commentform" class="comment-form">
                                                                                    <p class="comment-form-rating">
                                                                                        <label>Vote cua ban</label>
                                                                                    </p>
                                                                                    <p class="stars">
                                                                                        <span><a class="star-1" href="#">1</a>
                                                                                            <a class="star-2" href="#">2</a>
                                                                                            <a class="star-3" href="#">3</a>
                                                                                            <a class="star-4" href="#">4</a>
                                                                                            <a class="star-5" href="#">5</a>
                                                                                        </span>
                                                                                    </p>
                                                                                    <p class="comment-form-comment">
                                                                                        <p><label for="comment">Danh gia cua ban</label></p>
                                                                                        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                                    </p>
                                                                                    <p class="form-submit">
                                                                                        <input name="submit" type="submit" id="submit" class="submit" value="Add Review">
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
                                                                                    <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.
                                                                                    </p>
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
                                        </div>
                                    </div>
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
            <aside class="widget widget_products">
                <h3 class="widget-title">Sach moi cap nhat</h3>
                <ul class="product_list_widget">
                    <li>
                        <a href="single-product.html" title="Notebook Black Spire V Nitro  VN7-591G">
                            <img width="180" height="180" src="assets/images/product-category/1.jpg" alt="" class="wp-post-image"><span class="product-title">Notebook Black Spire V Nitro  VN7-591G</span>
                        </a>
                        <span class="electro-price"><ins><span class="amount">$1,999.00</span></ins>
                        <del><span class="amount">$2,299.00</span></del>
                        </span>
                    </li>
                    <li>
                        <a href="single-product.html" title="Tablet Thin EliteBook  Revolve 810 G6">
                            <img width="180" height="180" src="assets/images/product-category/2.jpg" alt="" class="wp-post-image"><span class="product-title">Tablet Thin EliteBook  Revolve 810 G6</span>
                        </a>
                        <span class="electro-price"><span class="amount">$1,300.00</span></span>
                    </li>
                    <li>
                        <a href="single-product.html" title="Notebook Widescreen Z51-70  40K6013UPB">
                            <img width="180" height="180" src="assets/images/product-category/3.jpg" alt="" class="wp-post-image"><span class="product-title">Notebook Widescreen Z51-70  40K6013UPB</span>
                        </a>
                        <span class="electro-price"><span class="amount">$1,100.00</span></span>
                    </li>
                    <li>
                        <a href="single-product.html" title="Notebook Purple G952VX-T7008T">
                            <img width="180" height="180" src="assets/images/product-category/4.jpg" alt="" class="wp-post-image"><span class="product-title">Notebook Purple G952VX-T7008T</span>
                        </a>
                        <span class="electro-price"><span class="amount">$2,780.00</span></span>
                    </li>
                </ul>
            </aside>
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
