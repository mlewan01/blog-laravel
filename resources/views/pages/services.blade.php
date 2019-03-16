@extends('layouts.app')

@section('content')
    <h1>services</h1>
    <h2>dynamic title: {{$title}}</h2>
    <p>the laravel SERVICES</p>
    @if(count($services) > 0)
        <ul>
        @foreach($services as $ser)
            <li class="list-group-item">{{$ser}}</li>
        @endforeach
        </ul>
    @endif
@endsection

