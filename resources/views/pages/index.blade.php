@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel Blog.</h1>
        <p>Lorem Ipsum dolore. Lorem Ipsum dolore. Lorem Ipsum dolore. Lorem Ipsum dolore. Lorem Ipsum dolore. Lorem Ipsum dolore. </p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a> <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Register</a></p>
    </div>
@endsection