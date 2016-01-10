@extends('app')

@section('breadcrumb_page_name')
    Edit Profile
@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/">Home</a>
        </li>
        <li>/</li>

        <li>
            <a href="/profile">Profile</a>
        </li>

        <li>/</li>

        <li class="c-state_active">Edit</li>
    </ul>
@stop

@section('content')
    <h1>Edit Profile</h1>
    <hr/>
    {!! Form::open(['action' => 'ProfileController@update', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', Auth::user()->name, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('about', 'About') !!}
        {!! Form::textarea('about', Auth::user()->about, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo', 'Photo') !!}
        {!! Form::file('photo')!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop