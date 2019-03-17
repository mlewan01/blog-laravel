@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-dark">go back</a>
    <div class="card m-2">
        <div class="card-body py-3">
            <h3 class="card-title text-left"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
            <p class="card-text">{!! $post->body !!} </p>
        </div>
        <div class="card-footer py-1">
            <p class="card-text text-sm-left">Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></p>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id],
        'method' => 'POST', 'class' => 'd-inline'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </div>

@endsection