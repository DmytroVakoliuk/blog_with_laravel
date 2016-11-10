@extends('layouts.app')

@section('title','| Contact')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Contact:</h2>
            <hr>
            <form>
                <div class="form-group">
                    <label name="email">Email</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label name="email">Subject</label>
                    <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name="email">Message</label>
                    <textarea id="message" name="message" placeholder="Type your mesage..."
                              class="form-control"></textarea>
                </div>
                <input type="submit" name="" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection