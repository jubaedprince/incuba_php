@extends('app');


@section('breadcrumb_page_name')
    Categories
@stop


@section('content')
    <a href="/category/create">
        <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New Category
        </button>
    </a>


    <div class="row">
        <div class="col-md-12">
            <p>If you delete a category, it will delete all the articles of that category.</p>
            <div class="c-content-blog-post-1-list">

                @foreach ($categories as $category)

                        <div class="c-desc">
                            {{$category->name}}
                        </div>

                    {!! Form::open(array('route' => array('category.destroy', $category->id), 'method' => 'delete')) !!}
                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                    {!! Form::close() !!}
                    </div>
                @endforeach

            </div>
        </div>

    </div>
@stop