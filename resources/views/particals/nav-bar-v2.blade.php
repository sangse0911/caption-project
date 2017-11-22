<nav class="navbar navbar-primary navbar-full" id="myNavbar">
    <div class="container">
        <ul class="nav navbar-nav departments-menu animate-dropdown">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" data-toggle="dropdown" href="#" aria-expanded="false">Dau sach chung toi co</a>
                <ul class="dropdown-menu yamm departments-menu-dropdown">
                    <li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="#">Value of the Day</a></li>
                    <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>
                    <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color.html">New Arrivals</a></li>
                    @foreach($categories as $category)
                     <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="#">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <form class="navbar-search" method="get" action="http://transvelo.github.io/">
            <label class="sr-only screen-reader-text" for="search">Tim kiem</label>
            <div class="input-group">
                <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s" placeholder="Search for products">
                <div class="input-group-addon search-categories">
                    <select name="product_cat" id="product_cat" class="postform resizeselect" style="width: 143px;">
                        <option value="0" selected="selected">Dau sach</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group-btn">
                    <input type="hidden" id="search-param" name="post_type" value="product">
                    <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                </div>
            </div>
        </form>
        <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
            <li class="nav-item dropdown">
                <a href="cart.html" class="nav-link" data-toggle="dropdown">
            <i class="ec ec-shopping-bag"></i>
            <span class="cart-items-count count">4</span>
            <span class="cart-items-total-price total-price"><span class="amount">$1,215.00</span></span>
        </a>
                <ul class="dropdown-menu dropdown-menu-mini-cart">
                    <li>
                        <div class="widget_shopping_cart_content">
                            <ul class="cart_list product_list_widget ">
                                <li class="mini_cart_item">
                                    <a title="Remove this item" class="remove" href="#">×</a>
                                    <a href="single-product.html">
                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart1.jpg" alt="">White lumia 9001&nbsp;
                            </a>
                                    <span class="quantity">2 × <span class="amount">£150.00</span></span>
                                </li>
                                <li class="mini_cart_item">
                                    <a title="Remove this item" class="remove" href="#">×</a>
                                    <a href="single-product.html">
                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart2.jpg" alt="">PlayStation 4&nbsp;
                            </a>
                                    <span class="quantity">1 × <span class="amount">£399.99</span></span>
                                </li>
                                <li class="mini_cart_item">
                                    <a data-product_sku="" data-product_id="34" title="Remove this item" class="remove" href="#">×</a>
                                    <a href="single-product.html">
                            <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart3.jpg" alt="">POV Action Cam HDR-AS100V&nbsp;

                            </a>
                                    <span class="quantity">1 × <span class="amount">£269.99</span></span>
                                </li>
                            </ul>
                            <!-- end product list -->
                            <p class="total"><strong>Subtotal:</strong> <span class="amount">£969.98</span></p>
                            <p class="buttons">
                                <a class="button wc-forward" href="cart.html">View Cart</a>
                                <a class="button checkout wc-forward" href="checkout.html">Checkout</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-wishlist nav navbar-nav pull-right flip">
            <li class="nav-item">
                <a href="wishlist.html" class="nav-link"><i class="ec ec-favorites"></i></a>
            </li>
        </ul>
        <ul class="navbar-compare nav navbar-nav pull-right flip">
            <li class="nav-item">
                <a href="compare.html" class="nav-link"><i class="ec ec-compare"></i></a>
            </li>
        </ul>
    </div>
</nav>
@section('scripts')
<script>
    $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 200) {
        $('#myNavbar').addClass(' navbar-fixed-top');
    } else {
        $('#myNavbar').removeClass(' navbar-fixed-top');
    }
});
</script>
@endsection
