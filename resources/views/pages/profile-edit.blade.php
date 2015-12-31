@extends('app')

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
                                    <h3 class="c-font-uppercase c-font-bold">Edit user profile</h3>
                                    <div class="c-line-left"></div>
                                </div>

                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <input autofocus type="text" name="title" placeholder="Write name here ..." class="form-control c-square" />
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="image" />
                                    </div>

                                    <div class="form-group">
                                        <input autofocus type="text" name="email" placeholder="Write email here ..." class="form-control c-square" />
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-md c-btn-sbold btn-block c-btn-square">Submit</button>
                                    </div>
                                </form>
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