@extends('layout.app')
@section('content')

    <h1>Post Create page</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method'=>'post', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '',['class'=>'form-control','palceholder'=>'Enter Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '',['class'=>'form-control','palceholder'=>'Enter Body'])}}
    </div>
    <div class="form-group">
        {{ Form::file('cover_image') }}
    </div>
    {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection