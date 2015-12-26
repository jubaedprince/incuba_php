@extends('app')


@section('breadcrumb_page_name')
    Register
@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/articles">Home</a>
        </li>

        <li>
           /
        </li>


        <li>
            <a href="/auth/login">Login</a>
        </li>

        <li>/</li>
        <li class="c-state_active">Register</li>
    </ul>
@stop

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">


                <div class="panel-body">
                    <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                    <p>Please fill in below form to create an account with us</p>
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                    <form action="/auth/register" method="POST" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="signup-fullname" class="hide">Fullname</label>
                            <input type="text" class="form-control input-lg c-square" id="signup-fullname" placeholder="Full Name"  value="{{ old('name') }}" name="name"> </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="signup-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email" name="email" value="{{ old('email') }}"> </div>
                            <div class="form-group">
                                <label for="signup-password" class="hide">Password</label>
                                <input type="password" class="form-control input-lg c-square" id="signup-password" placeholder="Password" name="password"> </div>

                            <label for="signup-password" class="hide">Password</label>
                            <input type="password" class="form-control input-lg c-square" id="signup-password" placeholder="Password again" name="password_confirmation"> </div>
                            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Register</button>
                            <a href="/auth/login" class="c-btn-forgot" >Back To Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection