<nav class="navbar navbar-primary navbar-full hidden-md-down">
    <div class="container">
        <ul class="nav navbar-nav departments-menu animate-dropdown">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle">
	                    Tat ca nhung gi ban can</a>
                <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown" style="">
                    <li id="menu-item-3211" class="highlight menu-item menu-item-type-post_type menu-item-object-page animate-dropdown menu-item-3211"><a title="Value of the Day" href="https://demo2.chethemes.com/electro/home-v2/">Sach hay trong ngay</a></li>
                    <li id="menu-item-3212" class="highlight menu-item menu-item-type-post_type menu-item-object-page animate-dropdown menu-item-3212"><a title="Top 100 Offers" href="https://demo2.chethemes.com/electro/home-v3/">Top sach duoc yeu thich</a></li>
                    <li id="menu-item-3213" class="highlight menu-item menu-item-type-post_type menu-item-object-page animate-dropdown menu-item-3213"><a title="New Arrivals" href="https://demo2.chethemes.com/electro/home-v3-full-color-background/">Moi duoc nhap ve</a></li>
                    @foreach($categories as $category)
                    <li id="menu-item-3071" class="yamm-tfw menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children animate-dropdown menu-item-3071 dropdown-submenu"><a title="Computers &amp; Accessories" href="https://demo2.chethemes.com/electro/product-category/laptops-computers/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">{{ $category->name }}</a>
                        <ul role="menu" class=" dropdown-menu" style="min-height: 747.004px;">
                            <li id="menu-item-3218" class="menu-item menu-item-type-post_type menu-item-object-static_block animate-dropdown menu-item-3218" style="min-height: 743.004px;">
                                <div class="yamm-content">
                                    <div class="vc_row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="https://demo2.chethemes.com/electro/wp-content/uploads/2016/03/megamenu-2.png" class="vc_single_image-img attachment-full" alt="" srcset="https://demo2.chethemes.com/electro/wp-content/uploads/2016/03/megamenu-2.png 540w, https://demo2.chethemes.com/electro/wp-content/uploads/2016/03/megamenu-2-300x256.png 300w" sizes="(max-width: 540px) 100vw, 540px"></div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <ul>
                                                                <li class="nav-title">Computers &amp; Accessories</li>
                                                                <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                <li><a href="#">Printers &amp; Ink</a></li>
                                                                <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                <li><a href="#">Computer Accessories</a></li>
                                                                <li><a href="#">Software</a></li>
                                                                <li class="nav-divider"></li>
                                                                <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <ul>
                                                                <li class="nav-title">Office &amp; Stationery</li>
                                                                <li><a href="#">All Office &amp; Stationery</a></li>
                                                                <li><a href="#">Pens &amp; Writing</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <form class="navbar-search" method="get" action="https://demo2.chethemes.com/electro/">
            <label class="sr-only screen-reader-text" for="search">Search for:</label>
            <div class="input-group">
                <div class="input-search-field">
                    <span class="twitter-typeahead" style="position: relative; display: table-cell;"><input type="text" id="search" class="form-control search-field product-search-field tt-input" dir="ltr" value="" name="s" placeholder="Search for Products" autocomplete="off" spellcheck="false" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Open Sans&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif; font-size: 14.994px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizeLegibility; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-search"></div></div></span>
                </div>
                <div class="input-group-addon search-categories">
                    <select name="product_cat" id="product_cat" class="postform resizeselect" style="width: 143px;">
                        <option value="0" selected="selected">All Categories</option>
                        @foreach($categories as $catrgory)
                        <option class="level-0" value="{{ $category->id }}">{{ $category->name }}</option>
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
                <a href="https://demo2.chethemes.com/electro/cart/" class="nav-link" data-toggle="dropdown">
	            <i class="ec ec-shopping-bag"></i>
	            <span class="cart-items-count count">1</span>
	            <span class="cart-items-total-price total-price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,999.00</span></span>
	        </a>
                <ul class="dropdown-menu dropdown-menu-mini-cart">
                    <li>
                        <div class="widget_shopping_cart_content">
                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="https://demo2.chethemes.com/electro/cart/?remove_item=058d6f2fbe951a5a56d96b1f1a6bca1c&amp;_wpnonce=c63de743d6" class="remove" aria-label="Remove this item" data-product_id="2717" data-product_sku="5487FB8/41">×</a> <a href="https://demo2.chethemes.com/electro/product/tablet-red-elitebook-revolve-810-g2/">
	                                <img width="180" height="180" src="//demo2.chethemes.com/electro/wp-content/uploads/2016/03/Ultrabooks-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//demo2.chethemes.com/electro/wp-content/uploads/2016/03/Ultrabooks-180x180.jpg 180w, //demo2.chethemes.com/electro/wp-content/uploads/2016/03/Ultrabooks-150x150.jpg 150w, //demo2.chethemes.com/electro/wp-content/uploads/2016/03/Ultrabooks-300x300.jpg 300w, //demo2.chethemes.com/electro/wp-content/uploads/2016/03/Ultrabooks-600x600.jpg 600w" sizes="(max-width: 180px) 100vw, 180px">Tablet Red EliteBook  Revolve 810 G2&nbsp;                           </a>
                                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,999.00</span>
                                    </span>
                                </li>
                            </ul>
                            <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,999.00</span>
                            </p>
                            <p class="woocommerce-mini-cart__buttons buttons"><a href="https://demo2.chethemes.com/electro/cart/" class="button wc-forward">View cart</a><a href="https://demo2.chethemes.com/electro/checkout/" class="button checkout wc-forward">Checkout</a></p>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-wishlist nav navbar-nav pull-right flip">
            <li class="nav-item">
                <a href="#" class="nav-link">
	                        <i class="ec ec-favorites"></i>
	                                            </a>
            </li>
        </ul>
        <ul class="navbar-compare nav navbar-nav pull-right flip">
            <li class="nav-item">
                <a href="https://demo2.chethemes.com/electro/compare/" class="nav-link">
	                        <i class="ec ec-compare"></i>
	                                            </a>
            </li>
        </ul>
    </div>
</nav>
