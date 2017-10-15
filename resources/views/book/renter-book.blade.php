<div class="tab-pane active" id="tab-products-1" role="tabpanel">
    <div class="woocommerce columns-3">
        <ul class="products columns-3">
            <li class="product first">
                <div class="product-outer">
                    <div class="product-inner">
                        <form type="hidden">
                            {{ csrf_field() }}
                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
                            <a href="#">
                                <h3>Wireless Audio System Multiroom 360</h3>
                                <div class="product-thumbnail">
                                    <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/1.jpg" class="img-responsive" alt="">
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
                                    <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                    <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <script>
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(document).ready(function() {

                    $(document).on('click', '.add_to_cart_button', function(e) {
                        e.preventDefault();
                        $.ajax({
                            url: "{{ url('cart/add') }}",
                            data: {
                                'id': 1,
                            },
                            type: "POST",
                            dataType: "JSON",
                            success: function(data) {
                                console.log(data);
                                // $("#cart-item").html(data);
                                // if (action != "") {
                                //     switch (action) {
                                //         case "add":
                                //             $("#add_" + product_code).hide();
                                //             $("#added_" + product_code).show();
                                //             break;
                                //         case "remove":
                                //             $("#add_" + product_code).show();
                                //             $("#added_" + product_code).hide();
                                //             break;
                                //         case "empty":
                                //             $(".btnAddAction").show();
                                //             $(".btnAdded").hide();
                                //             break;
                                //     }
                                // }
                            },
                            error: function(error) {
                                // alert(error);
                            }
                        });

                    });

                });
                </script>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product ">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                        <a href="#">
                            <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/2.jpg" class="img-responsive" alt="">
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
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product ">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                        <a href="#">
                            <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/2.jpg" class="img-responsive" alt="">
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
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product ">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                        <a href="#">
                            <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/2.jpg" class="img-responsive" alt="">
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
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product last">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                        <a href="#">
                            <h3>White Solo 2 Wireless</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/3.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                                                        <span class="electro-price">
                                                                            <ins><span class="amount"> </span></ins>
                            <span class="amount"> $1,999.00</span>
                            </span>
                            </span>
                            <a rel="nofollow" href="{{ route('cart.add') }}" class="button add_to_cart_button">Add to cart</a>
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product first">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                        <a href="#">
                            <h3>Smartphone 6S 32GB LTE</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/4.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                                                        <span class="electro-price">
                                                                            <ins><span class="amount"> $1,215.00</span></ins>
                            <del><span class="amount">$2,215.00</span></del>
                            <span class="amount"> </span>
                            </span>
                            </span>
                            <a rel="nofollow" href="{{ route('cart.add') }}" class="button add_to_cart_button">Add to cart</a>
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product ">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Cameras</a></span>
                        <a href="#">
                            <h3>Purple NX Mini F1 aparat  SMART NX</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/5.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                                                        <span class="electro-price">
                                                                            <ins><span class="amount"> </span></ins>
                            <span class="amount"> $1,999.00</span>
                            </span>
                            </span>
                            <a rel="nofollow" href="{{ route('cart.add') }}" class="button add_to_cart_button">Add to cart</a>
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product ">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                        <a href="#">
                            <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/2.jpg" class="img-responsive" alt="">
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
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product ">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                        <a href="#">
                            <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/2.jpg" class="img-responsive" alt="">
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
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
            <li class="product last">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Printers</a></span>
                        <a href="#">
                            <h3>Full Color LaserJet Pro  M452dn</h3>
                            <div class="product-thumbnail">
                                <img src="{{ asset('assets/images/blank.gif') }}" data-echo="assets/images/products/6.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                                                        <span class="electro-price">
                                                                            <ins><span class="amount"> </span></ins>
                            <span class="amount"> $1,999.00</span>
                            </span>
                            </span>
                            <a rel="nofollow" href="{{ route('cart.add') }}" class="button add_to_cart_button">Add to cart</a>
                        </div>
                        <!-- /.price-add-to-cart -->
                        <div class="hover-area">
                            <div class="action-buttons">
                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.product-inner -->
                </div>
                <!-- /.product-outer -->
            </li>
            <!-- /.products -->
        </ul>
    </div>
</div>
