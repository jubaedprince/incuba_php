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

                </div>
                <!-- END: BRAND -->

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

                        @if (Auth::check())

                            @if (Auth::user()->isAdmin())

                                <li>
                                    <a href="/category" class="c-link dropdown-toggle">Categories
                                        <span class="c-arrow c-toggler"></span>
                                    </a>

                                </li>

                                <li>
                                    <a href="/profile" class="c-link dropdown-toggle">Profile
                                        <span class="c-arrow c-toggler"></span>
                                    </a>

                                </li>
                            @endif
                        @endif

                        <li>
                            <a href="/questions" class="c-link dropdown-toggle">Questions
                                <span class="c-arrow c-toggler"></span>
                            </a>

                        </li>

                        <li>
                            <a href="/opportunity" class="c-link dropdown-toggle">Opportunity
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

                    </ul>
                </nav>
                <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
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


@yield('footer')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/567efec043462c597a6570f0/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>



</html>




