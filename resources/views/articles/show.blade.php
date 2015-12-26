@extends('app');

@section('breadcrumb_page_name')
    {{$article->title}}
@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/articles">Home</a>
        </li>
        <li>/</li>
        <li class="c-state_active"> {{$article->title}}</li>
    </ul>
@stop
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="c-content-blog-post-1-view">
                <div class="c-content-blog-post-1">
                    <div class="c-media">
                        <div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="4000">
                            <div class="owl-carousel owl-theme c-theme owl-single">
                                <div class="item">
                                    <div class="c-content-media-2" style="background-image: url({{URL::asset('/assets/base/img/content/misc/latest-work-3.jpg')}}); min-height: 460px;"> </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-media-2" style="background-image: url({{URL::asset('/assets/base/img/content/misc/latest-work-7.jpg')}}); min-height: 460px;"> </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-media-2" style="background-image: url({{URL::asset('/assets/base/img/content/misc/9.jpg')}}); min-height: 460px;"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-title c-font-bold c-font-uppercase">
                        {{$article->title}}
                    </div>
                    <div class="c-panel c-margin-b-30">
                        <div class="c-author">
                            <a href="#">By
                                <span class="c-font-uppercase">Nick Strong</span>
                            </a>
                        </div>
                        <div class="c-date">on
                            <span class="c-font-uppercase">{{$article->created_at->diffForHumans()}}</span>
                        </div>
                        <ul class="c-tags c-theme-ul-bg">
                            <li>ux</li>
                            <li>marketing</li>
                            <li>events</li>
                        </ul>

                    </div>
                    <div class="c-desc">
                        <p>
                            {{$article->body}}
                        </p>
                    </div>
                    <div class="c-comments">
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold">Comments({{count($article->comments)}})</h3>
                            <div class="c-line-left"></div>
                        </div>
                        <div class="c-comment-list">
                            @if (count($article->comments) > 0)
                                @foreach ($article->comments as $comment)
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" alt="" src="/assets/base/img/content/team/team1.jpg"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="#" class="c-font-bold">{{$comment->user->name}}</a> on
                                                <span class="c-date">{{$comment->created_at->diffForHumans()}}</span>
                                            </h4>{{$comment->body}} </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold">Leave A Comment</h3>
                            <div class="c-line-left"></div>
                        </div>

                        @if(Auth::user())
                            <form action="/articles/{{$article->id}}/comments" method="POST">
                                <div class="form-group">
                                    <textarea rows="8" name="body" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-md c-btn-sbold btn-block c-btn-square">Submit</button>
                                </div>
                            </form>
                        @else
                            <a href="/auth/login">Please login to comment.</a>
                        @endif

                    </div>
                </div>
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
                    <li>
                        <a href="#">Web Development(2)</a>
                    </li>
                    <li>
                        <a href="#">UX Design(12)</a>
                    </li>
                    <li>
                        <a href="#">Mobile Development(5)</a>
                    </li>
                    <li>
                        <a href="#">Internet Marketing(7)</a>
                    </li>
                    <li>
                        <a href="#">Social Networks(11)</a>
                    </li>
                    <li>
                        <a href="#">Web Design(18)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop