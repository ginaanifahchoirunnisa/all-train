{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')

@foreach ($posts as $post)
  <article class="mb-5">
    <h1><a href="/posts/{{ $post["slug"] }}">{{ $post["title"]}}</a></h1>    
    <h3>{{ $post["author"] }}</h3>
    <p>{{ $post["body"] }}</p>
  </article>
@endforeach

@endsection
