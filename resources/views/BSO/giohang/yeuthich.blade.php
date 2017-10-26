@extends('BSO.master') 
@section('title') BSO | Tủ Sách Tương Lai @endsection
@section('css')
@endsection
@section('content') 
@section('body')<body class="page home page-template-default">@endsection

            <div tabindex="-1" class="site-content" id="content">
    <div class="container">

        <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Sách Yêu Thích</nav>
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <article class="page type-page status-publish hentry">
                    <div itemprop="mainContentOfPage" class="entry-content">
                        <div id="yith-wcwl-messages"></div>
                        <form class="woocommerce" method="post" id="yith-wcwl-form">

                            <input type="hidden" value="68bc4ab99c" name="yith_wcwl_form_nonce" id="yith_wcwl_form_nonce"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">
                            <!-- TITLE -->
                            <div class="wishlist-title ">
                                <h2>Sách Yêu Thích</h2>
                            </div>

                            <!-- WISHLIST TABLE -->
                            <table data-token="" data-id="" data-page="1" data-per-page="5" data-pagination="no" class="shop_table cart wishlist_table">

                                <thead>
                                    <tr>

                                        <th class="product-remove"></th>

                                        <th class="product-thumbnail"></th>

                                        <th class="product-name">
                                            <span class="nobr">Tên Sản Phẩm</span>
                                        </th>

                                        <th class="product-price">
                                            <span class="nobr">Giá</span>
                                        </th>
                                        <th class="product-stock-stauts">
                                            <span class="nobr">Trạng Thái</span>
                                        </th>

                                        <th class="product-add-to-cart"></th>

                                    </tr>
                                </thead>

                                <tbody>
                                     <tr>
                                        <td class="product-remove">
                                            <div>
                                                <a title="Remove this product" class="remove remove_from_wishlist" href="#">×</a>
                                            </div>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="single-product.html">
                                            <img width="180" height="180" alt="1" class="wp-post-image" src="BSO/assets/images/dacnhantam.jpg"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="single-product.html">Đắc Nhân Tâm</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="electro-price"><span class="amount">$248.99</span></span>
                                        </td>

                                        <td class="product-stock-status">
                                            <span class="in-stock">In stock</span>
                                        </td>

                                        <td class="product-add-to-cart">
                                            <!-- Date added -->

                                            <!-- Add to cart button -->
                                            <a href="#" class="button"> Thêm Vào Giỏ Hàng</a>
                                            <!-- Change wishlist -->

                                            <!-- Remove from wishlist -->
                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="product-remove">
                                            <div>
                                                <a title="Remove this product" class="remove remove_from_wishlist" href="#">×</a>
                                            </div>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="single-product.html">
                                            <img width="180" height="180" alt="1" class="wp-post-image" src="BSO/assets/images/dacnhantam.jpg"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="single-product.html">Đắc Nhân Tâm</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="electro-price"><span class="amount">$248.99</span></span>
                                        </td>

                                        <td class="product-stock-status">
                                            <span class="in-stock">In stock</span>
                                        </td>

                                        <td class="product-add-to-cart">
                                            <!-- Date added -->

                                            <!-- Add to cart button -->
                                            <a href="#" class="button"> Thêm Vào Giỏ Hàng</a>
                                            <!-- Change wishlist -->

                                            <!-- Remove from wishlist -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove">
                                            <div>
                                                <a title="Remove this product" class="remove remove_from_wishlist" href="#">×</a>
                                            </div>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="single-product.html">
                                            <img width="180" height="180" alt="1" class="wp-post-image" src="BSO/assets/images/dacnhantam.jpg"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="single-product.html">Đắc Nhân Tâm</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="electro-price"><span class="amount">$248.99</span></span>
                                        </td>

                                        <td class="product-stock-status">
                                            <span class="in-stock">In stock</span>
                                        </td>

                                        <td class="product-add-to-cart">
                                            <!-- Date added -->

                                            <!-- Add to cart button -->
                                            <a href="#" class="button"> Thêm Vào Giỏ Hàng</a>
                                            <!-- Change wishlist -->

                                            <!-- Remove from wishlist -->
                                        </td>
                                    </tr>
                                   
                                   
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="6"></td>
                                    </tr>
                                </tfoot>

                            </table>

                            <input type="hidden" value="85fe311a9d" name="yith_wcwl_edit_wishlist" id="yith_wcwl_edit_wishlist"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">

                        </form>

                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .col-full -->
</div>
@endsection
@section('script')
@endsection