@extends('layouts.default')

@section('title', 'Homepage')

@section('page_header')
<header>
  <h1 class="text-center text-danger m-5">View all Post</h1>
</header>
@endsection

@section('main_content')
    <div class="container">
      <a href="{{route('posts.create')}}" class="btn btn-primary mb-3">Crea un nuovo post</a>
      <div class="row">
        @foreach ($posts as $post)
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$post->coverImg}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->subtitle}}</p>
              <p class="card-text">{{$post->content}}</p>
              <p class="card-text">{{$post->author}}</p>
              <p class="card-text">{{$post->category}}</p>
              <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary mb-3">Vedi post completo</a>
              <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Modifica il post</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
@endsection
    
