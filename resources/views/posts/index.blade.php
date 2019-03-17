@extends('layouts.app')

@section('content')
    <h1>posts !</h1>
    @if(count($posts) > 0)
        {{--<div class="card-columns">--}}
        @foreach($posts as $post)
            <div class="card m-2">
                <div class="card-body">
                    <h3 class="card-title text-left"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                    <p class="card-text text-sm-left">Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></p>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
        {{--</div>--}}
    @else
        <p>no posts found</p>
    @endif

@endsection