<!DOCTYPE html>
<html>
<!-- Mirrored from laraspace.in/admin/dashboard/ecommerce by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2017 01:37:33 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <title>Laraspace - Laravel Admin</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/laraspace.css') }}" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="57x57" href="../../assets/admin/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../assets/admin/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/admin/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/admin/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/admin/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/admin/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/admin/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/admin/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/admin/img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="../../assets/admin/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../assets/admin/img/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="../../assets/admin/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../../assets/admin/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="http://laraspace.in/assets/admin/img/favicons/manifest.json">
    <link rel="mask-icon" href="http://laraspace.in/assets/admin/img/favicons/safari-pinned-tab.svg" color="#333333">
    <link rel="shortcut icon" href="http://laraspace.in/assets/admin/img/favicons/favicon.ico">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/laraspace1954.css') }}"> --}}
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/assets/admin/img/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/assets/admin/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#333333">
</head>

<body class="layout-default skin-default">
    <div id="app" class="site-wrapper">
        <header class="site-header">
            <a href="#" class="brand-main">
                <img src="{{ asset('img/logo-desk.png') }}" id="logo-desk" alt="Laraspace Logo" class="hidden-sm-down">
                <img src="{{ asset('/img/logo-mobile.png') }}" id="logo-mobile" alt="Laraspace Logo" class="hidden-md-up">
            </a>
            <a href="#" class="nav-toggle">
                <div class="hamburger hamburger--htla">
                    <span>toggle menu</span>
                </div>
            </a>
            <ul class="action-list">
                <li>
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-fa icon-fa-plus"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-edit"></i> New Post</a>
                        <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-tag"></i> New Category</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-star"></i> Separated link</a>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-fa icon-fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <h6 class="dropdown-header">Notifications</h6>
                        <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-user"></i> New User was Registered</a>
                        <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-comment"></i> A Comment has been posted.</a>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="avatar"><img src="{{ asset('img/avatar.png') }}" alt="Avatar"></a>
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <a class="dropdown-item" href="http://laraspace.in/admin/settings"><i class="icon-fa icon-fa-cogs"></i> Settings</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="icon-fa icon-fa-sign-out"></i> Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
        </header>
        <div class="mobile-menu-overlay"></div>
        <div class="sidebar-left " id="mobile-nav">
            <div class="sidebar-body scroll-pane">
                <ul class="side-nav metismenu" id="menu">
                    <li class="active">
                        <a href="#"><i class="icon-fa icon-fa-dashboard"></i> Dashboard <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="basic.html">Basic</a>
                            </li>
                            <li class="active">
                                <a href="ecommerce.html">Ecommerce</a>
                            </li>
                            <li class="">
                                <a href="finance.html">Finance</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-th-large"></i> Layouts <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/layouts/sidebar">Sidebar</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/layouts/icon-sidebar">Icon Sidebar</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/layouts/horizontal-menu">Horizontal Menu</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-star"></i> Basic UI <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/basic-ui/buttons">Buttons</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/basic-ui/cards">Cards</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/basic-ui/tabs">Tabs &amp; Accordians</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/basic-ui/typography">Typography</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/basic-ui/tables">Tables</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/basic-ui/modals">Modals</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/basic-ui/progress-bars">Progress Bar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-puzzle-piece"></i> Components <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/components/datatables">Datatables</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/components/notifications">Notifications</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/components/nestable-list"> Nestable List</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/components/nestable-tree">Nestable Tree</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/components/image-cropper">Image Cropper</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/components/zoom">Image Zoom</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/components/calendar">Calendar</a>
                            </li>
                            <li class="">
                                <a href="#">Rating<span class="icon-fa arrow icon-fa-fw"></span> </a>
                                <ul aria-expanded="true" class="collapse submenu">
                                    <li class=""><a href="http://laraspace.in/admin/components/ratings/star">Star Ratings</a></li>
                                    <li class=""><a href="http://laraspace.in/admin/components/ratings/bar">Bar Ratings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-bar-chart"></i> Charts <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/charts/chartjs">Chart JS</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/charts/sparklines">Sparkline</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/charts/amcharts">AM Charts</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/charts/morris">Morris</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/charts/gauges">Gauges</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-eye"></i> Icons <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/icons/icomoon">IcoMoon</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/icons/evil">Evil Icons</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/icons/meteo">Meteo Icons</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/icons/line">Line Icons</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/icons/fps-line">FPS Line</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/icons/fontawesome">Font Awesome</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-rocket"></i> Forms <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/forms/general">General Elements</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/forms/advanced">Advanced Elements</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/forms/layouts">Form Layouts</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/forms/validation">Form Validation</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/forms/wizards">Form Wizard</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/forms/wizards-2">Form Wizard 2</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/forms/wizards-3">Form Wizard 3</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/forms/editors">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-image"></i> Gallery <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/gallery/grid">Gallery Grid</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/gallery/masonry-grid">Gallery Masonry Grid</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-file"></i> Pages <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/login">Login</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/login-2">Login 2</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/login-3">Login 3</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/register">Register</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/register-2">Register 2</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/register-3">Register 3</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/404">404 Page</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-user"></i> Users <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/users">All Users</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/users/1">User Profile</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="http://laraspace.in/admin/todos"><i class="icon-fa icon-fa-check"></i> Todo App </a>
                    </li>
                    <li class="">
                        <a href="#"><i class="icon-fa icon-fa-cogs"></i> Settings <span class="icon-fa arrow icon-fa-fw"></span> </a>
                        <ul aria-expanded="true" class="collapse">
                            <li class="">
                                <a href="http://laraspace.in/admin/settings/social">Social</a>
                            </li>
                            <li class="">
                                <a href="http://laraspace.in/admin/settings/mail">Mail Driver</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content" id="dashboardPage">
            @yield('content')
        </div>
        <footer class="site-footer">
            <div class="text-right">
                Powered by <a href="http://bytefury.com/" target="_blank">Bytefury</a>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    {{-- <script src="{{ asset('js/plugins7790.js') }}"></script> --}}
    @yield('script')
    <script src="{{ asset('js/skintools.js') }}"></script>
    <script src="{{ asset('js/appe91a.js') }}"></script>
    <script src="{{ asset('js/pace.js') }}"></script>
</body>
<!-- Mirrored from laraspace.in/admin/dashboard/ecommerce by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2017 01:37:33 GMT -->

</html>
