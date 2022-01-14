@extends('layouts.default')

@section('title', 'Detagli post' . $post->title)

@section('page_header')
<header>
  <h1 class="text-center text-danger m-5">{{$post->title}}</h1>
</header>
@endsection

@section('main_content')
    <div class="container">
      <img class="card-img-top" src="{{$post->coverImg}}" alt="Card image cap">
            <div class="">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->subtitle}}</p>
              <p class="card-text">{{$post->content}}</p>
              <p class="card-text">{{$post->author}}</p>
              <p class="card-text">{{$post->category}}</p>
              {{-- <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Vedi post completo</a> --}}
            </div>
          </div>
          <form action="{{ route('posts.destroy', $post->id) }}" method='post'>
            @csrf
            @method('DELETE')
            <input type='submit' value='Elimina' class='btn btn-danger'>
          </form>
    </div>
@endsection
    
