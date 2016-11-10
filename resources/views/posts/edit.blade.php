@extends('layouts.app')

@section('title','| Edit Blog Post')

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
            <div class="col-md-8">
                {{--title must mach title form DB--}}
                {{ Form::label('some_title', 'Title:') }}
                {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

                {{ Form::label('slug', 'Slug', ['class' => 'form-spacing-top']) }}
                {{ Form::text('slug', null, array('class' => 'form-control')) }}

                {{ Form::label('some_body', 'Body:', ['class' => 'form-spacing-top']) }}
                {{ Form::textarea('body', null, ['class' => 'form-control']) }}

            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Created At:</dt>
                        <dd>{{ date('j M Y H:i',strtotime( $post->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Last Updated At:</dt>
                        <dd>{{ date('j M Y H:i', strtotime( $post->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                            {{--<a href="" class="btn btn-primary btn-block">Edit</a>--}}
                        </div>
                        <div class="col-sm-6">
                            {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                            {{--<a href="" class="btn btn-danger btn-block">Delete</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
{{--
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            {{  method_field('PUT') }}
            <div class="form-group">
                <label for="title">Title:</label>
                <textarea type="text" class="form-control input-lg" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea>
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea type="text" class="form-control input-lg" id="body" name="body" rows="10">{{ $post->body }}</textarea>
            </div>
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Created at:</dt>
                <dd>{{ date('M j, Y h:i:sa', strtotime($post->created_at)) }}</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Last updated:</dt>
                <dd>{{ date('M j, Y h:i:sa', strtotime($post->updated_at)) }}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">Back</a>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Save</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    {{ method_field('PUT') }}
              </form>﻿--}}

    </div>

@stop