@extends('app')


@section('breadcrumb_page_name')
    Write Article
@stop

@section('breadcrumb_links')
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
        <li>
            <a href="/">Home</a>
        </li>
        <li>/</li>

        <li>
            <a href="/articles">Articles</a>
        </li>
        <li>/</li>

        <li class="c-state_active">Write</li>
    </ul>
@stop

@section('content')
    <h1>Write a New Article</h1>
    <hr/>
    {!! Form::open(['action' => 'OpportunityController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Opportunity', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop