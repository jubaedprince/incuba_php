@extends('app')

@section('content')

    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: BLOG LISTING -->
    <div class="c-content-box c-size-md">
        <div class="container">
            <!-- Begin: Testimonals 1 component -->
            <div class="c-content-team-1-slider" data-slider="owl" data-items="3">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="c-content-person-1 c-option-2">
                            <div class="c-caption c-content-overlay">
                                <img class="c-overlay-object img-responsive" src="assets/base/img/content/team/team13.jpg" alt=""> </div>
                            <div class="c-body">
                                <div class="c-head">
                                    <div class="c-name c-font-uppercase c-font-bold">{{$user->name}}</div>
                                    <ul class="c-socials c-theme-ul-ul">
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-dribbble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="c-position">
                                    <i class="fa fa-envelope"></i> {{$user->email}}
                                </div>
                                <p> Lorem ipsum dolor sit amet, dolor nemo amet elit. Nulla nemo consequuntur. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End-->
            </div>
            <!-- End-->
        </div>
    </div>
    <!-- END: BLOG LISTING  -->
    <!-- END: PAGE CONTENT -->

@stop