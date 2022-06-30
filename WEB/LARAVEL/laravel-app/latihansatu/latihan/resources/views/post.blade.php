@extends('layouts.main')

@section('main')
<div class="container">
    <div class="row justify-content-center mb-5"> 
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            {{-- /blog?category = "slug dari kategori", jadi , nantinya akan membaca kategori yang dikirimkan lewat URL juga --}}
            <p>By. <a href="/authors/{{  $post->author->username}}" class="text-decoration-none">{{ $post->author->name }} </a> in <a  class ="text-decoration-none"href="/blog?category={{$post->category->slug}}">{{$post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
        </div>
    </div>
</div>


{{-- <article>
<h2>{{ $post->title }}</h2>
<p>By. <a href="/authors/{{  $post->author->username}}" class="text-decoration-none">{{ $post->author->name }} </a> in <a  class ="text-decoration-none"href="/categories/{{$post->category->slug}}">{{$post->category->name }}</a></p>
{!! $post->body !!}
<p></p>
</article> --}}

<a href="/blog">Back To Posts</a>
@endsection



{{-- 
Post::create([
    'title' => 'Tutor desain web',
    'category_id' => 2,
    'slug' => 'tutor-desain-web',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, dignissimos, labore omnis non obcaecati sequi possimus quae ex, iste molestiae dicta? Expedita nostrum at architecto temporibus magni veritatis voluptatum doloremque autem nesciunt, tempora facilis officiis earum, quod recusandae ad molestiae veniam reiciendis soluta pariatur deleniti. Porro sed maxime nam! Temporibus?',
    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis et distinctio consectetur odio ipsam reprehenderit aut laboriosam vitae quam, fuga fugit tenetur quos aperiam earum. Neque beatae totam natus dignissimos facere mollitia ipsa saepe recusandae provident ratione modi ullam nam eaque harum, dolor sed, id, incidunt voluptates explicabo aliquam quasi exercitationem quas hic. Nemo et nobis soluta amet repellat veniam saepe cupiditate, porro voluptatum ipsum perferendis quaerat quia natus qui debitis accusamus hic exercitationem eligendi iste autem? Commodi dignissimos sit obcaecati soluta est ipsa nisi officia velit. Expedita non, architecto deserunt dignissimos exercitationem amet fuga, minima cumque blanditiis labore sint.'
])


Category::create([
    'name' => 'Create Documentation',
    'slug' => 'create-documentation'
]) --}}