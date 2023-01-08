@extends('layouts.main')
@section('container')
    <h1>{{ $post["title"] }}</h1>
    <h3>{{ $post["author"] }}</h3>
    <p>{{ $post["body"] }}</p>

    <a href="/blog">Back to posts</a>

@endsection