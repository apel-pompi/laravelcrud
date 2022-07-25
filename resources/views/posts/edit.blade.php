@extends('layout.app')
@section('content')
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$posts->id], 'method'=>'post', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $posts->title,['class'=>'form-control','palceholder'=>'Enter Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $posts->body,['class'=>'form-control','palceholder'=>'Enter Body'])}}
    </div>
    <div class="form-group">
        {{ Form::file('cover_image') }}
    </div>
    {{ Form::hidden('_method', 'put')}}
    {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection