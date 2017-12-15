@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') {{-- @section('carousel') @include('particals.carousel') @endsection --}} @section('categories')
<div style="margin-top: 50px;"></div>
@include('particals.categories')

<header class="page-header">
    <h1 class="page-title">{{ $category->name }}</h1>
    <p class="woocommerce-result-count">Xem 1–15 </p>
</header>
<div class="shop-control-bar">
    <ul class="shop-view-switcher nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid" aria-expanded="true"><i class="fa fa-th"></i></a></li>

        <li class="nav-item"><a class="nav-link" data-toggle="tab" title="List View" href="#list-view" aria-expanded="false"><i class="fa fa-list"></i></a></li>

    </ul>

</div>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
        <ul class="products columns-3">
        	@foreach($books as $book)
        	{{-- {{ dd($book) }} --}}
        	{{-- @foreach($book->images as $image) --}}
            <li class="product">
                <div class="product-outer" style="height: 391px;">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="javascript:void(0)" rel="tag">Smartphones</a></span>
                        <a href="#myModal" class="book-show" data-toggle="modal" id="book-{{ $book->id }}">
                            <h3></h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/product/' . $book->images[0]->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                            <del><span class="amount">$2,299.00</span></del>
                            </span>
                            </span>
                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <a href="#" rel="nofollow" class="add_to_wishlist">
                                        Wishlist</a>
                                <a href="#" class="add-to-compare-link">Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
			@endforeach
        </ul>
    </div>

    <div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="false">
        <ul class="products columns-3">
        	@foreach($books as $book)
            <li class="product list-view">
                <div class="media">
                    <div class="media-left">
                        <a href="#myModal" class="book-show" data-toggle="modal" id="book-{{ $book->id }}">
							<img class="wp-post-image" src="{{ URL::to('assets/images/product/' . $book->images[0]->path) }}" alt="">
						</a>
                    </div>
                    <div class="media-body media-middle">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="#"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
									<div class="product-rating">
										<div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
									</div>
									<div class="product-short-description">
										<ul style="padding-left: 18px;">
											<li>4.5 inch HD Screen</li>
											<li>Android 4.4 KitKat OS</li>
											<li>1.4 GHz Quad Core™ Processor</li>
											<li>20 MP front Camera</li>
										</ul>
									</div>
								</a>
                            </div>
                            <div class="col-xs-12">
                                <div class="availability in-stock">
                                    Availablity: <span>In stock</span>
                                </div>
                                <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span>
                                </span>
                                <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                <div class="hover-area">
                                    <div class="action-buttons">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                            <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>
                                            <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                <span class="feedback">Product added!</span>
                                                <a rel="nofollow" href="#">Wishlist</a>
                                            </div>
                                            <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a rel="nofollow" href="#">Wishlist</a>
                                            </div>
                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                        </div>
                                        <div class="clear"></div>
                                        <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
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
