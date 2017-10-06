<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <form type="hidden" method="POST">
    	{{ csrf_field() }}
        <div class="left-block"> <a class="product_img" href="casual-dresses/3-the-art-city.html" title=""> <span class="hover-image"><img class="replace-2x" src="../60-home_default/the-art-city.jpg" alt="The Art City" title="The Art City" height="298" width="268"/></span> <span class="img_root"> <img src="../59-home_default/the-art-city.jpg" height="298" width="268" alt="" /> </span> </a>
            <div class="conditions-box"></div>
            <div class="button-container">
                <div class="cart-button title_font"> <a class="button_cart button ajax_add_to_cart_button btn btn-default caption-add-to-cart" href="{{ route('layouts.newtest.save',['add'=>1,'id_product'=>1,'token'=> csrf_token()]) }}" rel="nofollow" data-id-product="3" data-minimal_quantity="1"> <i class="icon-shopping-cart"></i> <span>Add to cart</span> </a></div>
                <div class="tab_button"> <a class="quick-view" href="casual-dresses/3-the-art-city.html" rel="casual-dresses/3-the-art-city.html"> <i class="icon-eye-open"></i> <span class="wrap_text">Quick view</span> </a> <a class="addToWishlist wishlistProd_3" title="Add to wishlist" href="#" rel="nofollow" onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;"> <i class="icon-heart"></i> <span>Add to wishlist</span> </a> <a class="btn-theme add_to_compare" href="casual-dresses/3-the-art-city.html" data-id-product="3" data-product-cover="http://demo.fieldthemes.com/bookshop/home1/59-small_default/the-art-city.jpg" data-product-name="The Art City"> <i class="icon-plus"></i> <span>Add to compare</span> </a></div>
            </div>
        </div>

    </form>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click','.ajax_add_to_cart_button', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'get',
                    url: $(this).attr('href'),
                    headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        add: 1,
                        id_product: 1,
                        token: '{{ csrf_token() }}',
                    },
                    dataType: 'JSON',
                    async: true,
                    cache: false,
                    success:function(data) {
                        console.log(data);
                    },
                    error:function(err) {
                    	console.log('2');
                    }
                });
                return false;
            });
        });
    </script>
</body>

</html>
