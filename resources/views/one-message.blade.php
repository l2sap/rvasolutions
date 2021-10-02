@extends('layouts.app')

@section('title-block'){{ $data->subject }} @endsection

@section('content')
<h1>{{ $data->subject }}</h1>

    <div class="alert alert-info">
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }}</p>
        <p>{{ $data->created_at }}</p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-warning">Edit</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
    </div>

@endsection
