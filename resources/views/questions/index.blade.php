@extends('app');


@section('breadcrumb_page_name')
    All Questions
@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/">Home</a>
        </li>
        <li>/</li>
        <li class="c-state_active"> Questions</li>
    </ul>
@stop

@section('content')
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: BLOG LISTING -->
    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="row">
                <a href="/questions/create">
                    <button type="button" class="btn btn-primary c-btn-uppercase c-btn-bold pull-right">
                        <i class="fa fa-plus"></i> Ask new question
                    </button>
                </a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="c-content-tab-1 c-theme c-margin-t-30">
                        <div class="tab-content">
                            <div class="tab-pane active" id="blog_recent_posts">
                                <ul class="c-content-recent-posts-1">
                                    @foreach($questions as $question)
                                        <li>
                                            <div class="c-post">
                                                <a href="/questions/{{$question->id}}" class="c-title"> {{$question->question}} </a>
                                                <div class="c-date"> {{$question->created_at->diffForHumans()}}</div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
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