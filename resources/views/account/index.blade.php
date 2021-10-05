@extends('layouts.app')

@section('title-block')Account page: {{ Auth::user()->name }} @endsection

@section('content')

<h1>Account page</h1>
<p>Your name: <b>{{ Auth::user()->name }}</b></p>

<p>Your email: <b>{{ $email }}</b></p>

@endsection

@section('aside')
@parent
<p>Dop. text</p>
@endsection