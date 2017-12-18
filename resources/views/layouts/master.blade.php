<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from transvelo.github.io/electro-html/home-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2017 16:53:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/bootstrap4/css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/animate.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-electro.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/owl-carousel.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/colors/green.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/waves.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/dropify/dist/css/dropify.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/star-rating-svg.css') }}"> @yield('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ URL::to('img/OKPNG.png') }}" media="all" />
    <!-- Demo Purpose Only. Should be removed in production -->
    <style type="text/css">
        #borderimg2 {
            border: 10px solid transparent;
            padding: 1px;
            -webkit-border-image: url({{ URL::to('img/border.png')}}) 30 stretch; /* Safari 3.1-5 */
            -o-border-image: url({{ URL::to('img/border.png') }}) 30 stretch; /* Opera 11-12.1 */
            border-image: url({{ URL::to('img/border.png') }}) 30 stretch;
        }
        div.hr {
          height: 15px;
          background: #fff url({{ URL::to('img/hr1.gif') }}) no-repeat scroll center;
        }
        div.hr hr {
          display: none;
        }
    </style>
</head>

<body class="home-v2">
    <div id="page" class="hfeed site">
        <div class="top-bar" id="app">
            <div class="container">
                <nav>
                    <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Chào mừng bạn đến với cửa hàng sách của chúng tôi</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><i class="fa fa-envelope-o" aria-hidden="true"></i> BookServiceOnline@gmail.com</li>
                        <li class="menu-item animate-dropdown"><i class="fa fa-phone-square" aria-hidden="true"></i> (084)- 1682 5592</li>
                        @if(Auth::guest())
                        <li class="menu-item animate-dropdown"> <a title="My Account" data-toggle="modal" href="#loginModal"><i class="ec ec-user"></i>Đăng Nhập</a></li>
                        <li class="menu-item animate-dropdown"><a title="My Account" data-toggle="modal" href="#dangkyModal"><i class="fa fa-chain-broken" aria-hidden="true"></i>Đăng Ký</a></li>
                        @else
                        <li class="menu-item animate-dropdown dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false" role="button" class="dropdown-toggle">
                                <i class="fa fa-user" aria-hidden="true"></i>{{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="text-align: left; padding: 0px;color: black;" role="menu">
                                <li style="margin-top: 5px;">
                                    <a href="javascript:void(0)" data-id="{{ Auth::user()->id }}" id="post-show">
                                        <div style="width: 100%;height: 100%;margin-left: 10px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bài đăng của bạn
                                        </div>
                                    </a>
                                    </form>
                                </li>
                                <li style="margin-top: 3px;">
                                    <a href="{{ url('/user/logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <div style="width: 100%;height: 100%;margin-left: 10px;"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng Xuất
                                        </div>
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </nav>
                <form type="hidden" name="" id="" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div id="loginModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #A3D133;text-align: center;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="font-weight: bold;">Đăng nhập</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="primary" class="content-area">
                                        <main id="main" class="site-main">
                                            <article id="post-8" class="hentry">
                                                <div class="entry-content">
                                                    <div class="woocommerce">
                                                        <div class="customer-login-form">
                                                            <span class="or-text">or</span>
                                                            <div class="col2-set" id="customer_login">
                                                                <div class="col-1">
                                                                    <form method="post" class="login">
                                                                        {{--
                                                                        <p class="form-row form-row-wide"> --}}
                                                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                                <label for="username">Email:
                                                                                    <span class="required"></span></label>
                                                                                <input id="email" type="email" class="input-text" name="email" value="{{ old('email') }}" required autofocus/> @if ($errors->has('email'))
                                                                                <span class="help-block">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span> @endif
                                                                            </div>
                                                                            {{-- </p> --}}
                                                                        <p class="form-row form-row-wide">
                                                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                                <label for="password">Mật khẩu:
                                                                                    <span class="required"></span></label>
                                                                                <input class="input-text" id="password" type="password" name="password" required/> @if ($errors->has('password'))
                                                                                <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span> @endif
                                                                            </div>
                                                                        </p>
                                                                        <p class="lost_password">
                                                                            <a href="login-and-register.html">Quên mật khẩu?</a>
                                                                        </p>
                                                                        <p class="form-row">
                                                                            <input class="button" type="submit" value="Đăng Nhập" name="login">
                                                                            <br>
                                                                            <br>
                                                                            <label for="rememberme" class="inline">
                                                                                <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me
                                                                            </label>
                                                                        </p>
                                                                        <p class="lost_password">
                                                                            Bạn chưa là thành viên?<a data-toggle="modal" href="#dangkyModal" onclick="$('#loginModal').modal('hide')"> Đăng kí ngay!</a>
                                                                        </p>
                                                                    </form>
                                                                </div>
                                                                <!-- .col-1 -->
                                                                <div class="col-2" style="margin-top: 200px;">
                                                                    <a href="{{ route('login_with_facebook') }}">
                                                                        <div style=" background-color:  #4267b2;width: 350px;height: 60px;" type="submit" class="button"><i class="fa fa-facebook-official fa-2x"></i> <span style="font-size: 20px; color: white;">Đăng nhập bằng Facebook</span>&nbsp &nbsp </div>
                                                                    </a>
                                                                </div>
                                                                <!-- .col-2 -->
                                                            </div>
                                                            <!-- .col2-set -->
                                                        </div>
                                                        <!-- /.customer-login-form -->
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .entry-content -->
                                            </article>
                                            <!-- #post-## -->
                                        </main>
                                        <!-- #main -->
                                    </div>
                                    <!-- #primary -->
                                </div>
                                <div class="modal-footer" style="background-color: #A3D133;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.top-bar -->
        {{-- section header --}} @yield('header') {{-- section header-v2 --}} @yield('header-v2') {{-- section nav-v2 --}} @yield('nav-v2') {{-- section content --}} @yield('content') {{-- section footer --}} @yield('footer')
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
                <li class="cart"> <a class="footer-cart-contents" href="#" title="View your shopping cart"> <span class="cart-items-count count">0</span> </a></li>
                <li class="wishlist"> <a href="#" class="has-icon"><i class="ec ec-favorites"></i><span class="count">0</span></a></li>
                <li class="compare"> <a href="#" class="has-icon"><i class="ec ec-compare"></i><span class="count">0</span></a></li>
            </ul>
        </div>
        <ul class="list-user-action" aria-labelledby="dropdownMenu2" style="position: absolute; display: none;">
            <li><a href="#">Nạp tiền vào tài khoản</a></li>
            <li><a href="#">Lịch sử giao dịch</a></li>
            <li class="last"><a href="#" onclick="logoutFacebook();">Đăng xuất</a></li>
        </ul>
        <a id="scrollUp" href="javascript:void(0)" style="position: fixed; z-index: 1001; display: block;"><i class="fa fa-angle-up"></i></a>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/jquery-1.12.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/tether.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/bootstrap.min.js') }}"></script>
        {{-- <script type="text/javascript" src="{{ URL::to('/js/app.js') }}"></script> --}}
        <script type="text/javascript" src="{{ URL::to('js/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/echo.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/jquery.easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/jquery.waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/electro.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/style.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/owl.autoplay.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/ckeditor/ckeditor.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/forms-upload.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/dropify.min.js') }}"></script>
        <script src="{{ URL::to('js/bootstrap-datetimepicker.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/jquery.star-rating-svg.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/dataTables.responsive.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
        <script src="/js/search.js"></script>
        @stack('scripts')
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
        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > 250) {
                $('.navbar-primary').addClass('navbar-fixed-top');
                $('#search-form').css("display", "inline-table");
                $('#fv-2').removeAttr("style");
                $('#cart-2').removeAttr("style");
            } else {
                $('.navbar-primary').removeClass('navbar-fixed-top');
                $('#search-form').css("display", "none");
                $('#fv-2').css("display", "none");
                $('#cart-2').css("display", "none");
            }
        });
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
        $(document).ready(function() {
            $(".dropdown-toggle").dropdown();
        });
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
            var owl3 = $('#owl-brands');
            var block = false;
            (".owl-carousel").mouseenter(function() {
                if (!block) {
                    block = true;
                    owl3.trigger('stop.owl.autoplay')
                    block = false;
                }
            });
            $(".owl-carousel").mouseleave(function() {
                if (!block) {
                    owl3.trigger('play.owl.autoplay', [1000])
                    block = false;
                }
            });
            owl3.owlCarousel({
                autoplay: true,
                autoPlaySpeed: 1000,
                autoplayHoverPause: true,
                loop: true,
                navigation: true,
                items: 5, //10 items above 1000px browser width
                itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0;
                itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

            });
        });
        </script>
    </div>
</body>

</html>
