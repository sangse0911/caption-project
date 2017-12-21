<div id="search-field" style="display: none;">
    <header class="page-header" style="margin-top: 150px; text-align: center;">
        <h1 class="page-title">Kết quả tìm kiếm</h1>
    </header>
    <div class="shop-control-bar">
        <ul class="shop-view-switcher nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid" aria-expanded="true"><i class="fa fa-th"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" title="List View" href="#list-view" aria-expanded="false"><i class="fa fa-list"></i></a></li>
        </ul>
    </div>
    <div class="tab-content" id="app">
        <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
            <ul class="products columns-3">
                <li class="product" v-for="product in products">
                    <div class="product-outer" style="height: 391px;">
                        <div class="product-inner">
                            <span class="loop-product-categories"><a href="javascript:void(0)" rel="tag"></a></span>
                            <span class="loop-product-categories" style="color: red;">@{{ product.name }}</span>
                            <a data-toggle="modal" href="#myModal" class="book-show" id="book-@{{ product.id }}">
                                <h3></h3>
                                <div class="product-thumbnail">
                                    <img src="{{ URL::to('assets/images/product/')}}/@{{ product.images[0].path}}" alt="">
                                </div>
                            </a>
                            <div class="price-add-to-cart">
                                <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">@{{ product.price }} VNĐ</span></ins>
                                </span>
                                </span>
                                <a rel="nofollow" href="javascript:void(0)" data-id="@{{ product.id }}" class="button add_to_cart_button">Thêm vào giỏ</a>
                            </div>
                            <!-- /.price-add-to-cart -->
                            <div class="hover-area">
                                <div class="action-buttons">
                                    <a href="javascript:void(0)" data-id="@{{ product.id }}" rel="nofollow" class="add_to_wishlist">
                                    Yêu thích
                                </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.product-inner -->
                    </div>
                    <!-- /.product-outer -->
                </li>
            </ul>
        </div>
        <div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="false">
            <ul class="products columns-3">
                <li class="product list-view" v-for="product in products">
                    <div class="media">
                        <div class="media-left">
                            <a data-toggle="modal" href="#myModal" class="book-show" id="book-@{{ product.id }}">
                                <img class="wp-post-image"
                                src="{{ URL::to('assets/images/product/')}}/@{{ product.images[0].path}}" alt="">
                            </a>
                        </div>
                        <div class="media-body media-middle">
                            <div class="row">
                                <div class="col-xs-12">
                                    <span class="loop-product-categories"><a rel="tag" href="javascript:void(0)"></a></span><a href="javascript:void(0)"><h3>@{{ product.name }}</h3>
                                    <div class="product-rating">
                                        <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                    </div>
                                    <div class="product-short-description">
                                        <ul style="padding-left: 18px;">
                                            <li>Tác gỉa @{{  product.author }}</li>
                                            <li>Gía thuê @{{  product.rentel_fee }} VNĐ</li>
                                            <li>Tái bản @{{ product.republish }}</li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </a>
                                </div>
                                <div class="col-xs-12">
                                    <div class="availability in-stock">
                                        Trạng thái: <span>Sẵn sàng</span>
                                    </div>
                                    <span class="price">
                                    <span class="electro-price"><span class="amount">@{{ product.price }} VNĐ</span></span>
                                    </span>
                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-id="@{{ product.id }}" data-quantity="1" href="javascript:void(0)" rel="nofollow">Thêm vào giỏ</a>
                                    <div class="hover-area">
                                        <div class="action-buttons">
                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist">
                                                <a class="add_to_wishlist" data-product-type="simple" data-id="@{{ product.id }}" rel="nofollow" href="#">Yêu thích</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
