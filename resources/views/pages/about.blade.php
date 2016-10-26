@extends('main')

@section('title','| About')

{{--@section('aboutActive','class=active')--}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>About Routing:</h2>
            <p>Route::get('foo', function(){});</p>
            <p>Route::get('foo', 'ControllerName@function');</p>
            <p>Route::controller('foo', 'FooController');</p>
            <hr>
            <p>variables:</p>
            <div>
                <ul>
                    <li>fullname: {{ $fullname }}</li>
                    <li>email: {{ $email }}</li>
                    <li>data:</li>
                </ul>
            </div>
        </div>
    </div>
@endsection