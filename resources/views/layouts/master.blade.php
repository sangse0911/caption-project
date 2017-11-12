<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<!-- Mirrored from transvelo.github.io/electro-html/home-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2017 16:53:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electro &#8211; Electronics Ecommerce Theme</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/animate.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-electro.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/owl-carousel.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/colors/green.css') }}" media="all" />
    <!-- Demo Purpose Only. Should be removed in production -->
</head>

<body class="home-v2">
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div class="top-bar">
            <div class="container">
                <nav>
                    <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome to Worldwide Electronics Store</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li>
                        <li class="menu-item animate-dropdown"><a title="Track Your Order" href="track-your-order.html"><i class="ec ec-transport"></i>Track Your Order</a></li>
                        <li class="menu-item animate-dropdown"><a title="Shop" href="shop.html"><i class="ec ec-shopping-bag"></i>Shop</a></li>
                        <li class="menu-item animate-dropdown"><a title="My Account" href="my-account.html"><i class="ec ec-user"></i>My Account</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /.top-bar -->

        {{-- section header --}} @yield('header') {{-- section header-v2 --}} @yield('header-v2') {{-- section nav-v2 --}} @yield('nav-v2') {{-- section content --}} @yield('content')  @yield('first') {{-- section footer --}} @yield('footer')
        <div class="electro-handheld-footer-bar hidden-lg-up">
            <ul class="columns-5">
                <li class="my-account">
                    <a id="fb-button1" onclick="login();"></a>
                    <a id="mobile-user" class="hidden" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" style="cursor: pointer;" title="your account"></a>
                </li>
                <li class="search"> <a href="javascript:void(0);" id="mobile-search" title="search everythings you need"></a>
                    <div class="site-search">
                        <div class="widget woocommerce widget_product_search">
                            <form role="search" method="get" class="woocommerce-product-search" action="https://demo2.chethemes.com/electro/">
                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products…" value="" name="s">
                                <input type="submit" value="Search">
                                <input type="hidden" name="post_type" value="product">
                            </form>
                        </div>
                    </div>
                </li>
                <li class="cart"> <a class="footer-cart-contents" href="https://demo2.chethemes.com/electro/cart/" title="View your shopping cart"> <span class="cart-items-count count">0</span> </a></li>
                <li class="wishlist"> <a href="https://demo2.chethemes.com/electro/wishlist/" class="has-icon"><i class="ec ec-favorites"></i><span class="count">0</span></a></li>
                <li class="compare"> <a href="https://demo2.chethemes.com/electro/compare/" class="has-icon"><i class="ec ec-compare"></i><span class="count">0</span></a></li>
            </ul>
        </div>
        <ul class="list-user-action" aria-labelledby="dropdownMenu2" style="position: absolute; display: none;">
            <li><a href="#">Nap tien vao tai khoan</a></li>
            <li><a href="#">Lich su giao dich</a></li>
            <li class="last"><a href="#" onclick="logoutFacebook();">Dang xuat</a></li>
        </ul>
        <a id="scrollUp" href="javascript:void(0)" style="position: fixed; z-index: 1001; display: block;"><i class="fa fa-angle-up"></i></a>
        <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/tether.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/echo.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/jquery.easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/jquery.waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/electro.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/style.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/owl.autoplay.js') }}"></script>
        @yield('scripts')
        <script>
        (function($) {
            $('#scrollUp').each(function() {
                $(this).click(function() {
                    $('html,body').animate({ scrollTop: 0 }, 'slow');
                    return false;
                });
            });
        })(jQuery);
        </script>
        <script>
        (function($) {
            $("#button-open").click(function() {
                $(".handheld-navigation-wrapper").addClass(" toggled");
            });
            $("#button-close").click(function() {
                $(".handheld-navigation-wrapper").removeClass(" toggled");
            });
            $(".ehm-close").click(function() {
                $(".handheld-navigation-wrapper").removeClass(" toggled");
            });
            $("#mobile-search").click(function() {
                $(".search").toggleClass(" active");
                $(".list-user-action").removeClass(" show");
            });
            $("#mobile-user").click(function() {
                $(".list-user-action").toggleClass(" show");
            });
        })(jQuery);
        </script>
        <script>
        (function($) {

            var owl = $("#owl-demo");

            var block = false;
            $(".owl-carousel").mouseenter(function() {
                if (!block) {
                    block = true;
                    owl.trigger('stop.owl.autoplay')
                    block = false;
                }
            });
            $(".owl-carousel").mouseleave(function() {
                if (!block) {
                    owl.trigger('play.owl.autoplay', [1000])
                    block = false;
                }
            });

            owl.owlCarousel({
                autoplay: true,
                autoPlaySpeed: 1000,
                autoplayHoverPause: true,
                loop: true,
                navigation: true,
                items: 4, //10 items above 1000px browser width
                itemsDesktop: [1000, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0;
                itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

            });
        })(jQuery);
        </script>
        <script>
        (function($) {

            var owl1 = $("#owl-demo1");

            var block = false;
            $(".owl-carousel").mouseenter(function() {
                if (!block) {
                    block = true;
                    owl1.trigger('stop.owl.autoplay')
                    block = false;
                }
            });
            $(".owl-carousel").mouseleave(function() {
                if (!block) {
                    owl1.trigger('play.owl.autoplay', [1000])
                    block = false;
                }
            });

            owl1.owlCarousel({
                autoplay: true,
                autoPlaySpeed: 1000,
                autoplayHoverPause: true,
                loop: false,
                navigation: true,
                items: 4, //10 items above 1000px browser width
                itemsDesktop: [1000, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0;
                itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

            });
        })(jQuery);
        </script>
        <script>
        (function($) {

            var owl1 = $("#owl-demo1");

            var block = false;
            $(".owl-carousel").mouseenter(function() {
                if (!block) {
                    block = true;
                    owl1.trigger('stop.owl.autoplay')
                    block = false;
                }
            });
            $(".owl-carousel").mouseleave(function() {
                if (!block) {
                    owl1.trigger('play.owl.autoplay', [1000])
                    block = false;
                }
            });

            owl1.owlCarousel({
                autoplay: true,
                autoPlaySpeed: 1000,
                autoplayHoverPause: true,
                loop: true,
                navigation: true,
                items: 3, //10 items above 1000px browser width
                itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0;
                itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

            });
        })(jQuery);
        </script>
        <script>
        (function($) {

            var owl2 = $("#owl-demo2");

            var block = false;
            $(".owl-carousel").mouseenter(function() {
                if (!block) {
                    block = true;
                    owl2.trigger('stop.owl.autoplay')
                    block = false;
                }
            });
            $(".owl-carousel").mouseleave(function() {
                if (!block) {
                    owl2.trigger('play.owl.autoplay', [1000])
                    block = false;
                }
            });

            owl2.owlCarousel({
                autoplay: true,
                autoPlaySpeed: 1000,
                autoplayHoverPause: true,
                loop: true,
                navigation: true,
                items: 2, //10 items above 1000px browser width
                itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0;
                itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

            });
        })(jQuery);
        </script>
        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('.btn-link').on('click', function(e) {

                var bookId = e.currentTarget.id.substring(9);
                var userId = $('input.hiddenfieldclass').val();

                $.ajax({

                    type: 'POST',
                    url: '/addToPostWish',
                    contentType: "application/json; charset=utf-8",
                    dataType: 'JSON',
                    data: {
                        userId: userId,
                        bookId: bookId,
                    },
                    success: function(data) {
                        console.log(data);
                    }
                });
            });
        });
        </script>
    </div>
</body>

</html>
