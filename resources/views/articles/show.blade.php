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
                            <span class="c-font-uppercase">20 May 2015, 10:30AM</span>
                        </div>
                        <ul class="c-tags c-theme-ul-bg">
                            <li>ux</li>
                            <li>marketing</li>
                            <li>events</li>
                        </ul>
                        <div class="c-comments">
                            <a href="#">
                                <i class="icon-speech"></i> 30 comments</a>
                        </div>
                    </div>
                    <div class="c-desc">
                        <p>
                            {{$article->body}}
                        </p>
                    </div>
                    <div class="c-comments">
                        @if (count($article->comments()) > 0)
                            
                        @endif
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold">Comments(30)</h3>
                            <div class="c-line-left"></div>
                        </div>
                        <div class="c-comment-list">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" alt="" src="/assets/base/img/content/team/team1.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#" class="c-font-bold">Sean</a> on
                                        <span class="c-date">23 May 2015, 10:40AM</span>
                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" alt="" src="/assets/base/img/content/team/team3.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#" class="c-font-bold">Strong Strong</a> on
                                        <span class="c-date">21 May 2015, 11:40AM</span>
                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" alt="" src="/assets/base/img/content/team/team4.jpg"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="#" class="c-font-bold">Emma Stone</a> on
                                                <span class="c-date">30 May 2015, 9:40PM</span>
                                            </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" alt="" src="/assets/base/img/content/team/team7.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#" class="c-font-bold">Nick Nilson</a> on
                                        <span class="c-date">30 May 2015, 9:40PM</span>
                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                            </div>
                        </div>
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold">Leave A Comment</h3>
                            <div class="c-line-left"></div>
                        </div>
                        <form action="/articles/{{$article->id}}/comments" method="POST">
                            <div class="form-group">
                                <textarea rows="8" name="body" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-md c-btn-sbold btn-block c-btn-square">Submit</button>
                            </div>
                        </form>
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