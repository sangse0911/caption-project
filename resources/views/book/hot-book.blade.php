<div class="tab-pane active" id="tab-products-1" role="tabpanel">
    <div class="woocommerce columns-3">
        <ul class="products columns-3">
            @foreach($books as $book)
                @foreach($book->images as $image)
            <li class="product">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                        <a href="#">
                            <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/product'. '/'. $image->path) }}" data-echo="{{ URL::to('assets/images/product'. '/'. $image->path) }}" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                                                        <span class="electro-price">
                                                                            <ins><span class="amount"> $1,999.00</span></ins>
                            <del><span class="amount">$2,299.00</span></del>
                            <span class="amount"> </span>
                            </span>
                            </span>
                            <a rel="nofollow" href="{{ route('cart.add') }}" class="button add_to_cart_button">Add to cart</a>
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <form method="POST">
                                   {{ csrf_field() }}
                                    @if( Auth::guest())

                                    @else
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="hiddenfieldclass">
                                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                                    @endif
                                        <div class = 'msg'>This message.</div>
                                        <button class="btn-link" id="wishlist-{{ $book->id }}" type="button"> Wishlist</button>
                                </form>
                                {{-- <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a> --}}
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
                @endforeach
            @endforeach
        </ul>
    </div>
</div>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        $('.btn-link').on('click', function(e){

            var bookId = e.currentTarget.id.substring(9);
            var userId = $('input.hiddenfieldclass').val();

            $.ajax({

                type:'POST',
                url:'/addToPostWish',
                contentType: "application/json; charset=utf-8",
                dataType: 'JSON',
                data:{
                    userId : userId,
                    bookId : bookId,
                },
                success:function(data){
                    console.log(data);
                }
            });
        });
    });

</script>
