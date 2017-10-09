<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/animate.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-electro.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/owl-carousel.css') }}" media="all" />
      @yield('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/colors/blue.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style1.css') }}" media="all" />
    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="page home page-temlate-default">

	<div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div class="top-bar">
            <div class="container">
                <nav>
                    <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Chao mung ban den voi cua hang account cua chung toi</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><a title="Shop" href="#"><i class="ec ec-shopping-bag"></i>Ban account</a></li>
						@if(Auth::guest())
                        <li class="menu-item animate-dropdown"><a href="{{ route('login_with_facebook') }}"><i class="ec ec-user"></i>Dang nhap</a></li>
						@else
                        <li class="menu-item animate-dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false" role="button" class="dropdown-toggle">
								{{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                            	<li><a href="#">Nap tien vao tai khoan</a></li>
                                <li><a href="#">Lich su giao dich</a></li>
                            	<li>
                            		<a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                         	document.getElementById('logout-form').submit();">
                                            Dang xuat
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
            </div>
        </div><!-- /.top-bar -->
        @yield('header')
		{{-- @include('particals.header') --}}
		@yield('header-v2')
		@yield('nav-v2')
        @yield('content')
		{{-- @include('layouts.contents') --}}
		@yield('footer')
		{{-- @include('layouts.footer') --}}
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
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
    <script>
    (function($) {
        $('#scrollUp').each(function(){
            $(this).click(function(){
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
		@yield('scripts')
</body>
</html>
