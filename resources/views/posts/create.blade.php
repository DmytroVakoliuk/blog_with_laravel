@extends('main')

@section('title','| Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="background-color: #f7f4ef">
            <h1>Create new post</h1>
            <hr>

            {!! Form::open(['route' => 'posts.store', 'files' => true, 'data-parsley-validate' => '']) !!}
                {{ Form::label('title','Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'required' => '',
                    'minlength' => '4', 'maxlength' => '50']) }}

                {{ Form::label('slug', 'Slug') }}
                {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '',
                    'minlength' => '5', 'maxlength' => '255')) }}

                {{ Form::label('body','Post Body:') }}
                {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '',
                    'minlength' => '10']) }}

                {{ Form::file('image',['class'=>'btn btn-success', 'alt' => '', 'name' => 'nu', 'src' => '' ]) }}

                {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block',
                        'style' => 'margin-top: 15px']) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection
