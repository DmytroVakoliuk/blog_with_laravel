@extends('main')

@section('title','| All Posts')

{{--@section('postActive','class=active')--}}

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a type="button" href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary
                btn-h1-spacing">Create New Post</a>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        {{--  <td>{{ substr($post->body , 0, 100) }}{{ strlen($post->body) > 100 ? '...' : '' }}</td> --}}
                        <td>{{ str_limit($post->body , 100, '&raquo;') }}</td>
                        <td>{{ date('j M Y H:i', strtotime( $post->created_at )) }}</td>
                        <td>{{ date('j M Y H:i', strtotime( $post->updated_at )) }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Edit </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-right">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

    {{--@foreach($posts as $post)--}}
    {{--<div class="jumbotron">--}}
    {{--<h2 style="color: forestgreen">--}}
    {{--{{ $post->title }}--}}
    {{--</h2>--}}
    {{--<p class="lead">--}}
    {{--{{ $post->body }}--}}
    {{--</p>--}}
    {{--<p style="float: right">--}}
    {{--{{ date('j M Y H:i', strtotime($post->created_at)) }}--}}
    {{--</p>--}}
    {{--<br><hr>--}}
    {{--</div>--}}
    {{--@endforeach--}}
@stop
