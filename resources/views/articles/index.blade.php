@extends('app');


@section('breadcrumb_page_name')
    Articles
@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/">Home</a>
        </li>
        <li>/</li>
        <li class="c-state_active"> Articles</li>
    </ul>
@stop

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="c-content-blog-post-1-list">

                @foreach ($articles as $article)
                    <div class="c-content-blog-post-1">
                        <div class="c-media">
                            <div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="4000">
                                <div class="owl-carousel owl-theme c-theme owl-single">
                                    <div class="item">
                                        <div class="c-content-media-2" style="background-image: url(/assets/base/img/content/stock/23.jpg); min-height: 360px;"> </div>
                                    </div>
                                    <div class="item">
                                        <div class="c-content-media-2" style="background-image: url(/assets/base/img/content/stock/34.jpg); min-height: 360px;"> </div>
                                    </div>
                                    <div class="item">
                                        <div class="c-content-media-2" style="background-image: url(/assets/base/img/content/stock/37.jpg); min-height: 360px;"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                @endforeach

            </div>
        </div>
        <div class="col-md-3">
            <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
            <div class="c-content-ver-nav">
                <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                    <h3 class="c-font-bold c-font-uppercase">Categories</h3>
                    <div class="c-line-left c-theme-bg"></div>
                </div>
                <ul class="c-menu c-arrow-dot1 c-theme">
                    @foreach(App\Category::all() as $category)
                       <li><a href="/articles?filterBycategory_id={{$category->id}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
@stop