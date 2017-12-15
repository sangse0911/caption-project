<div class="product" id="single-product">
    <div class="single-product-wrapper">
        <div class="product-images-wrapper">
            <span class="onsale">Cũ</span>
            <div class="images electro-gallery">
                <div class="thumbnails-single owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item active" style="width: 300px;">
                                <a href="#" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                    <img  class="wp-post-image" alt="" id="image-book">
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
                                    {{-- <img src="assets/images/single-product/single-thumb1.jpg" class="wp-post-image" alt=""> --}}
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
            <div class="summary entry-summary">
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
               (<span itemprop="reviewCount" class="count">3</span> Đánh Giá)
             </a>
                </div>
                <!-- .woocommerce-product-rating -->
                <!-- .brand -->
                <div class="availability in-stock">
                    Tác Giả: <span class="book-author"></span>
                </div>
                <!-- .availability -->
                <hr class="single-product-title-divider" />
                <div class="action-buttons">
                    <a href="javascript:void(0)" class="add_to_wishlist">
                        Yêu thích
                    </a>
                </div>
                <!-- .action-buttons -->
                <div itemprop="description">
                    <ul>
                        <li>Miễn phí giao hàng toàn quốc cho đơn hàng từ 200.000 đ</li>
                        <li>Miễn phí giao hàng tại Hà Nội cho đơn hàng từ 100.000 đ</li>
                    </ul>
                </div>
                <!-- .description -->
                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <p class="price"><span class="electro-price"><ins>Giá Bán: <span class="amount" id="book-price"></span></ins>
                        <br>
                        <del>Giá Bìa: <span class="amount">120.000 VNĐ</span></del>
                        </span>
                    </p>
                    <meta itemprop="price" content="1215" />
                    <meta itemprop="priceCurrency" content="USD" />
                    <link itemprop="availability" href="http://schema.org/InStock" />
                </div>
                <!-- /itemprop -->
                <form class="variations_form cart" method="post">
                    <div class="single_variation_wrap">
                        <div class="woocommerce-variation single_variation"></div>
                        <div class="woocommerce-variation-add-to-cart variations_button">
                            <br/>
                            <input type="hidden" name="add-to-cart" value="2452" />
                            <input type="hidden" name="product_id" value="2452" />
                            <input type="hidden" name="variation_id" class="variation_id" value="0" />
                        </div>
                    </div>
                </form>
                <br/>
            </div>
            <!-- .summary -->
        </div>
        <!-- /.single-product-wrapper -->
        <div class="woocommerce-tabs wc-tabs-wrapper">
            <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
                <li class="nav-item description_tab" style="margin-left: 40px;">
                    <a href="#tab-description" class="active" data-toggle="tab">Giới Thiệu Sách</a>
                </li>
                <li class="nav-item specification_tab">
                    <a href="#tab-specification" data-toggle="tab">Thông Tin Chi Tiết</a>
                </li>
                <li class="nav-item reviews_tab">
                    <a href="#tab-reviews" data-toggle="tab">Đánh Giá</a>
                </li>
                <li class="nav-item accessories_tab">
                    <a href="#tab-accessories" data-toggle="tab">Bình Luận</a>
                </li>
            </ul>
            <div class="tab-content" style="margin-left: 40px;">
                <div class="tab-pane panel entry-content wc-tab" id="tab-accessories">
                    <div class="accessories">
                        <div class="electro-wc-message"></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-left">
                                <div class="check-products">
                                    <div class="fb-comments" data-width="800" data-numposts="5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
                    <div class="electro-description" id="book-description">

                    </div>
                </div>
                <div class="tab-pane panel entry-content wc-tab" id="tab-specification">
                    <h3>Thông Tin Chi Tiết</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Tác Giả</td>
                                <td class="book-author"></td>
                            </tr>
                            <tr>
                                <td>Ngày xuất bản</td>
                                <td id="book-year"></td>
                            </tr>
                            <tr>
                                <td>Nhà xuất bản</td>
                                <td id="book-company"></td>
                            </tr>
                            <tr>
                                <td>ISBN/ISSN</td>
                                <td id="book-isbn"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.panel -->
                <div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
                    <div id="reviews" class="electro-advanced-reviews">
                        <div class="advanced-review row">
                            <div class="col-xs-12 col-md-6">
                                <h2 class="based-title">Dựa trên 3 đánh giá</h2>
                                <div class="avg-rating">
                                    <span class="avg-rating-number">4.3</span> overall
                                </div>
                                <div class="rating-histogram">
                                    <div class="rating-bar">
                                        <div class="star-rating" title="Rated 5 out of 5">
                                            <span style="width:100%"></span>
                                        </div>
                                        <div class="rating-percentage-bar">
                                            <span style="width:33%" class="rating-percentage"></span>
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
                                            <h3 id="reply-title" class="comment-reply-title">Thêm đánh giá
                                            <small>
                                                <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                                            </small>
                                        </h3>
                                            <input type="hidden" name="book-rate" id="book-rate" />
                                            <form method="post" id="commentform" class="comment-form">
                                                <p class="comment-form-rating">
                                                    <label>Vote cho sách</label>
                                                </p>
                                                <p class="my-rating-9">
                                                </p>
                                                <p class="live-rating"></p>
                                                <p class="comment-form-comment">
                                                    <p>
                                                        <label for="comment">Đánh giá của bạn</label>
                                                    </p>
                                                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                </p>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" class="submit-rate" value="Thêm đánh gía">
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
        <div id="fb-root"></div>
            <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=251903588593570';
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        </div>
</div>
@push('scripts')
<script>
     $(".my-rating-9").starRating({
        starSize: 20,
        initialRating: 0,
        disableAfterRate: false,
        strokeColor: '#a3d133',
        onHover: function(currentIndex, currentRating, $el){
          $('.live-rating').text(currentIndex);
        },
        onLeave: function(currentIndex, currentRating, $el){
          $('.live-rating').text(currentRating);
        }
    });

    $('.submit-rate').click(function(evt) {

        var bookId = $('#book-rate').val();
        var userId = $('#user-id').val();
        var comment = $('#comment').val();
        var rate = $('.my-rating-9').starRating('getRating');

        $.ajax({

            cache:false,
            method: 'POST',
            url: '/addBookRate',
            data: {
                userId: userId,
                bookId: bookId,
                comment: comment,
                rate: rate,
            },
            dataType: 'JSON',
            success: function(data) {
                alert("Cảm ơn bạn đã đánh gía");
                $('#myModal').modal('hide');
            },
            error: function(data) {
                if(data.status ===401) {
                    alert('Vui lòng đăng nhập trước khi đánh gía sách, xin cảm ơn');
                }
            }
        });
        evt.preventDefault();
    });

</script>
@endpush
