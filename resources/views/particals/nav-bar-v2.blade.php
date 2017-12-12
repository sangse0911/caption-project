<nav class="navbar navbar-primary navbar-full yamm">
    <div class="container">
        <div class="clearfix">
            <button class="navbar-toggler hidden-sm-up pull-right flip" type="button" data-toggle="collapse" data-target="#header-v3">
                ☰
            </button>
        </div>
        <div class="collapse navbar-toggleable-xs" id="header-v3">
            <ul class="nav navbar-nav" style="display: inline-flex; align-items: center;">
                <li class="menu-item" style="display: inline-table;"><a title="Góc bán sách" href="/">Trang chủ</a></li>
                <li class="menu-item dropdown" style="display: inline-table;">
                    <a title="Góc bán sách" href="javascript:void(0)">Thể loại sách</a>
                    <ul class="dropdown-menu">
                        <li>a</li>
                    </ul>
                </li>
                <li class="menu-item" style="display: inline-table;"><a title="Góc bán sách" href="{{ route('book.create.sale') }}">Bán sách</a></li>
                <li class="menu-item" style="display: inline-table;"><a title="Góc đăng bài" href="{{ route('post.create') }}">Đăng bài</a></li>
                <li class="menu-item" style="display: inline-table;"><a title="Quảng cáo sách" href="#">Quảng cáo</a></li>
                <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip" style="position: absolute; right: 0;">
                    <li id="cart-2" class="nav-item dropdown" style="display: none;">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
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
</nav>
