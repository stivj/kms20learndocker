@extends('layout')
@section('title', 'Home Page')
@section('content')
    <h1>Home page</h1>
    <h1>Welcome {{ $name}}</h1>
    <ul>
        @foreach($array as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection
