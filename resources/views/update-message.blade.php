@extends('layouts.app')

@section('title-block')Update message @endsection

@section('content')
<h1>Update message</h1>

<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter your name" id="name" class="form-control">
</div>

<div class="form-group mt-2">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter your email" id="email" class="form-control">
</div>

<div class="form-group mt-2">
    <label for="subject">Subject</label>
    <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Enter your subject" id="subject" class="form-control">
</div>

<div class="form-group mt-2">
    <label for="message">Message</label>
    <textarea name="message" id="message" placeholder="Enter your message" class="form-control">{{ $data->message }}</textarea>
</div>

<button type="submit" class="btn btn-success mt-3">Update</button>
</form>
@endsection