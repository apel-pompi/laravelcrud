@extends('layout.app')
@section('content')

<h2>Show Posts Page</h2>

    <a href="/posts" class="btn btn-default">Go Back</a>
   <h1>{{$posts->title}}</h1>
   <img style="width: 100%" src="/storage/uploads/{{$posts->cover_image}}" alt="">
    <div>
        {{$posts->body}}
    </div>
    <small>{{$posts->created_at}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $posts->user_id)
            
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-warning">Edit</a>

            {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$posts->id], 'method'=>'post','class'=>'pull-right']) !!}

            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

            {!! Form::close() !!}
        @endif
    @endif
@endsection