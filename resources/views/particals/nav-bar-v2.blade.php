<nav class="navbar navbar-primary navbar-full yamm">
    <div class="container">
        <div class="clearfix">
            <button class="navbar-toggler hidden-sm-up pull-right flip" type="button" data-toggle="collapse" data-target="#header-v3">
                ☰
            </button>
        </div>
        <div class="collapse navbar-toggleable-xs" id="header-v3">
            <ul class="nav navbar-nav" style="display: inline-flex; align-items: center;">
                <li class="menu-item" style="display: inline-table;"><a title="Góc bán sách" href="{{ route('book.create.sale') }}">Bán sách</a></li>
                <li class="menu-item" style="display: inline-table;"><a title="Góc đăng bài" href="{{ route('post.create') }}">Đăng bài</a></li>
                <li class="menu-item" style="display: inline-table;"><a title="Quảng cáo sách" href="#">Liên hệ quảng cáo</a></li>
                <li id="search-form" class="menu-item" style="display: none;">
                    <form class="navbar-search" method="get" action="#" style="width: 100%;">
                        <label class="sr-only screen-reader-text" for="search">Tìm kiếm</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s" placeholder="Tìm kiếm sách" style="max-height: 50px;">
                            <div class="input-group-addon search-categories">
                                <select name="product_cat" id="product_cat" class="postform resizeselect" style="width: 141px;">
                                    <option value="0" selected="selected">Thể loại sách</option>
                                    @foreach($categories as $category)
                                    <option class="" value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group-btn">
                                <input type="hidden" id="search-param" name="post_type" value="product">
                                <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                            </div>
                        </div>
                    </form>
                </li>

                <!-- <li class="menu-item" style="display: inline-table;"><a title="Computers" href="product-category.html">Computers</a></li> -->
                <ul class="navbar-wishlist nav navbar-nav pull-right flip" style="margin-left: 2.714em;">
                    <li id="fv-2" class="nav-item menu-item" style="display: none;">
                        <a href="wishlist.html" class="nav-link"><i class="ec ec-favorites"></i></a>
                    </li>
                </ul>
                <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                    <li id="cart-2" class="nav-item dropdown" style="display: none;">
                        <a href="cart.html" class="nav-link" data-toggle="dropdown" aria-expanded="false">
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
                                        <a class="button wc-forward" href="{{ route('cart.index') }}">Giỏ hàng</a>
                                        <a class="button checkout wc-forward" href="#">Xóa</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
    <!-- /.-container -->
</nav>
