@extends('app')

@section('content')
Name {{$user->name}}
<br>
Email
{{$user->email}}

@stop