@extends('layout')
@section('title', 'Posts')
@section('content')
    <h1>Posts</h1>
    <a href="{{$posts->previousPageUrl()}}" class="btn btn-primary {{ $posts->previousPageUrl() ? '' : 'disabled' }}">prev</a>
    <a href="{{$posts->nextPageUrl()}}" class="btn btn-primary">next</a>
    <div class="row row-cols-4">
    @foreach($posts as $post)
        <div class="col">
            <div class="card h-100">
{{--                <img src="..." class="card-img-top" alt="...">--}}
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->snippet}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
