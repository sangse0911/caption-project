@extends('layouts.master') @section('title') Cua hang sach hang dau viet nam @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('part-content')
<div>
    <ul class="products exclude-auto-height products-6">
    	@foreach($books as $book) @foreach($book->images as $image)
        <li class="product">
            <div class="product-outer" style="height: 317px;">
                <div class="product-inner">
                    <span class="loop-product-categories"><a href="#" rel="tag">Smartphones</a></span>
                    <a href="#">
                        <h3>{{ $book->name }}</h3>
                        <div class="product-thumbnail">
                            <img src="{{ URL::to('assets/images/product') .'/'. $image->path}}">
                        </div>
                    </a>
                    <div class="price-add-to-cart">
                        <span class="price">
									<span class="electro-price">
										<ins><span class="amount">$1,999.00</span></ins>
                        <del><span class="amount">$2,299.00</span></del>
                        </span>
                        </span>
                        <a rel="nofollow" href="#" class="button add_to_cart_button">Add to cart</a>
                    </div>
                    <!-- /.price-add-to-cart -->
                    <div class="hover-area">
                        <div class="action-buttons">
                            <a href="#" rel="nofollow" class="add_to_wishlist">
    							Wishlist
                            </a>
                            <a href="#" class="add-to-compare-link">Compare</a>
                        </div>
                    </div>
                </div>
                <!-- /.product-inner -->
            </div>
            <!-- /.product-outer -->
        </li>
        @endforeach @endforeach
    </ul>
</div>
@endsection @section('best-sell')
        @include('particals.best-sell')
    @endsection
    @section('event')
        @include('particals.event')
    @endsection @include('particals.contents') @endsection
