@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') {{-- @section('carousel') @include('particals.carousel') @endsection --}} @section('categories')

<header class="page-header" style="margin-top: 150px; text-align: center;">
    <h1 class="page-title">Kết quả tìm kiếm</h1>
    {{-- <p class="woocommerce-result-count">Xem 1–15 </p> --}}
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
                        <span class="loop-product-categories"><a href="javascript:void(0)" rel="tag">Sách bán</a></span>
                        <span class="loop-product-categories" style="color: red;">@{{ product.name }}</span>
                        <a href="javascript:void(0)">
                            <h3></h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/product/')}}/@{{ product.images[0].path}}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">@{{ product.price }}</span></ins>

                            </span>
                            </span>
                            <a rel="nofollow" href="javascript:void(0)"  data-id="@{{ product.id }}" class="button add_to_cart_button">Add to cart</a>
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
                        <a href="javascript:void(0)">
                            <img class="wp-post-image" src="{{ URL::to('assets/images/product/')}}/@{{ product.images[0].path}}" alt="">
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="loop-product-categories"><a rel="tag" href="javascript:void(0)">Sách bán</a></span><a href="javascript:void(0)"><h3>@{{ product.name }}</h3>
                                    <div class="product-rating">
                                        <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                    </div>
                                    <div class="product-short-description">
                                        <ul style="padding-left: 18px;">
                                            <li>Tác gỉa @{{  product.author }}</li>
                                            <li>Gía @{{  product.rentel_fee }} VNĐ</li>
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
                                    <span class="electro-price"><span class="amount">@{{ product.price }}</span></span>
                                </span>
                                <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-id="@{{ product.id }}" data-quantity="1" href="javascript:void(0)" rel="nofollow">Add to cart</a>
                                <div class="hover-area">
                                    <div class="action-buttons">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist">
                                            <a class="add_to_wishlist" data-product-type="simple" data-id="@{{ product.id }}" rel="nofollow" href="#">Wishlist</a>
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
<div class="shop-control-bar-bottom">
    <form class="form-electro-wc-ppp">
        <select class="electro-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp"><option selected="selected" value="15">Show 15</option><option value="-1">Show All</option></select>
    </form>
    <p class="woocommerce-result-count">Showing 1–15 of 20 results</p>
    <nav class="woocommerce-pagination">
        <ul class="page-numbers">
            <li><span class="page-numbers current">1</span></li>
            <li><a href="#" class="page-numbers">2</a></li>
            <li><a href="#" class="next page-numbers">→</a></li>
        </ul>
    </nav>
</div>
@endsection
@section('sidebar')
@include('particals.sidebar')
@endsection
@include('particals.contents')
@endsection
@section('footer')
@include('particals.footer')
@endsection()

@push('scripts')
<script>
    $('#sidebar').css('margin-top', '150px');
</script>
@endpush
