@extends('master')
@section('title') Home Page @endsection
@section('content')
<h1>Welcome to the Home Page</h1>
<p>This is the main page of our application.</p>
<a href="{{ route('about') }}">to about</a>
<a href="{{ route('contact') }}">to contact</a>

@endsection