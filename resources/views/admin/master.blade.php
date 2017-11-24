<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/bootstrap4/css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/themify-icons/themify-icons.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/font-awesome/css/font-awesome.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/animate.css/animate.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/jscrollpane/jquery.jscrollpane.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/waves/waves.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/switchery/dist/switchery.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/core.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/morris/morris.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admins/jvectormap/jquery-jvectormap-2.0.3.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/dropify/dist/css/dropify.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap-datetimepicker.min.css') }}">
 @yield('css') @yield('css')
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
                    @if(Auth::user()->role_id == 1)
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-icon"><i class="fa fa-user"></i></span>
                            <span class="s-text">Quản Trị Viên</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('admin.contact.index') }}">Lien he</a></li>
                            <li><a href="themsachban">Danh sach quan li</a></li>
                            <li><a href="themsachban">Danh sach quyen han</a></li>
                            <li><a href="{{ route('super.admin.index') }}">Danh sach </a></li>
                        </ul>
                    </li>

                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="fa fa-book"></i></span>
                            <span class="s-text">Quan li gia sach</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('admin.bookshelf.index') }}">Danh Sách</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="fa fa-book"></i></span>
                            <span class="s-text">Quan li sach</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('admin.book.index') }}">Danh Sách</a></li>
                            <li><a href="themsachban">Sach ban</a></li>
                            <li><a href="themsachban">Sach thue</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="fa fa-users"></i></span>
                            <span class="s-text">Nguoi dung</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('users.index') }}">Danh sach</a></li>
                            <li><a href="{{ route('supplier.index') }}">Nha cung cap</a></li>
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
                            <li><a href="{{ URL::route('event.index') }}">Danh sach</a></li>
                        </ul>
                    </li>
                    @else
                     <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="fa fa-book"></i></span>
                            <span class="s-text">Quan li gia sach</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('admin.bookshelf.index') }}">Danh Sách</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="fa fa-book"></i></span>
                            <span class="s-text">Quan li sach</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('admin.book.index') }}">Danh Sách</a></li>
                            <li><a href="themsachban">Sach ban</a></li>
                            <li><a href="themsachban">Sach thue</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="fa fa-users"></i></span>
                            <span class="s-text">Nguoi dung</span>
                        </a>
                        <ul>
                            <li><a href="{{ route('users.index') }}">Danh sach</a></li>
                            <li><a href="khachmua">Khách Mua</a></li>
                            <li><a href="khachban">Khách Bán</a></li>
                            <li><a href="khachchothue">Khách Cho Thuê</a></li>
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
                            <li><a href="{{ URL::route('event.index') }}">Danh sach</a></li>
                        </ul>
                    </li>
                    @endif
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
                                Xin chào <a href="#" style="color: #0CC3D3;">{{ Auth::user()->name }}</a>
                                <a href="#" data-toggle="dropdown" aria-expanded="false">
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
                        <ul class="nav navbar-nav">
                            <li class="nav-item hidden-sm-down" style="margin-left: 10px;">
                                <a class="nav-link toggle-fullscreen" href="#">
                                   <img src="img/logo.png"><span style="font-size: 20px;font-weight: bold; color: #0CC3D3;">BookServiceOnline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="site-content">
            @yield('content')
        </div>
    </div>
    <!-- Vendor JS -->
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
    <script src="{{ URL::to('js/bootstrap-datetimepicker.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/detectmobilebrowser.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.mousewheel.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/mwheelIntent.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.jscrollpane.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.fullscreen-min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/demo.js') }}"></script>

    <script type="text/javascript" src="{{ URL::to('js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/dropify.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.flot.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.flot.resize.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.flot.tooltip.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/curvedLines.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/tinycolor.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.sparkline.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/raphael.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/morris.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery-jvectormap-world-mill.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.peity.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/forms-upload.js') }}"></script>
    {{-- table --}}
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/responsive.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/buttons.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/tables-datatable.js') }}"></script>
    @yield('script')
    <script>
    (function($) {
        $('.with-sub a').on('click', function(e) {
            e.preventDefault();
            var page = $(this).attr('href');
            $('.site-content').load(page);
        });

    });
    </script>
</body>

</html>
