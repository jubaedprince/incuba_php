@extends('app')
@section('breadcrumb_page_name')
    Profile
@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/">Home</a>
        </li>
        <li>/</li>
        <li class="c-state_active"> Profile</li>
    </ul>
@stop

@section('content')

    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: BLOG LISTING -->
    <!-- Begin: Testimonals 1 component -->
    <div class="c-content-team-1-slider" data-slider="owl" data-items="3">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="c-content-person-1 c-option-2">
                    <div class="c-caption c-content-overlay">
                        <img class="c-overlay-object img-responsive" src="/{{$user->photo}}" alt=""> </div>
                    <div class="c-body">
                        <div class="c-head">
                            <div class="c-name c-font-uppercase c-font-bold">{{$user->name}}</div>
                        </div>
                        <div class="c-position">
                            <i class="fa fa-envelope"></i> {{$user->email}}
                        </div>
                        <p> {{$user->about}} </p>

                        @if(Auth::check())
                           <a href="/profile/edit">
                               <button type="submit" class="btn btn-danger btn-mini">Edit</button>
                           </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End-->
    </div>
    <!-- End-->
    <!-- END: BLOG LISTING  -->
    <!-- END: PAGE CONTENT -->

@stop