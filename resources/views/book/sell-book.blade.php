@extends('layouts.master') @section('title') @endsection()
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
@section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') {{-- @section('carousel') @include('particals.carousel') @endsection --}} @section('search')
    @include('particals.search')
  @endsection @section('categories')

<div style="margin-top: 50px;"></div>
@include('particals.categories')

<header class="page-header">
    <h1 class="page-title">Sách bán</h1>
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
            @foreach($book->images as $image)
            {{-- @foreach($book->contracts as $contract) --}}
            {{-- {{ dd($contract) }} --}}
            <li class="product">
                <div class="product-outer" style="height: 391px;">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="javascript:void(0)" rel="tag">Sách bán</a></span>
                        <span class="loop-product-categories" style="color: red;">{{ $book->name }}</span>
                        <a href="javascript:void(0)">
                            <h3></h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/product/' . $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">{{ $book->price }} VND</span></ins>
                            {{-- <del><span class="amount">$2,299.00</span></del> --}}
                            </span>
                            </span>
                            <a rel="nofollow" data-id="{{ $book->id }}" href="javascript:void(0)" class="button add_to_cart_button">Add to cart</a>
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <a href="javascript:void(0)" data-id="{{ $book->id }}" rel="nofollow" class="add_to_wishlist">
                                    Yêu thích
                                </a>
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

    <div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="false">
        <ul class="products columns-3">
            @foreach($books as $book)
            @foreach($book->images as $image)
            <li class="product list-view">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:void(0)">
                            <img class="wp-post-image" src="{{ URL::to('assets/images/product/' . $image->path) }}" alt="">
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="loop-product-categories"><a rel="tag" href="javascript:void(0)">Sách bán</a></span><a href="single-product.html"><h3>{{ $book->name }}</h3>
                                    <div class="product-rating">
                                        <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                    </div>
                                    <div class="product-short-description">
                                        <ul style="padding-left: 18px;">
                                            <li>Tác gỉa :{{ $book->author }}</li>
                                            <li>Gía thuê:{{ $book->rental_fee }}</li>
                                            <li>Tái bản: {{ $book->republish }}</li>
                                            {{-- <li>20 MP front Camera</li> --}}
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <div class="availability in-stock">
                                    Trạng thái: <span>Sẵn sàng</span>
                                </div>
                                <span class="price"><span class="electro-price"><span class="amount">{{ $book->price }}</span></span>
                                </span>
                                <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-id="{{ $book->id }}" data-quantity="1" href="javascript:void(0)" rel="nofollow">Thêm vào giỏ</a>
                                <div class="hover-area">
                                    <div class="action-buttons">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist">
                                            <a class="add_to_wishlist" data-product-type="simple" data-id="{{ $book->id }}" rel="nofollow" href="javascript:void(0)">Yêu thích</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach @endforeach
        </ul>
    </div>
</div>

{!! $books->links() !!}

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

    $('.book-show').click(function(e) {
        $('.modal-title').text('Thông tin chi tiết');
        $('.post').css("display","none");
        $('#single-product').removeAttr("style");
        $('.action-buttons').removeAttr("style");
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#post-show').click(function(e) {
        var id = $(this).data('id');
        window.location.href = "/postByUser/" + id;
    });
</script>
<script>
    $('.book-show').on('click', function(e) {
        var book_id = e.currentTarget.id.substring(5);
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/book/' + book_id,
            success: function(data) {
                // $('.electro-nav-tabs').val('');
                $('#book-rate').val(data['book']['id']);
                $('#book-name').text(data['book']['name']);
                $('#book-status').text(data['book']['status']);
                $('#book-company').text(data['book']['company']);
                $('#book-year').text(data['book']['year']);
                $('#book-republish').text(data['book']['republish']);
                $('.book-author').text(data['book']['author']);
                $('#book-price').text('Gía: ' + data['book']['price'] + ' VND');
                $('#book-introduce').text(data['book']['introduce']);
                $('#book-description').text(data['book']['description']);
                $('#image-book').attr('src','{{ URL::to('assets/images/product/') }}' + '/' + data['images'][0]['path']);
                $('.fb-comments').attr('data-href',"http://localhost:8000/book/"+ book_id );
                $('.modal-footer').css('display','none');
                $('#book-isbn').text(data['book']['isbn']);
                $('.add_to_wishlist').attr('id','book-'+ book_id);
            },
            error: function(data) {
            }
        });
        e.preventDefault();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.add_to_cart_button').click(function(e) {
        e.preventDefault();

        var id = $(this).data('id');

        $.ajax({

            cache: false,
            method: 'POST',
            url: '/cart/add',
            data: {
                id: id,
            },
            dataType: 'JSON',
            success: function(data) {
                alert('Bạn đã thêm thành công sản phẩm vào giỏ hàng');
                var count = parseInt($('.cart-items-count')[0].innerHTML);
                count += 1;
                $('.cart-items-count').each(function(e) {
                    $(this).text(count);
                });
            },
            error: function(data) {
                console.log("có lỗi với", data);
            }
        });
    });
    $('.add_to_wishlist').click(function(e) {
        var bookId = e.currentTarget.id.substring(5);
        var userId = $('#user-id').val();

        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: '/addBookWishlist',
            data: {
                bookId: bookId,
                userId: userId
            },
            success: function(data) {
                alert("Bạn đã thêm thành công vào danh sách yêu thích");
            },
            error: function(data) {
                if(data.status === 401) {
                    alert('Vui lòng đăng nhập trưóc khi thêm sách vào yêu thích');
                }
                if(data.status === 500) {
                    alert('Sách đã có trong danh sách yêu thích của bạn');
                }
            }
        });
        e.preventDefault();
    });
</script>
@endpush
