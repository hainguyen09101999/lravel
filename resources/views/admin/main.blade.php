<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>
        @isset($title){{ $title }}@endisset
    </title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{asset('assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('assets/css/main.min.css')}}" rel="stylesheet" />

    <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="{{route('home.admin')}}">
                    <span class="brand">Admin   
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" style="display: flex">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" name="key" placeholder="Search here...">
                            </div>

                            <button type="submit" class="btn btn-primarry">
                                    <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 New</strong> Notifications</span>
                                    <a class="pull-right" href="javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="{{asset('assets/img/avatar.jpg')}}" />
                            {{Auth::user()->name}}
                        <i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="{{route('out')}}"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
   
            </div>
        </header>
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{asset('assets/img/avatar.jpg')}}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong"> {{Auth::user()->name}}</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="{{route('home.admin')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">Menu</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Sản phẩm</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('add-product')}}">Thêm mới sản phẩm</a>
                            </li>
                            <li>
                                <a href="{{route('all-product')}}">Hiển thị sản phẩmt</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
                @yield('main.index');
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <div class="theme-config">
        <div class="theme-config-toggle"><i class="fa fa-cog theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
        <div class="theme-config-box">
            <div class="text-center font-18 m-b-20">SETTINGS</div>
            <div class="font-strong">LAYOUT OPTIONS</div>
            <div class="check-list m-b-20 m-t-10">
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedNavbar" type="checkbox" checked>
                    <span class="input-span"></span>Fixed navbar</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedlayout" type="checkbox">
                    <span class="input-span"></span>Fixed layout</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input class="js-sidebar-toggler" type="checkbox">
                    <span class="input-span"></span>Collapse sidebar</label>
            </div>
            <div class="font-strong">LAYOUT STYLE</div>
            <div class="m-t-10">
                <label class="ui-radio ui-radio-gray m-r-10">
                    <input type="radio" name="layout-style" value="" checked="">
                    <span class="input-span"></span>Fluid</label>
                <label class="ui-radio ui-radio-gray">
                    <input type="radio" name="layout-style" value="1">
                    <span class="input-span"></span>Boxed</label>
            </div>
            <div class="m-t-10 m-b-10 font-strong">THEME COLORS</div>
            <div class="d-flex m-b-20">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Default">
                    <label>
                        <input type="radio" name="setting-theme" value="default" checked="">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-white"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue">
                    <label>
                        <input type="radio" name="setting-theme" value="blue">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green">
                    <label>
                        <input type="radio" name="setting-theme" value="green">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple">
                    <label>
                        <input type="radio" name="setting-theme" value="purple">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange">
                    <label>
                        <input type="radio" name="setting-theme" value="orange">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink">
                    <label>
                        <input type="radio" name="setting-theme" value="pink">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
            </div>
            <div class="d-flex">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="White">
                    <label>
                        <input type="radio" name="setting-theme" value="white">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue light">
                    <label>
                        <input type="radio" name="setting-theme" value="blue-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green light">
                    <label>
                        <input type="radio" name="setting-theme" value="green-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple light">
                    <label>
                        <input type="radio" name="setting-theme" value="purple-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange light">
                    <label>
                        <input type="radio" name="setting-theme" value="orange-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink light">
                    <label>
                        <input type="radio" name="setting-theme" value="pink-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{asset('assets/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('assets/js/app.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{asset('assets/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="" type="text/javascript">
    <script type="text/javascript"></script>
       $(document).ready( function () {
            $('#myTable').DataTable();
       });
       
    </script>

    @yield('custom.js')
</body>
</html>