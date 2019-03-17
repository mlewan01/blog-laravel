@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 class="d-inline">Your Blog posts</h3>
                    <a href="/posts/create" class="btn btn-primary mb-2 mt-n1 float-right">new post</a>
                    @if(count($posts) > 0)
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="/posts/{{$post->id}}">{{ $post->title }}</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'd-inline'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                    <p>you do not have any posts....</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
