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
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/star-rating-svg.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ URL::to('img/OKPNG.png') }}" media="all" />
    <style type="text/css">
        #borderimg2 {
    border: 10px solid transparent;
    padding: 1px;
    -webkit-border-image: url({{ URL::to('img/border.png') }}) 30 stretch; /* Safari 3.1-5 */
    -o-border-image: url({{ URL::to('img/border.png') }}g) 30 stretch; /* Opera 11-12.1 */
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
                                    <a href="javascript:void(0)" data-id="{{ Auth::user()->id }}" id="post-show"><div style="width: 100%;height: 100%;margin-left: 10px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bài đăng của bạn
                                        </div></a>
                                </form>
                                </li>
                                <li  style="margin-top: 3px;">
                                    <a href="{{ url('/user/logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><div style="width: 100%;height: 100%;margin-left: 10px;"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng Xuất
                                        </div></a>
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

                                                    <div class="col2-set"  id="customer_login">

                                                        <div class="col-1">


                                                            <form method="post" class="login">

                                                               {{--  <p class="form-row form-row-wide"> --}}
                                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                    <label for="username">Email:
                                                                        <span class="required"></span></label>

                                                                        <input id="email" type="email"  class="input-text" name="email" value="{{ old('email') }}" required autofocus/>
                                                                        @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                {{-- </p> --}}

                                                                <p class="form-row form-row-wide">
                                                                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                    <label for="password">Mật khẩu:
                                                                        <span class="required"></span></label>

                                                                        <input class="input-text" id="password" type="password" name="password" required/>
                                                                        @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                        @endif
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
                                                                    Bạn chưa là thành viên?<a data-toggle="modal" href="#dangkyModal"  onclick="$('#loginModal').modal('hide')"> Đăng kí ngay!</a>
                                                                </p>

                                                            </form>



                                                        </div><!-- .col-1 -->

                                                        <div class="col-2" style="margin-top: 200px;">

                                                           <a href="{{ route('login_with_facebook') }}"><div style=" background-color:  #4267b2;width: 350px;height: 60px;" type="submit" class="button"><i class="fa fa-facebook-official fa-2x"></i>  <span style="font-size: 20px; color: white;">Đăng nhập bằng Facebook</span>&nbsp &nbsp  </div></a>

                                                       </div><!-- .col-2 -->

                                                   </div><!-- .col2-set -->

                                               </div><!-- /.customer-login-form -->
                                           </div><!-- .woocommerce -->
                                       </div><!-- .entry-content -->

                                   </article><!-- #post-## -->

                               </main><!-- #main -->
                           </div><!-- #primary -->

                       </div>
                       <div class="modal-footer" style="background-color: #A3D133;">
                       </div>
                   </div>
               </div>
           </div>
       </form>
       <form type="hidden" name="" id="" method="POST" action="{{ url('/aaa') }}">
        {{ csrf_field() }}
        <div id="dangkyModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #A3D133;text-align: center;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="font-weight: bold;">Đăng Ký</h4>
                    </div>
                    <div class="modal-body">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                              <article id="post-8" class="hentry">

                                  <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="customer-login-form">
                                            <span class="or-text">or</span>

                                            <div class="col2-set"  id="customer_login">

                                               <div class="col-1">
                                        <form method="post" class="login">
                                            <p class="form-row form-row-wide">
                                                <label for="username">Tên:
                                                <span class="required"></span></label>
                                                <input type="text" name="name" id="" class="input-text" placeholder="Nhập Tên" required="true">
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label for="username">Email :
                                                <span class="required"></span></label>
                                                <input type="email" name="email" id="" class="input-text" placeholder="Nhập Email">
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label for="password">Mật Khẩu :
                                                <span class="required"></span></label>
                                                 <input type="text" name="password" id="" class="input-text" placeholder="Nhập mật khẩu" required="">
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label for="password">Nhập Lại Mật Khẩu :
                                                <span class="required"></span></label>
                                                <input class="input-text" type="password" name="password" placeholder="Nhập lại mật khẩu" id="password" />
                                            </p>
                                            <!-- <p class="lost_password">
                                                <a href="login-and-register.html">Quên mật khẩu?</a>
                                            </p> -->
                                            <label for="rememberme" class="inline">
                                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Tôi đã đọc & đồng ý với <a href="">Điều khoản sử dụng của Tủ Sách Tương Lai.</a>
                                                </label>
                                            <p class="form-row">
                                                <input class="button" type="submit" value="Đăng Ký" name="login">


                                            </p>

                                        </form>
                                    </div>
                                    <div class="col-2" style="margin-top: 260px;">

                                       <a href="{{ route('login_with_facebook') }}"><div style="background-color:  #4267b2;width: 350px;height: 60px;" type="submit" class="button"><i class="fa fa-facebook-official fa-2x"></i>  <span style="font-size: 20px; color: white;">Đăng nhập bằng Facebook</span>&nbsp &nbsp  </div></a>

                                   </div><!-- .col-2 -->

                               </div><!-- .col2-set -->

                           </div><!-- /.customer-login-form -->
                       </div><!-- .woocommerce -->
                   </div><!-- .entry-content -->

               </article><!-- #post-## -->

           </main><!-- #main -->
       </div><!-- #primary -->

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
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
        <!-- <script type="text/javascript" src="{{ URL::to('js/admin/buttons.html5.min.js') }}"></script> -->
        @yield('script')
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
                $('#search-form').css("display","inline-table");
                $('#fv-2').removeAttr("style");
                $('#cart-2').removeAttr("style");
            } else {
                $('.navbar-primary').removeClass('navbar-fixed-top');
                $('#search-form').css("display","none");
                $('#fv-2').css("display","none");
                $('#cart-2').css("display","none");
            }
        });

        </script>
        <script>
            $('.book-show').click(function(e) {
                $('.modal-title').text('Thông tin chi tiết');
                $('.post').css("display","none");
                $('#single-product').removeAttr("style");
                $('.action-buttons').removeAttr("style");
            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#post-show').click(function(e) {
                var id = $(this).data('id');
                window.location.href = "/postByUser/" + id;
            });


        </script>
        <script>

            $("#quality").select2({ closeOnSelect: true, maximumSelectionLength: 1 });
            $('#year').datetimepicker({
                format: 'YYYY-MM-DD'
            });


            $(".my-rating-9").starRating({
                starSize: 20,
                initialRating: 0,
                disableAfterRate: false,
                strokeColor: '#a3d133',
                onHover: function(currentIndex, currentRating, $el){
                  $('.live-rating').text(currentIndex);
                },
                onLeave: function(currentIndex, currentRating, $el){
                  $('.live-rating').text(currentRating);
                }
              });
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

                var owl4 = $("#owl-demo4");

                var block = false;
                $(".owl-carousel").mouseenter(function() {
                    if (!block) {
                        block = true;
                        owl4.trigger('stop.owl.autoplay')
                        block = false;
                    }
                });
                $(".owl-carousel").mouseleave(function() {
                    if (!block) {
                        owl4.trigger('play.owl.autoplay', [1000])
                        block = false;
                    }
                });

                owl4.owlCarousel({
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
                itemsDesktop: [1000, 4], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0;
                itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

            });
        })(jQuery);
        </script>

        <script>
        $('.book-show').on('click', function(e) {
            var book_id = e.currentTarget.id.substring(5);
            $.ajax({
                cache: false,
                method: 'GET',
                dataType: 'JSON',
                url: '/book/' + book_id,
                success: function(data) {
                    $('#book-rate').val(data['book']['id']);
                    $('#book-name').text(data['book']['name']);
                    $('#book-status').text(data['book']['status']);
                    $('#book-company').text(data['book']['company']);
                    $('#book-year').text(data['book']['year']);
                    $('#book-republish').text(data['book']['republish']);
                    $('.book-author').text(data['book']['author']);
                    $('#book-price').text('Gía: ' + data['book']['price'] + ' VND');
                    $('#book-introduce').text(data['book']['introduce']);
                    $('#book-description').text(data['book']['description']);
                    $('#image-book').attr('src','{{ URL::to('assets/images/product/') }}' + '/' + data['images'][0]['path']);
                    $('.fb-comments').attr('data-href',"https://developers.facebook.com/"+ book_id );
                    $('.modal-footer').css('display','none');
                    $('#book-isbn').text(data['book']['isbn']);
                },
                error: function(data) {
                }
            });
            e.preventDefault();
        });
        </script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.add_to_wishlist').click(function(e) {
                var bookId = e.currentTarget.id.substring(5);
                var userId = $('#user-id').val();

                $.ajax({

                    cache: false,
                    method: 'POST',
                    dataType: 'JSON',
                    url: '/addBookWishlist',
                    data: {
                        bookId: bookId,
                        userId: userId
                    },
                    success: function(data) {
                        alert("Bạn đã thêm thành công vào danh sách yêu thích");
                    },
                    error: function(data) {
                        if(data.status === 401) {
                            alert('Vui lòng đăng nhập trưóc khi thêm sách vào yêu thích');
                        }
                        if(data.status === 500) {
                            alert('Sách đã có trong danh sách yêu thích của bạn');
                        }
                    }

                });
                e.preventDefault();
            });
            $('.submit-rate').click(function(evt) {

                var bookId = $('#book-rate').val();
                var userId = $('#user-id').val();
                var comment = $('#comment').val();
                var rate = $('.my-rating-9').starRating('getRating');

                $.ajax({

                    cache:false,
                    method: 'POST',
                    url: '/addBookRate',
                    data: {
                        userId: userId,
                        bookId: bookId,
                        comment: comment,
                        rate: rate,
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        alert("Cảm ơn bạn đã đánh gía");
                    },
                    error: function(data) {
                        if(data.status ===401) {
                            alert('Vui lòng đăng nhập trước khi đánh gía sách, xin cảm ơn');
                        }
                    }
                });
                evt.preventDefault();
            });
            $('.add_to_cart_button').click(function(e) {
                e.preventDefault();

                var id = $(this).data('id');

                $.ajax({

                    cache: false,
                    method: 'POST',
                    url: '/cart/add',
                    data: {
                        id: id,
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        alert('Bạn đã thêm thành công sản phẩm vào giỏ hàng');
                        var count = parseInt($('.cart-items-count')[0].innerHTML);
                        count += 1;
                        $('.cart-items-count').each(function(e) {
                            $(this).text(count);
                        });
                    },
                    error: function(data) {
                        console.log("có lỗi với", data);
                    }
                });

            });

            $('.remove').click(function(e) {
                e.preventDefault();

                var id = $(this).data('id');

                $.ajax({

                    cache: false,
                    method: 'DELETE',
                    url: '/cart/delete/' + id,
                    data: {
                        id: id,
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        alert('Bạn đã xóa thành công sản phẩm khỏi giỏ hàng');
                        window.location.reload();

                    },
                    error: function(data) {

                    }
                });

            });

            $('#checkout').click(function(e) {
                e.preventDefault();

                var method = $('input[name=method]:checked').val();
                var address = $('#address').val();

                $.ajax({

                    cache: false,
                    method: 'POST',
                    url: '/cart/store',
                    data: {
                        method: method,
                        address: address,
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        alert("Bạn đã đặt hàng thành công, cảm ơn bạn");
                        window.location.assign("/");
                    },
                    error: function(data) {
                        if(data.status == 401) {
                            alert('Vui lòng đăng nhập trước khi đặt hàng');
                        }
                    }
                });

            });
            $('#post-create').click(function(e) {
                $('#error-name').text("");
                $('#error-introduce').text("");
                $('#error-price').text("");
                $('#error-author').text("");
                $('#error-company').text("");
                $('#error-year').text("");
                $('#error-kind').text("");
                $('#error-method').text("");
                $('#error-account').text("");
                $('#error-quality').text("");
                $('#error-republish').text("");
                $('#error-phone').text('');
            });

            $('#ahuhu').submit(function(evt) {

                var formData = new FormData(this);

                $.ajax({
                    async:true,
                    method: 'POST',
                    url: '/book/storeSaleBook',
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                    success: function() {
                        alert("Chúc mừng bạn đã đăng bài thành công");
                        window.location.assign('/books');
                    },
                    error: function(data) {
                        if(data.status === 422) {
                            var errors = data.responseJSON;

                            $('#error-name').text(errors['name']);
                            $('#error-introduce').text(errors['introduce']);
                            $('#error-price').text(errors['price']);
                            $('#error-author').text(errors['author']);
                            $('#error-company').text(errors['company']);
                            $('#error-year').text((errors['year']));
                            $('#error-kind').text(errors['kind']);
                            $('#error-method').text(errors['method']);
                            $('#error-account').text(errors['account']);
                            $('#error-quality').text(errors['quality']);
                            $('#error-republish').text(errors['republish']);
                            $('#error-phone').text(errors['phone']);
                            $('#error-address').text(errors['address']);
                        }
                    }
                });
                evt.preventDefault();
            });

            $('#ahaha').submit(function(evt) {

                var formData = new FormData(this);

                $.ajax({
                    async:true,
                    method: 'POST',
                    url: '/book/storePostBook',
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                    success: function() {
                        alert("Chúc mừng bạn đã đăng bài thành công");
                        window.location.assign('/books');
                    },
                    error: function(data) {
                        if(data.status === 422) {
                            var errors = data.responseJSON;

                            $('#error-name').text(errors['name']);
                            $('#error-introduce').text(errors['introduce']);
                            $('#error-price').text(errors['price']);
                            $('#error-author').text(errors['author']);
                            $('#error-company').text(errors['company']);
                            $('#error-year').text((errors['year']));
                            $('#error-kind').text(errors['kind']);
                            $('#error-method').text(errors['method']);
                            $('#error-account').text(errors['account']);
                            $('#error-quality').text(errors['quality']);
                            $('#error-republish').text(errors['republish']);
                            $('#error-phone').text(errors['phone']);
                            $('#error-address').text(errors['address']);
                            $('#error-price-rent').text(errors['price-rent']);
                        }
                    }
                });
                evt.preventDefault();
            });

            $('.category-show').click(function(e) {
                var id = $(this).data('id');
                window.location.assign('/category/'+id);
            });

            $('.btn-view').click(function(e) {
                $('.image-area').css("display", "none");
                $('#book-update').removeAttr("style");
                $('#create-book').css("display", "none");
                $('.form-status').removeAttr("style");

                $('.modal-title').text('Thông tin sách');
                $('.bank-account').css("display", "none");
                $('.method-pay').css("display", "none");
                $('.kind-book').css("display", "none");
                $('.modal-footer').css('display', 'none');
                $('#error-name').text("");
                $('#error-introduce').text("");
                $('#error-description').text("");
                $('#error-price').text("");
                $('#error-price-rent').text("");
                $('#error-author').text("");
                $('#error-company').text("");
                $('#error-year').text("");
                $('#error-kind').text("");
                $('#error-method').text("");
                $('#error-account').text("");
                $('#error-category').text("");
                $('#error-quality').text("");
                $('#error-republish').text("");
                $('#error-location').text("");
                $('#error-isbn').text("");

                var book_id = $(this).data('id');
                var array = [];

                $.ajax({
                    cache: false,
                    method: 'GET',
                    dataType: 'JSON',
                    url: '/admin/books/' + book_id,
                    success: function(data) {
                        $('#name').val(data['book']['name']).prop("readonly",true);
                        for (var i = 0; i < data['categories'].length; i++) {
                            array.push(data['categories'][i]['category_id']);
                        }

                        $('#id').prop("readonly",true).val(data['book']['id']);
                        $('#category').val(array).trigger('change').prop("readonly",true);
                        $('#description').val(CKEDITOR.instances.description.setData(data['book']['description']));
                        $('#introduce').val(data['book']['introduce']).prop("readonly",true);
                        $('#location').val(data['book']['bookshelf_id']).trigger('change');
                        $('#quality').val(data['details'][0]['quality']).trigger('change');
                        $('#price').val(data['book']['price']).prop("readonly",true);
                        $('#price-rent').val(data['book']['rental_fee']).prop("readonly",true);
                        $('#author').val(data['book']['author']).prop("readonly",true);
                        $('input[type=radio][name="status"][value=' + data['book']['status'] + ']').prop('checked', true);
                        $('input[type=radio][name="status"]').prop('disabled', true);
                        $('#company').val(data['book']['company']).prop("readonly",true);
                        $('#year').val(data['book']['year']).prop("readonly",true);
                        $('#republish').val(data['book']['republish']).prop("readonly",true);
                        $('#isbn').val(data['book']['isbn']).prop("readonly",true);
                        $('select').prop('disabled', true);
                    },
                    error: function(data) {
                    }
                });
            });
        </script>
    </div>
</body>

</html>
