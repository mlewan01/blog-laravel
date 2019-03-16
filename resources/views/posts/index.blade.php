@extends('layouts.app')

@section('content')
    <h1>posts !</h1>
    @if(count($posts) > 0)
        {{--<div class="card-columns">--}}
        @foreach($posts as $p)
            <div class="card m-2">
                <div class="card-body">
                    <h3 class="card-title text-left"><a href="/posts/{{$p->id}}">{{ $p->title }}</a></h3>
                    <p class="card-text text-sm-left">Written on {{$p->created_at}}</p>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
        {{--</div>--}}
    @else
        <p>no posts found</p>
    @endif

@endsection