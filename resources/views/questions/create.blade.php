@extends('app')


@section('breadcrumb_page_name')
    Ask a Question
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
                            <div class="c-comments">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">Create A Question</h3>
                                    <div class="c-line-left"></div>
                                </div>

                                @if(Auth::user())

                                    <form action="/questions" method="POST">
                                        <div class="form-group">
                                            <input autofocus type="text" name="question" placeholder="Write question here ..." class="form-control c-square" />
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