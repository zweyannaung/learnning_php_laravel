@extends('master')
@section('title') Contact Page @endsection
@section('content')

<h1>I am contact page</h1>

@php
 echo "Welcome to the Blade template engine!";
 echo "This is a simple example of a Blade view.";
    $fruitList = ['Apple', 'Banana', 'Cherry'];

@endphp

@if (false)
    <p>This condition is true.</p>
@else
    <p>This condition is false.</p>

@endif

@for ($i=1; $i <5; $i++)
    <p>My number is {{ $i }}</p>
@endfor

@foreach ($fruitList as $fruit)
    <p> I like to eat {{ $fruit }}</p>

@endforeach
<!-- <a href="{{ url('/about') }}">to about</a> -->
<a href="{{ route('about') }}">to about</a>

@endsection