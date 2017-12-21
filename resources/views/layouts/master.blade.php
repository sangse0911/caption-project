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
  .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url({{ URL::to('img/Preloader_3.gif') }}) center no-repeat #fff;
}
</style>
    @yield('css')
</head>

<body class="home-v2">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=470954079939617';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    @if(Auth::guest()) @else
    <input type="hidden" name="" id="user-id" value="{{ Auth::user()->id }}"> @endif
    <div class="se-pre-con"></div>
    <div id="page" class="hfeed site">
        <div class="top-bar" id="app">
            <div class="container">
                <nav>
                    <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store"
                            href="#">Chào mừng bạn đến với cửa hàng sách của chúng tôi</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><i class="fa fa-envelope-o" aria-hidden="true"></i> BookServiceOnline@gmail.com</li>
                        <li class="menu-item animate-dropdown"><i class="fa fa-phone-square" aria-hidden="true"></i> (084)- 1682 5592</li>
                        @if(Auth::guest())
                        <li class="menu-item animate-dropdown"> <a title="My Account" data-toggle="modal" href="#loginModal"><i class="ec ec-user"></i>Đăng Nhập</a></li>
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
                                </li>
                                <li style="margin-top: 5px;">
                                    <a href="javascript:void(0)" data-id="{{ Auth::user()->id }}" id="order-show">
                                        <div style="width: 100%;height: 100%;margin-left: 10px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            Đơn hàng của bạn
                                        </div>
                                    </a>
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
                <div id="loginModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg" style="max-width: 1170px;">
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
                                                                <form method="post" class="login" action="{{ route('register') }}"> {{ csrf_field() }}
                                                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" id="form-name" style="display: none;">
                                                                        <p class="form-row form-row-wide">
                                                                            <label for="name" class="col-md-5 control-label">Tên:</label>
                                                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                                        </p>
                                                                    </div>
                                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                        <label for="email" class="col-md-5 control-label">Email:</label>
                                                                        <span class="required"></span>
                                                                        <input id="email" type="email" class="input-text" name="email" value="{{ old('email') }}" required autofocus/>
                                                                        <p style="color: red; display: none;" class="error errorlogin errorEmail"></p>
                                                                    </div>
                                                                    {{-- </p> --}}
                                                                    <p class="form-row form-row-wide">
                                                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                            <label for="password" class="col-md-5 control-label">Mật Khẩu:</label>
                                                                            <span class="required"></span>
                                                                            <input class="input-text" id="password" type="password" name="password" required/>
                                                                            <p style="color: red; display: none;" class="error errorlogin errorPassword"></p>
                                                                        </div>
                                                                    </p>
                                                                    <br>
                                                                    <div class="form-group" id="form-password" style="display: none;">
                                                                        <label for="password-confirm" class="col-md-5 control-label">Nhập lại mật khẩu:</label>
                                                                        <span class="required"></span>
                                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                                    </div>
                                                                    {{--
                                                                    <p class="lost_password">
                                                                        <a href="login-and-register.html">Quên mật khẩu?</a>
                                                                    </p> --}}
                                                                    <p class="form-row">
                                                                        <input class="button" type="button" id="login" value="Đăng Nhập" name="login">
                                                                        <input class="button" type="submit" id="register-button" value="Đăng ký" name="register" style="display: none;">
                                                                    </p>
                                                                    <p class="lost_password">
                                                                        Bạn chưa là thành viên?<a href="javascript:void(0)" id="register"> Đăng ký ngay!</a>
                                                                    </p>
                                                                </form>
                                                            </div>
                                                            <!-- .col-1 -->
                                                            <div class="col-2" style="margin-top: 200px;">
                                                                <a href="{{ route('login_with_facebook') }}">
                                                                    <div style=" background-color:  #4267b2;width: 350px;height: 60px;" type="submit" class="button"><i class="fa fa-facebook-official fa-2x"></i>
                                                                        <span style="font-size: 20px; color: white;">Đăng nhập bằng Facebook</span>&nbsp
                                                                    </div>
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
            </div>
        </div>
        <!-- /.top-bar -->
        {{-- section header --}} @yield('header') {{-- section header-v2 --}} @yield('header-v2') {{-- section nav-v2 --}} @yield('nav-v2') {{-- section content --}} @yield('content') {{-- section footer --}} @yield('footer')
        <a id="scrollUp" href="javascript:void(0)" style="position: fixed; z-index: 1001; display: block;"><i class="fa fa-angle-up"></i></a>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
        <script type="text/javascript" src="{{ URL::to('js/admin/jquery-1.12.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/tether.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin/bootstrap.min.js') }}"></script>
        {{--
        <script type="text/javascript" src="{{ URL::to('/js/app.js') }}"></script> --}}
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
        <script src="{{ URL::to('js/vue.min.js') }}"></script>
        <script src="{{ URL::to('js/vue-resource.min.js') }}"></script>
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
                $('#form-navbar').removeAttr('style');
            } else {
                $('.navbar-primary').removeClass('navbar-fixed-top');
                $('#search-form').css("display", "none");
                $('#fv-2').css("display", "none");
                $('#cart-2').css("display", "none");
                $('#form-navbar').css('display', 'none');
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
        <script>
        $('.button-search').click(function() {
            $('.home-v2-slider').css('display', 'none');
            $('#sidebar').css('margin-top', '150px');
            $('#event-field').css('display', 'none');
            $('#category-field').css('display', 'none');
            $('#search-field').removeAttr("style");
        });

        $('#register').click(function(e) {
            $('.modal-title').text('Đăng Ký');
            $('#login').css('display', 'none');
            $('#register-button').removeAttr('style');
            $('#form-password').removeAttr('style');
            $('#form-name').removeAttr('style');
        });
        $('#post-show').click(function(e) {
            var id = $(this).data('id');
            window.location.href = "/postByUser/" + id;
        });

        $('#order-show').click(function(e) {
            var id = $(this).data('id');
            window.location.href = '/orderByUser/' +id;
        })
        $(function() {
            $('#login').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var email = $('#email').val();
                var password = $('#password').val();

                $.ajax({
                    url: '/login',
                    data: {
                        'email': email,
                        'password': password,

                    },
                    method: 'POST',
                    success: function(data) {
                        if (data.error == true) {
                            $('.error').hide();

                            if (data.message.email != undefined) {
                                $('.errorEmail').show().text(data.message.email[0]);
                            }

                            if (data.message.password != undefined) {
                                $('.errorPassword').show().text(data.message.password[0]);
                            }

                            if (data.message.errorLogin != undefined) {
                                $('.errorLogin').show().text(data.message.errorlogin[0]);
                            }

                        } else {
                            window.location.href = '/';
                        }
                    },
                    error: function(data) {

                    }
                });
            });
        });
        </script>
        <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });

        $('.book-show').on('click', function(e) {
            var book_id = e.currentTarget.id.substring(5);
            $.ajax({
                cache: false,
                method: 'GET',
                dataType: 'JSON',
                url: '/book/' + book_id,
                success: function(data) {

                    $('a[href="#tab-description"]').click();
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
                    $('.fb-comments').attr('data-href',"http://54.88.16.179/book/"+ book_id );
                    FB.XFBML.parse();
                    $('.modal-footer').css('display','none');
                    $('#book-isbn').text(data['book']['isbn'] ? data['book']['isbn'] : '');
                    $('.add_to_wishlist').attr('id','book-'+ book_id);
                    $('.my-rating-9').starRating('setRating',0);
                    $('.live-rating').text('');
                    $('#comment').val('');

                    var count = 0;
                    var avg = 0;
                    var sum = 0;
                    for (var rating = 1; rating <= 5; ++rating) {
                        $('#rating-'+ rating).text('0');
                    }
                    for(var i = 0; i< data['rates'].length; i++) {
                        count++;
                        sum += parseInt(data['rates'][i]['rate']);
                        var currentNumber = parseInt($('#rating-'+ data['rates'][i]['rate']).text());
                        $('#rating-'+ data['rates'][i]['rate']).text(currentNumber + 1);
                    }
                    if(count == 0){
                        avg = 0;
                    } else {
                        avg = sum/count;
                    }

                    $('.based-title').text('Dựa trên ' + count + ' đánh gía');
                    $('.avg-rating-number').text(avg);
                    $('#count').text(avg);

                },
                error: function(data) {
                }
            });
            e.preventDefault();
        });
        </script>
    </div>
</body>

</html>
