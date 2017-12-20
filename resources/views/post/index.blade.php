@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') {{-- @section('carousel') @include('particals.carousel') @endsection --}} @section('categories')
@section('css')
<style type="text/css">
.pagination {
    display: inline-block;
    width: 100%;
}

.pagination li {
    list-style: none;
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 0 4px;
}

.pagination li.active {
    background-color: #a3d133;
    color: white;
    border: 1px solid #a3d133;
    border-radius: 5px;
}

.pagination li:hover:not(.active) {background-color: #ddd;}
          </style>
@endsection()
<div style="margin-top: 50px;"></div>
@include('particals.categories')

<img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
<span style="margin-left: 40%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Góc Sách</span>
<div class="hr">
    <hr />
</div>
<br>
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
                          <span class="loop-product-categories"><i class="fa fa-tags" aria-hidden="true"></i>
                                            Cũ
                                        </span>
                        <a href="javascript:void(0)">
                            <h3>{{ $book->name }}</h3>
                            <div class="product-thumbnail">
                                <img style="max-width: 200px;max-height: 220px;margin: auto;" src="{{ URL::to('assets/images/product/' . $book->images[0]->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <span class="amount">{{ $book->price }} VNĐ</span>
                            {{-- <del><span class="amount">$2,299.00</span></del> --}}
                            <br><span style="font-size: 15px;">Người đăng: </span> <span style="font-size: 15px; color: blue;">
                                        {{ $book->contracts[0]->user->name }}
                                    </span>
                                    <span class="amount"> </span>
                            </span>
                            </span>
                            {{-- <a rel="nofollow" href="javascript:void(0)" class="button add_to_cart_button">Add to cart</a> --}}
                        </div>
                        <!-- /.price-add-to-cart -->
                       <div style="text-align: center;">
                            <i class="fa fa-bookmark" aria-hidden="true"></i> <span style="color: red;">
                                @php
                                    switch ($book->contracts[0]->kind) {
                                        case '1':
                                            echo 'Sách cho thuê';
                                            break;
                                        case '0':
                                            echo 'Sách bán';
                                            break;

                                        default:
                                            echo 'Sách cho mượn';
                                            break;
                                    }
                                @endphp
                            </span>
                        </div>
                    </div>
                </div>
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
                        <a href="javascript:void(0)">
                            <img class="wp-post-image" src="{{ URL::to('assets/images/product/' . $book->images[0]->path) }}" alt="">
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="loop-product-categories"><a rel="tag" href="javascript:void(0)">Sách bán</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
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
                                <span class="price"><span class="electro-price"><span class="amount">{{ $book->price }}</span></span>
                                </span>
                                <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-id="{{ $book->id }}" data-quantity="1" href="javascript:void(0)" rel="nofollow">Add to cart</a>
                                <div class="hover-area">
                                    <div class="action-buttons">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist">
                                            <a class="add_to_wishlist" data-product-type="simple" data-id="{{ $book->id }}" rel="nofollow" href="#">Wishlist</a>
                                            <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                {{-- <span class="feedback">Product added!</span> --}}
                                                <a rel="nofollow" href="javascript:void(0)">Wishlist</a>
                                            </div>
                                            <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                {{-- <span class="feedback">The product is already in the wishlist!</span> --}}
                                                <a rel="nofollow" href="javascript:void(0)">Wishlist</a>
                                            </div>
                                            <div style="clear:both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                        </div>
                                        <div class="clear"></div>
                                        {{-- <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a> --}}
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

{{-- {!! $books->links() !!} --}}
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
    $('#sidebar').css('margin-top','150px');
</script>
@endpush
