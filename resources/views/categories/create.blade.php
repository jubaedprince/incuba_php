@extends('app')


@section('breadcrumb_page_name')
    Create Category
@stop


@section('content')
    <h1>Create a New Category</h1>
    <hr/>
    {!! Form::open(['action' => 'CategoryController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Category', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop