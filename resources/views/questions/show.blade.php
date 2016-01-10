@extends('app');

@section('breadcrumb_page_name')
    Question
@stop

@section('breadcrumb_links')

@stop
@section('content')

    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: BLOG LISTING -->
    <div class="row">
        <div class="col-md-12">
            <div class="c-content-tab-1 c-theme c-margin-t-30">
                <div class="tab-content">
                    <div class="tab-pane active" id="blog_recent_posts">
                        <ul class="c-content-recent-posts-1">
                            <li>
                                <div class="c-post">
                                    <a class="c-title">
                                        {{$question->question}}
                                    </a>
                                    <div class="c-date">
                                        By
                                        <a href="#">
                                            <span class="c-font-uppercase">{{$question->user->name}}</span>
                                        </a>On
                                        {{$question->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                @if (count($question->answers) > 0)
                                    @foreach ($question->answers as $answer)
                                        <div class="c-post">
                                            <h4>
                                                {{$answer->answer}}
                                            </h4>
                                            <div class="c-date">
                                                By
                                                <span class="c-font-uppercase">{{$answer->user->name}}</span>,
                                                {{$answer->created_at->diffForHumans()}}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <br>

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

    <!-- END: BLOG LISTING  -->
    <!-- END: PAGE CONTENT -->
@stop