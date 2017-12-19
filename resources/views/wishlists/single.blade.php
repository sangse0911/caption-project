@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('customer')
<nav class="woocommerce-breadcrumb"><a href="/">Trang Chủ</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Danh sách yêu thích
</nav>
<header class="page-header">
    <h1 class="page-title">Danh sách yêu thích</h1>
    {{-- <p class="woocommerce-result-count">Xem 1–15 </p> --}}
</header>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
        <ul class="products columns-3">
            @foreach($books as $book)
            {{-- {{ dd($book) }} --}}
            {{-- @foreach($book->images as $image) --}}
            <li class="product">
                <div class="product-outer" style="height: 391px;">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="javascript:void(0)" rel="tag"></a></span>
                        <span class="loop-product-categories" style="color: red;">{{ $book->name }}</span>
                        <a href="javascript:void(0)">
                            <h3></h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/product/' . $book->images[0]->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">{{ $book->price }} VND</span></ins>
                            {{-- <del><span class="amount">$2,299.00</span></del> --}}
                            </span>
                            </span>
                            {{-- <a rel="nofollow" href="javascript:void(0)" class="button add_to_cart_button">Add to cart</a> --}}
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <a href="#" rel="nofollow" class="add_to_wishlist">
                                    Yêu thích
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection @section('sidebar')
<div id="sidebar" class="sidebar" role="complementary">
    <div style="clear: both; margin-top: 50px;"></div>

    @yield('recently')

    @section('sidebar')
        @include('particals.sidebar')
    @endsection

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
</div>
@endsection @include('particals.contents')


@endsection @section('footer') @include('particals.footer') @endsection
@push('scripts')
<script>
    $('#sidebar').css('margin-top','150px');
</script>
@endpush
