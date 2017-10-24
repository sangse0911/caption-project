<div class="tab-pane active" id="tab-products-1" role="tabpanel">
    <div class="woocommerce columns-3">
        <ul class="products columns-3">
            @foreach($posts as $post)

                @foreach($post->imagePosts as $image)
            <li class="product">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                        <a href="#">
                            <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/post'. '/'. $image->path) }}" data-echo="{{ URL::to('assets/images/post'. '/'. $image->path) }}" class="img-responsive" alt="">
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
                                <form method="POST" action="{{ route('add.post') }}" id="addPost">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <button  type="submit" class="btn-link" id="add-to-wishlist"> Wishlist</button>
                                </form>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
                @endforeach
            @endforeach
        </ul>
    </div>
</div>

@section('scripts')
<script>
    $(document).ready(function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault();

        $('#add-to-wishlist').click(function(){
            var form = $('#addPost');
            var action = $(this).attr('action');

            form.submit(function(e){
                e.preventDefault();
                var data = form.serialize();
                $.ajax({
                    method: 'POST',
                    url: action,
                    data: data,
                    dataType: 'JSON',
                    cache: false,
                    success: function(data){
                        console.log(data);
                    },
                    error: function(data){
                        console.log('Error:', data);
                    }
                });
            });
        });

    });
</script>

@endsection()
