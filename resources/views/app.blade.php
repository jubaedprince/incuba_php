<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>INCUBA</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="{{URL::asset('/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/owl-carousel/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{URL::asset('/assets/base/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/base/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/assets/base/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="{{URL::asset('/assets/base/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="/articles" class="c-logo">
                        <img src="/assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo">
                        <img src="/assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo-inverse">
                        <img src="/assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-mobile-logo"> </a>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    <button class="c-cart-toggler" type="button">
                        <i class="icon-handbag"></i>
                        <span class="c-cart-number c-theme-bg">2</span>
                    </button>
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav">
                        <li class="c-active">
                            <a href="/" class="c-link dropdown-toggle">Home
                                <span class="c-arrow c-toggler"></span>
                            </a>

                        </li>

                        <li>
                            <a href="/articles" class="c-link dropdown-toggle">Articles
                                <span class="c-arrow c-toggler"></span>
                            </a>

                        </li>

                        @if (Auth::user())
                            <li>
                                <a href="/articles/create" class="c-link dropdown-toggle">Write
                                    <span class="c-arrow c-toggler"></span>
                                </a>

                            </li>
                        @endif

                        <li>
                            <a href="/forum" class="c-link dropdown-toggle">Discuss
                                <span class="c-arrow c-toggler"></span>
                            </a>

                        </li>

                        <li>
                            <a href="#" class="c-link dropdown-toggle">Opportunity
                                <span class="c-arrow c-toggler"></span>
                            </a>

                        </li>

                        <li>
                            <a href="/about" class="c-link dropdown-toggle">About
                                <span class="c-arrow c-toggler"></span>
                            </a>

                        </li>

                        <li>
                            <a href="/contact" class="c-link dropdown-toggle">Contact
                                <span class="c-arrow c-toggler"></span>
                            </a>

                        </li>

                        <li class="c-search-toggler-wrapper">
                            <a href="#" class="c-btn-icon c-search-toggler">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>

                        @if (Auth::guest())
                            <li>
                                <a href="/auth/login" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                    <i class="icon-user"></i> Login / Register</a>
                            </li>

                        @else
                            <li>
                                <a href="/auth/logout" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                    <i class="icon-user"></i>Sign Out</a>
                            </li>
                        @endif
                        <li class="c-quick-sidebar-toggler-wrapper">
                            <a href="#" class="c-quick-sidebar-toggler">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
            <!-- BEGIN: CART MENU -->
            <div class="c-cart-menu">
                <div class="c-cart-menu-title">
                    <p class="c-cart-menu-float-l c-font-sbold">2 item(s)</p>
                    <p class="c-cart-menu-float-r c-theme-font c-font-sbold">$79.00</p>
                </div>
                <ul class="c-cart-menu-items">
                    <li>
                        <div class="c-cart-menu-close">
                            <a href="#" class="c-theme-link">×</a>
                        </div>
                        <img src="/assets/base/img/content/shop2/24.jpg" />
                        <div class="c-cart-menu-content">
                            <p>1 x
                                <span class="c-item-price c-theme-font">$30</span>
                            </p>
                            <a href="shop-product-details-2.html" class="c-item-name c-font-sbold">Winter Coat</a>
                        </div>
                    </li>
                    <li>
                        <div class="c-cart-menu-close">
                            <a href="#" class="c-theme-link">×</a>
                        </div>
                        <img src="/assets/base/img/content/shop2/12.jpg" />
                        <div class="c-cart-menu-content">
                            <p>1 x
                                <span class="c-item-price c-theme-font">$30</span>
                            </p>
                            <a href="shop-product-details.html" class="c-item-name c-font-sbold">Sports Wear</a>
                        </div>
                    </li>
                </ul>
                <div class="c-cart-menu-footer">
                    <a href="shop-cart.html" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
                    <a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
                </div>
            </div>
            <!-- END: CART MENU -->
            <!-- END: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>
</header>
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                <p>To recover your password please fill in your email address</p>
                <form>
                    <div class="form-group">
                        <label for="forget-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email"> </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->

<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<nav class="c-layout-quick-sidebar">
    <div class="c-header">
        <button type="button" class="c-link c-close">
            <i class="icon-login"></i>
        </button>
    </div>
    <div class="c-content">
        <div class="c-section">
            <h3>Theme Colors</h3>
            <div class="c-settings">
                <span class="c-color c-default c-active" data-color="default"></span>
                <span class="c-color c-green1" data-color="green1"></span>
                <span class="c-color c-green2" data-color="green2"></span>
                <span class="c-color c-green3" data-color="green3"></span>
                <span class="c-color c-yellow1" data-color="yellow1"></span>
                <span class="c-color c-yellow2" data-color="yellow2"></span>
                <span class="c-color c-yellow3" data-color="yellow3"></span>
                <span class="c-color c-red1" data-color="red1"></span>
                <span class="c-color c-red2" data-color="red2"></span>
                <span class="c-color c-red3" data-color="red3"></span>
                <span class="c-color c-purple1" data-color="purple1"></span>
                <span class="c-color c-purple2" data-color="purple2"></span>
                <span class="c-color c-purple3" data-color="purple3"></span>
                <span class="c-color c-blue1" data-color="blue1"></span>
                <span class="c-color c-blue2" data-color="blue2"></span>
                <span class="c-color c-blue3" data-color="blue3"></span>
                <span class="c-color c-brown1" data-color="brown1"></span>
                <span class="c-color c-brown2" data-color="brown2"></span>
                <span class="c-color c-brown3" data-color="brown3"></span>
                <span class="c-color c-dark1" data-color="dark1"></span>
                <span class="c-color c-dark2" data-color="dark2"></span>
                <span class="c-color c-dark3" data-color="dark3"></span>
            </div>
        </div>
        <div class="c-section">
            <h3>Header Type</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed" />
                <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid" /> </div>
        </div>
        <div class="c-section">
            <h3>Header Mode</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed" />
                <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static" /> </div>
        </div>
        <div class="c-section">
            <h3>Mega Menu Style</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark" />
                <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
        </div>
        <div class="c-section">
            <h3>Font Style</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default" />
                <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
        </div>
    </div>
</nav>
<!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">@yield('breadcrumb_page_name')</h3>
            </div>

            @yield('breadcrumb_links')

        </div>
    </div>
    <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: BLOG LISTING -->
    <div class="c-content-box c-size-md">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- END: BLOG LISTING  -->
    <!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
    <div class="c-postfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col" align="center">
                    <p class="c-copyright c-font-grey">2015 &copy; INCUBA
                        <span class="c-font-grey-3">All Rights Reserved.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="..//assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="{{URL::asset('/assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/jquery.easing.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/base/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="{{URL::asset('/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="{{URL::asset('/assets/base/js/components.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/assets/base/js/app.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function()
    {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>

</html>




