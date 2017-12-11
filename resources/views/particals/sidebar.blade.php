<div id="sidebar" class="sidebar" role="complementary" style="margin-top: 550px;">
    <aside id="electro_product_categories_widget-2" class="widget woocommerce widget_product_categories electro_widget_product_categories">
        <ul class="product-categories category-single">
            <li class="product_cat">
                <ul>
                    <li class="cat-item cat-item-172 current-cat-parent current-cat-ancestor">
                        <a href="product-category.html"><span class="child-indicator open"><i class="fa fa-angle-up"></i></span>Danh sách thể loại sách</a>
                        <span class="count">()</span>
                        <ul class="children" style="display: block;">
                           @foreach($categories as $category)
                            <li class="cat-item cat-item-228">
                                <a href="javascript:void(0)" class="category-show" data-id="{{ $category->id }}"><span class="no-child"></span>{{ $category->name }}</a>
                                <span class="count">()</span>
                            </li>
                           @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- .product_cat -->
        </ul>
        <!-- .product-categories -->
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
  {{--   <aside class="widget widget_electro_products_carousel_widget">
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
    </aside> --}}
</div>
@section('script')
    <script>
        $('.category-show').on('click', function(e){

        var id = $(this).data('id');
        window.location.href = "/category/" + id;

    });
    </script>
@endsection
