<header id="masthead" class="site-header header-v3 header-v2">
    <div class="container">
        <div class="row">
            <!-- ============================================================= Header Logo ============================================================= -->
            <div class="header-logo" >
                        <a href="#" class="header-logo-link">
                            <img src="{{ URL::to('img/logopage.jpg') }}" style="height: 70px;width: 70px; margin-left: 80px;">
                            <span style="font-weight: bold;font-size: 25px;color: #0CC3D3;margin-top:30px;">BookServiceOnline</span>
                        </a>
                    </div>
            <!-- ============================================================= Header Logo : End============================================================= -->
            <form class="navbar-search" method="get" action="http://transvelo.github.io/">
                <label class="sr-only screen-reader-text" for="search">Search for:</label>
                <div class="input-group">
                    <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s" placeholder="Tìm kiếm sách">
                    <div class="input-group-addon search-categories">
                        <select name="product_cat" id="product_cat" class="postform resizeselect" style="width: 141px;">
                            <option value="0" selected="selected">Thể loại sách</option>
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
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">
                        <i class="ec ec-shopping-bag"></i>
                        <span class="cart-items-count count">{{ Cart::count() }}</span>
                        <span class="cart-items-total-price total-price"><span class="amount">{{ Cart::subtotal() }}</span></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-mini-cart">
                        <li>
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget">
                                    @forelse (Cart::content() as $element)
                                        <li class="mini_cart_item">
                                            <a title="Remove this item" class="remove" href="javascript:void(0)"
                                                data-id="{{ $element->rowId}}">×</a>
                                            <a href="#">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="{{ URL::to('assets/images/product/' . $element->options->image) }}" alt="">{{ $element->name }}
                                            </a>
                                            <span class="quantity"><span class="amount">{{ $element->price }}</span></span>
                                        </li>
                                    @empty
                                    @endforelse

                                </ul>
                                <!-- end product list -->
                                <p class="total"><strong>Subtotal:</strong> <span class="amount">£969.98</span></p>
                                <p class="buttons">
                                    <a class="button wc-forward" {{-- href="/cart" --}} href="{{ route('cart.index') }}">Giỏ hàng</a>
                                    <a class="button checkout wc-forward" href="#">Xóa</a>
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
        </div>
        <!-- /.row -->
    </div>
</header>
