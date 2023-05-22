<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <link rel="icon" href="http://html.codedthemes.com/gradient-able/files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../files/assets/pages/chart/radial/css/radial.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../files/assets/css/style.css')}}">
</head>
<body>

<div class="theme-loader">
    <div class="loader-track">
        <div class="loader-bar"></div>
    </div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <!------Navbar---->
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <div class="mobile-search">
                        <div class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/" style="margin-left: 22px;margin-top: -19px;">
                        <img class="img-fluid" src="{{URL::asset('assets\img\LOGO_LIGHT.png')}}" style="height: 62px;" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>




                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <a>
                                <span>bienvenue {!!Auth::guard('users')->user()->name!!}</span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification" >
                                <li>
                                    <a href="{{ route('users.auth.logout')}}">
                                        <i class="ti-layout-sidebar-left"></i>Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!--Menu Admin ---->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigation-label"></div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li >
                                <a href="{{ route('users.index')}}">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Accueil</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <!--Activités--->
                            <li class="pcoded-hasmenu">
                                <a href="{{ route('users.activites.add')}}">
                                    <span class="pcoded-micon"><i class="ti-clipboard"></i><b>P</b></span>
                                    <span class="pcoded-mtext">Proposer une activité</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>

                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="{{ route('users.auth.logout')}}">
                                    <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>P</b></span>
                                    <span class="pcoded-mtext">Déconnexion</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{URL::asset('../files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('../files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('../files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script src="{{URL::asset('../files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<script src="{{URL::asset('../files/bower_components/modernizr/js/modernizr.js')}}"></script>
<script src="{{URL::asset('../files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<script src="{{URL::asset('../files/assets/js/vertical/vertical-layout.min.js')}}"></script>
<script src="{{URL::asset('../files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{URL::asset('../files/assets/js/script.js')}}"></script>
<script src="{{URL::asset('../files/assets/js/pcoded.min.js')}}"></script>
<script src="{{URL::asset('../files/assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script src="{{URL::asset('../files/assets/pages/widget/amchart/light.js')}}"></script>
<script src="{{URL::asset('../files/assets/pages/widget/amchart/amcharts.js')}}"></script>
<script src="{{URL::asset('../files/assets/pages/widget/amchart/serial.js')}}"></script>
<script src="{{URL::asset('../files/assets/js/SmoothScroll.js')}}"></script>
<script src="{{URL::asset('../files/assets/pages/widget/excanvas.js ')}} "></script>

</body>

</html>
