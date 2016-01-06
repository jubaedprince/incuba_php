@extends('app');


@section('breadcrumb_page_name')
    All Opportunities
@stop

@section('breadcrumb_links')

@stop

@section('content')
    <!-- BEGIN: BLOG LISTING -->
    <div class="c-content-box c-size-md">
        <div class="container">
            @if(Auth::check() && Auth::user()->isAdmin())
                <div class="row">
                    <a href="/opportunity/create">
                        <button type="button" class="btn btn-primary c-btn-uppercase c-btn-bold pull-right">
                            <i class="fa fa-plus"></i> create new opportunity
                        </button>
                    </a>
                </div>
            @endif

            <div class="c-content-blog-post-card-1-slider" data-slider="owl" data-items="3" data-auto-play="8000">
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

                                    <img class="c-overlay-object img-responsive" src="assets/base/img/content/stock2/06.jpg" alt=""> </div>
                                <div class="c-body">
                                    <div class="c-title c-font-uppercase c-font-bold">
                                        <a href="/opportunity/{{$opportunity->id}}">{{$opportunity->title}}</a>
                                    </div>

                                    <p> {{$opportunity->description}}</p>

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
            <!-- End-->
        </div>
    </div>
    <!-- END: BLOG LISTING  -->
@stop