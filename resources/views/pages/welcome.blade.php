@extends('layouts.app')

@section('title','| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog!</h1>
                <p class="lead">// Displays help for a given command
                    <br/>php artisan --help OR -h
                    <br/>// Do not output any message
                    <br/>php artisan --quiet OR -q
                    <br/>// Display this application version
                    <br/>php artisan --version OR -V
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a>
                    <a href="/posts/create" class="btn btn-success btn-lg">Create New Post</a>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        @if (count($posts))
            <div class="col-md-8">
                <div class="post">
                    @foreach ($posts as $post)
                        <h3>{{ $post->title }}</h3>
                        <p>{{ str_limit($post->body , 300, '...') }}</p>
                        <a href="{{ url('blog/'. $post->slug)}}" class="btn btn-primary">Read more</a>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
            <br/>// The environment the command should run under
            <br/>php artisan --env
            <br/>// -v|vv|vvv Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3
            for debug
            <br/>php artisan --verbose
        </div>
    </div>
@endsection
