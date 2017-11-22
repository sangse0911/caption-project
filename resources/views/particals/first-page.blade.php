<section class="home-v2-categories-products-carousel section-products-carousel animate-in-view fadeIn animated animation" data-animation="fadeIn">
    <header>
        <h2 class="h1">Goc sach ban</h2>
        <h2 class="h1">Goc sach mua</h2>
        <h2 class="h1">Goc doc sach</h2>
        <div class="owl-nav">
            <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2c4230" class="slider-prev"><i class="fa fa-angle-left"></i></a>
            <a href="#products-carousel-next" data-target="#products-carousel-57176fb2c4230" class="slider-next"><i class="fa fa-angle-right"></i></a>
        </div>
    </header>
    <div id="products-carousel-57176fb2c4230">
        <div class="woocommerce">
            <div class="products owl-carousel home-v2-categories-products products-carousel columns-6" id="owl-demo">
                @foreach($books as $book) @foreach($book->images as $image) @foreach($book->bookCategories as $category)
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item active" style="width: 215.75px;">
                            <div class="product">
                                <div class="product-outer" style="height: 331px;">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="#" rel="tag">{{ $category->category_id }}</a></span>
                                        <a data-toggle="modal" href="#myModal" class="book-show" id="book-{{ $book->id}}">
                                            <h3>{{ $book->name }}</h3>
                                            <div class="product-thumbnail">
                                                <img src="{{ URL::to('assets/images/product'. '/'. $image->path) }}" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price" style="position: relative;">
                                                    <ins><span class="amount">VND {{ $book->price }}</span></ins>
                                            <del style="position:absolute;left:0;top:-14px;"><span class="amount">$2,299.00</span></del>
                                            <span class="amount"> </span>
                                            </span>
                                            </span>
                                            <a rel="nofollow" href="#" class="button add_to_cart_button">Them vao gio</a>
                                        </div>
                                        <!-- /.price-add-to-cart -->
                                        <div class="hover-area">
                                            <div class="action-buttons">
                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-inner -->
                                </div>
                                <!-- /.product-outer -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item active" style="width: 215.75px;">
                            <div class="product">
                                <div class="product-outer" style="height: 331px;">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="#" rel="tag">Smartphones</a></span>
                                        <a data-toggle="modal" href="#myModal" class="book-show" id="book-{{ $book->id}}">
                                            <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                            <div class="product-thumbnail">
                                                <img src="{{ URL::to('assets/images/product'. '/'. $image->path) }}" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price" style="position: relative;">
                                                    <ins><span class="amount"> $1,999.00</span></ins>
                                            <del style="position:absolute;left:0;top:-14px;"><span class="amount">$2,299.00</span></del>
                                            <span class="amount"> </span>
                                            </span>
                                            </span>
                                            <a rel="nofollow" href="#" class="button add_to_cart_button">Add to cart</a>
                                        </div>

                                        <div class="hover-area">
                                            <div class="action-buttons">
                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                <a href="#" class="add-to-compare-link"> Compare</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> -->
                <!-- </div> -->
                @endforeach @endforeach @endforeach
            </div>
        </div>
    </div>
</section>
@section('scripts')
<script>
$('.book-show').on('click', function(e) {
    var book_id = e.currentTarget.id.substring(5);
    $.ajax({
        cache: false,
        method: 'GET',
        dataType: 'JSON',
        url: '/book/' + book_id,
        success: function(data) {
            console.log(data);
            $('#book-name').text(data['book']['name']);
            $('#book-status').text(data['book']['status']);
            $('#book-company').text(data['book']['publishing_company']);
            $('#book-year').text(data['book']['publishing_year']);
            $('#book-republish').text(data['book']['republish']);
            $('#book-author').text(data['book']['author']);
            $('#book-price').text('Gia: ' + data['book']['price'] + ' VND');
            $('#book-introduce').text(data['book']['introduce']);
            $('#book-description').text(data['book']['description']);
        },
        error: function(data) {
            console.log('ee', data);
        }
    });
    e.preventDefault();
});
</script>
@endsection
