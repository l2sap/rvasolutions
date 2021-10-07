@extends('layouts.app')

@section('title-block')Account page: {{ Auth::user()->name }} @endsection

@section('content')

<h1>Account page</h1>
<p>Your name: <b>{{ Auth::user()->name }}</b></p>

<p>Your email: <b>{{ $email }}</b></p>

<p>Balance: <b>{{ Auth::user()->balance }}</b></p>

<hr>

Other users: <br>

@foreach($data as $user)
{{ $user->name }} - {{ $user->balance }} <br>
@endforeach

@endsection

@section('aside')
@parent
<p>Dop. text</p>
@endsection