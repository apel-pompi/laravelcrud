@extends('layout.app')

@section('content')
    <p>{{$title}}</p>   
    @if (count($service)>0)
        <ul class="list-group">
            @foreach ($service as $key)
                <li class="list-group-item">{{$key}}</li>
            @endforeach     
        </ul>   
    @endif 
@endsection