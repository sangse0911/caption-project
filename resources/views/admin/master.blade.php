<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/bootstrap4/css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/themify-icons/themify-icons.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/font-awesome/css/font-awesome.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/animate.css/animate.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/jscrollpane/jquery.jscrollpane.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/waves/waves.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/switchery/dist/switchery.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/core.css') }}" media="all" /> @yield('css') @yield('css')
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="fixed-sidebar fixed-header skin-default content-appear">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Sidebar -->
        <div class="site-overlay"></div>
        <div class="site-sidebar">
            <div class="custom-scroll custom-scroll-light">
                <ul class="sidebar-menu">
                    <li>
                        <a href="danhsachquantri" class="waves-effect  waves-light">
							<span class="s-icon"><i class="fa fa-user"></i></span>
							<span class="s-text">Quản Trị Viên</span>
						</a>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
							<span class="s-caret"><i class="fa fa-angle-down"></i></span>
							<span class="s-icon"><i class="fa fa-book"></i></span>
							<span class="s-text">Sách Bán</span>
						</a>
                        <ul>
                            <li><a href="sachban">Danh Sách</a></li>
                            <li><a href="themsachban">Thêm Sách Mới</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
							<span class="s-caret"><i class="fa fa-angle-down"></i></span>
							<span class="s-icon"><i class="fa fa-leanpub"></i></span>
							<span class="s-text">Sách Thuê</span>
						</a>
                        <ul>
                            <li><a href="sachthue">Danh Sách</a></li>
                            <li><a href="themsachthue">Thêm Sách Mới</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
							<span class="s-caret"><i class="fa fa-angle-down"></i></span>
							<span class="s-icon"><i class="fa fa-users"></i></span>
							<span class="s-text">Khách Hàng</span>
						</a>
                        <ul>
                            <li><a href="khachthue">Khách Thuê</a></li>
                            <li><a href="khachmua">Khách Mua</a></li>
                            <li><a href="khachban">Khách Bán</a></li>
                            <li><a href="khachchothue">Khách Cho Thuê</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
							<span class="s-caret"><i class="fa fa-angle-down"></i></span>
							<span class="tag tag-danger">10</span>
							<span class="s-icon"><i class="fa fa-cart-arrow-down"></i></span>
							<span class="s-text">Đơn Hàng</span>
						</a>
                        <ul>
                            <li><a href="donghangban">Mua Sách</a></li>
                            <li><a href="donhangthue">Thuê Sách</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
							<span class="s-caret"><i class="fa fa-angle-down"></i></span>
							<span class="tag tag-danger">10</span>
							<span class="s-icon"><i class="fa fa-bars"></i></span>
							<span class="s-text">Góc Sách</span>
						</a>
                        <ul>
                            <li><a href="gocsachbaidang">Bài Đăng</a></li>
                            <li><a href="gocsachdanhsach">Danh Sách</a></li>
                            <li><a href="gocsachthanhvien">Thành Viên</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
							<span class="s-caret"><i class="fa fa-angle-down"></i></span>
							<span class="tag tag-danger">10</span>
							<span class="s-icon"><i class="fa fa-bars"></i></span>
							<span class="s-text">Su kien</span>
						</a>
                        <ul>
                            <li><a href="#">Danh sach</a></li>
                            <li><a href="{{ route('event.create') }}" data-toggle="modal" data-target="#myModal">Them moi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar second -->
        <div class="site-sidebar-second custom-scroll custom-scroll-dark">
            <!-- Template options -->
            <!-- Header -->
            <div class="site-header">
                <nav class="navbar navbar-light">
                    <div class="navbar-left">
                        <a class="navbar-brand" href="index.html">
							<span style="color: white;font-size: 25px;font-weight: bold;">BSO</span>
						</a>
                        <div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
                            <span class="hamburger"></span>
                        </div>
                        <div class="toggle-button-second dark float-xs-right hidden-md-up">
                            <i class="ti-arrow-left"></i>
                        </div>
                        <div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
                            <span class="more"></span>
                        </div>
                    </div>
                    <div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
                        <div class="toggle-button light sidebar-toggle-second float-xs-left hidden-sm-down">
                            <span class="hamburger"></span>
                        </div>
                        <div class=" float-xs-right ">
                        </div>
                        <ul class="nav navbar-nav float-md-right">
                            <li class="nav-item dropdown hidden-sm-down">
                                Xin chào <a href="" style="color: #0CC3D3;">XXX</a>, Chào mừng đến trang quản trị
                                <a href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32">
										<img src="img/avatars/1.jpg" alt="">
									</span>
								</a>
                                <div class="dropdown-menu dropdown-menu-right animated fadeInUp">
                                    <a class="dropdown-item" href="index.html#">
										<i class="ti-email mr-0-5"></i> Inbox
									</a>
                                    <a class="dropdown-item" href="index.html#">
										<i class="ti-user mr-0-5"></i> Profile
									</a>
                                    <a class="dropdown-item" href="index.html#">
										<i class="ti-settings mr-0-5"></i> Settings
									</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="index.html#"><i class="ti-help mr-0-5"></i> Help</a>
                                    <a class="dropdown-item" href="index.html#"><i class="ti-power-off mr-0-5"></i> Sign out</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item hidden-sm-down">
                                <a class="nav-link toggle-fullscreen" href="#">
									<i class="ti-fullscreen"></i>
								</a>
                            </li>
                        </ul>
                        <div class="header-form float-md-left ml-md-2" style="height: 60px;margin-top: 0px;padding-top: 10px;">
                            <a href="#"><img src="img/logo.png" height="40px"><span style="font-size: 20px;font-weight: bold; line-height: 25px;color: #0CC3D3;">BookServiceOnline</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="site-content">
            @yield('content')
        </div>
    </div>
    <!-- Vendor JS -->
    <script type="text/javascript" src="{{ URL::to('css/admin/jquery/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/tether/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/bootstrap4/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/detectmobilebrowser/detectmobilebrowser.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/jscrollpane/jquery.mousewheel.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/jscrollpane/mwheelIntent.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/jscrollpane/jquery.jscrollpane.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/jquery-fullscreen-plugin/jquery.fullscreen-min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/waves/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('css/admin/switchery/dist/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/demo.js') }}"></script>
    @yield('script')
</body>

</html>
