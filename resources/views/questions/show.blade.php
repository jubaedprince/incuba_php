@extends('app');

@section('breadcrumb_page_name')
    Question
@stop

@section('breadcrumb_links')

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
                                Question
                            </div>
                            <div class="c-panel c-margin-b-30">
                                <div class="c-author">
                                    <a href="#">By
                                        <span class="c-font-uppercase">{{$question->user->name}}</span>
                                    </a>
                                </div>
                                <div class="c-date">on
                                    <span class="c-font-uppercase">{{$question->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                            <div class="c-desc">
                                <p>
                                    {{$question->question}}
                                </p>
                            </div>
                            <div class="c-comments">

                                <div class="c-comment-list">
                                    @if (count($question->answers) > 0)

                                        <div class="c-content-title-1">
                                            <h3 class="c-font-uppercase c-font-bold">Answers</h3>
                                            <div class="c-line-left"></div>
                                        </div>

                                        @foreach ($question->answers as $answer)
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="" src="/assets/base/img/content/team/team1.jpg"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#" class="c-font-bold">{{$answer->user->name}}</a> on
                                                        <span class="c-date">{{$answer->created_at->diffForHumans()}}</span>
                                                    </h4>
                                                    <div>{{$answer->answer}} </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">Leave An Answer</h3>
                                    <div class="c-line-left"></div>
                                </div>

                                @if(Auth::user())
                                    <form action="/questions/{{$question->id}}/answers" method="POST">
                                        <div class="form-group">
                                            <textarea rows="8" name="answer" placeholder="Write your answer here ..." class="form-control c-square"></textarea>
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
            </div>
        </div>
    </div>
    <!-- END: BLOG LISTING  -->
    <!-- END: PAGE CONTENT -->
@stop