@extends('app');

@section('breadcrumb_page_name')

@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/articles">Home</a>
        </li>
        <li>/</li>
        <li class="c-state_active"> Title</li>
    </ul>
@stop
@section('content')
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: BLOG LISTING -->
    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="c-content-blog-post-1-view">
                        <div class="c-content-blog-post-1">
                            <div class="c-title c-font-bold c-font-uppercase">
                               {{$opportunity->title}}
                            </div>
                            <div class="c-desc">
                                <p>
                                    {{$opportunity->description}}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: BLOG LISTING  -->
    <!-- END: PAGE CONTENT -->
@stop