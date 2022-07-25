@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">Title</th>
                                <th class="text-center">Body</th>
                                <th class="text-center">Create Time</th>
                                <th class="text-center">Create By</th>
                                <th class="text-center">Action</th>
                            </tr>               
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>{{$post->created_at}}</td>
                                        <td>{{$post->user->name}}</td>
                                        <td>
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>

                                            {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id], 'method'=>'post','class'=>'pull-right']) !!}

                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        {{-- {!! $posts->render() !!} --}}
                    @else
                        <p>You have no post</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
