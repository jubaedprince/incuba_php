@extends('app')

@section('breadcrumb_page_name')
   Login
@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/articles">Home</a>
        </li>
        <li>/</li>
        <li class="c-state_active"> Login</li>
    </ul>
@stop

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">

                <div class="panel-body">
                    <h3 class="c-font-24 c-font-sbold">We are excited!</h3>
                    <p>Let's make today a great day!</p>

                    <!-- Display Validation Errors -->
                    @include('common.errors')


                    <form action="/auth/login" method="POST" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="login-email" class="hide">Email</label>
                            <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email"  value="{{ old('email') }}" name="email" > </div>
                        <div class="form-group">
                            <label for="login-password" class="hide">Password</label>
                            <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password" name="password" > </div>
                        <div class="form-group">
                            <div class="c-checkbox">
                                <input type="checkbox" id="login-rememberme" class="c-check">
                                <label for="login-rememberme" class="c-font-thin c-font-17">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Remember Me </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                            <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                        </div>

                    </form>
                </div>
                <div class="modal-footer c-no-border">
                    <span class="c-text-account">Don't Have An Account Yet ?</span>
                    <a href="/auth/register" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Register!</a>
                </div>

            </div>
        </div>
    </div>
@endsection