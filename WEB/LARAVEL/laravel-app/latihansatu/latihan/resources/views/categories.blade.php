
@extends('layouts.main')

@section('main')
<h1>
    {{ $title }}
</h1>
<hr>    

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
 
        <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0, 0, 0, 0.5)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>

                   
        @endforeach
    </div>
</div>

 {{-- @foreach ($categories as $category)
 <ul>
     <li>   
        <h4><a href="/categories/{{ $category->slug }}">{{ $category->name}}</a></h4>
     </li>
 </ul>
    

 @endforeach --}}
@endsection