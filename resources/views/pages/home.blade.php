<!DOCTYPE html>
<!--
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.5
Version: 1.3.4
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Incuba | We will help you</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN THEME STYLES -->
    <link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="assets/base/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
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

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
    <section class="c-layout-revo-slider c-layout-revo-slider-4">
        <div class="tp-banner-container c-theme" style="height: 620px">
            <div class="tp-banner">
                <ul>
                    <!--BEGIN: SLIDE #1 -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                        <img alt="" src="assets/base/img/content/backgrounds/bg-43.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-customin="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Back.easeOut" data-splitin="none" data-splitout="none"
                             data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                            <h3 class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block"> TAKE CONTROL BY
                                <br>STORM WITH INCUBA </h3>
                        </div>
                        <div class="caption lft" data-x="center" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-easing="easeOutExpo">
                            <a href="#" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Learn More</a>
                        </div>
                    </li>
                    <!--END -->
                    <!--BEGIN: SLIDE #2 -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                        <img alt="" src="assets/base/img/content/backgrounds/bg-20.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-customin="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Back.easeOut" data-splitin="none" data-splitout="none"
                             data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                            <h3 class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block"> INCUBA IS SOLUTION
                                <br>TO EVERY DEVELOPMENT </h3>
                        </div>
                        <div class="caption lft" data-x="center" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-easing="easeOutExpo">
                            <a href="#" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Learn More</a>
                        </div>
                    </li>
                    <!--END -->
                    <!--BEGIN: SLIDE #3 -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="6000" data-thumb="">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img alt="" src="assets/base/img/content/backgrounds/bg-19.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="visible-xs" />
                        <div class="caption fulllscreenvideo tp-videolayer hidden-xs" data-x="0" data-y="0" data-speed="600" data-start="1000" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power4.easeOut" data-autoplay="true"
                             data-autoplayonlyfirsttime="false" data-nextslideatend="true" data-videowidth="100%" data-videoheight="100%" data-videopreload="meta" data-videomp4="assets/base/media/video/video-2.mp4" data-videowebm="" data-videocontrols="none"
                             data-forcecover="1" data-forcerewind="on" data-aspectratio="16:9" data-volume="mute" data-videoposter="assets/base/img/layout/sliders/revo-slider/base/blank.png"> </div>
                        <div class="caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-30" data-speed="500" data-start="1000" data-customin="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Back.easeOut" data-splitin="none" data-splitout="none"
                             data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                            <h3 class="c-main-title-square c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block"> Let us show you
                                <br>Unlimited possibilities </h3>
                        </div>
                        <div class="caption lft" data-x="center" data-y="center" data-voffset="130" data-speed="900" data-start="2000" data-easing="easeOutExpo">
                            <a href="#" class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">Life</a>
                        </div>
                        <div class="tp-caption arrowicon customin rs-parallaxlevel-0 visible-xs" data-x="center" data-y="bottom" data-hoffset="0" data-voffset="-60" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500" data-start="2000" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 13;">
                            <div class="rs-slideloop" data-easing="Power3.easeInOut" data-speed="0.5" data-xs="-5" data-xe="5" data-ys="0" data-ye="0">
                                        <span class="c-video-hint c-font-15 c-font-sbold c-font-center c-font-dark"> Tap to play video
                                            <i class="icon-control-play"></i>
                                        </span>
                            </div>
                        </div>
                    </li>
                    <!--END -->
                </ul>
            </div>
        </div>
    </section>
    <!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
    <div class="container">
        <div class="row">
            <div class="c-content-blog-post-card-1-slider" data-slider="owl" data-items="3" data-auto-play="8000" style="margin-top:10%">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">Opportunities</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <!-- End-->
                <!-- Begin: Owlcarousel -->
                <div class="owl-carousel owl-theme c-theme">
                    @foreach($opportunities as $opportunity)
                        <div class="item">
                            <div class="c-content-blog-post-card-1 c-option-2">
                                <div class="c-media c-content-overlay">

                                    <img class="c-overlay-object img-responsive" src="/{{$opportunity->image}}" alt=""> </div>
                                <div class="c-body">
                                    <div class="c-title c-font-uppercase c-font-bold">
                                        <a href="/opportunity/{{$opportunity->id}}">{{$opportunity->title}}</a>
                                    </div>

                                    <p> {{$opportunity->intro}}</p>

                                    @if(Auth::check() && Auth::user()->isAdmin())
                                        {!! Form::open(array('route' => array('opportunity.destroy', $opportunity->id), 'method' => 'delete')) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                        {!! Form::close() !!}
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End-->
            </div>
        </div>

        <div class="row">
            <div class="c-content-title-1" style="margin-top:10%">
                <h3 class="c-center c-font-uppercase c-font-bold">Articles</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="col-md-12">
                <div class="c-content-blog-post-1-list">
                    @foreach($articles as $article)
                        <div class="c-content-blog-post-1">
                            @if ($article->image)
                                <div class="c-media">
                                    <div class="c-content-media-2" style="background-image: url('/{{$article->image}}'); min-height: 360px;"></div>
                                </div>
                            @endif
                            <div class="c-title c-font-bold c-font-uppercase">
                                <a href="{{action('ArticlesController@show', [$article->id] )}}">{{$article->title}}</a>
                            </div>
                            <div class="c-desc">
                                {{$article->body}}
                                <a href="{{action('ArticlesController@show', [$article->id] )}}">read more...</a>
                            </div>
                            <div class="c-panel">
                                <div class="c-author">
                                    <a href="#">By
                                        <span class="c-font-uppercase">{{$article->user->name}}</span>
                                    </a>
                                </div>
                                <div class="c-date">on
                                    <span class="c-font-uppercase">{{$article->created_at->diffForHumans()}}</span>
                                </div>
                                <ul class="c-tags c-theme-ul-bg">
                                    <li>{{$article->category->name}}</li>
                                </ul>

                                <div class="c-comments">
                                    <a href="{{action('ArticlesController@show', [$article->id] )}}">
                                        <i class="icon-speech"></i> {{count($article->comments)}} comments</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-6">
    <div class="c-postfooter c-bg-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey">2015 &copy; JANGO
                        <span class="c-font-grey-3">All Rights Reserved.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
<script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
<script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="assets/base/js/components.js" type="text/javascript"></script>
<script src="assets/base/js/components-shop.js" type="text/javascript"></script>
<script src="assets/base/js/app.js" type="text/javascript"></script>
<script>
    $(document).ready(function()
    {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->
<!-- BEGIN: PAGE SCRIPTS -->
<script>
    $(document).ready(function()
    {
        var slider = $('.c-layout-revo-slider .tp-banner');
        var cont = $('.c-layout-revo-slider .tp-banner-container');
        var height = (App.getViewPort().width < App.getBreakpoint('md') ? 1024 : 620);
        var api = slider.show().revolution(
                {
                    delay: 15000,
                    startwidth: 1170,
                    startheight: height,
                    navigationType: "hide",
                    navigationArrows: "solo",
                    touchenabled: "on",
                    onHoverStop: "on",
                    keyboardNavigation: "off",
                    navigationStyle: "circle",
                    navigationHAlign: "center",
                    navigationVAlign: "center",
                    fullScreenAlignForce: "off",
                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",
                    spinner: "spinner2",
                    forceFullWidth: "on",
                    hideTimerBar: "on",
                    hideThumbsOnMobile: "on",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "on",
                    hideArrowsOnMobile: "on",
                    hideThumbsUnderResolution: 0,
                    videoJsPath: "rs-plugin/videojs/",
                });
    }); //ready
</script>
<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->


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