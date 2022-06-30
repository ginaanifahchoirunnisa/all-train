
@extends('layouts.main')

@section('main')
<h1>
    Post Category {{ $category }}
</h1>
<hr>    



 @foreach ($posts as $post)
    <h4><a href="/posts/{{ $post->slug }}">{{ $post->title}}</a></h4>
    <h6>{{ $post->excerpt }}</h6>
     <br>
 @endforeach
@endsection