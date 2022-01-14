@extends('layouts.default')

@section('title', 'Boolean Blog')

@section('page_header')
  <h1>Page Header</h1>
@endsection

@section('main_content')
  <h2>Welcome in Boolean Blog</h2>
  <a href="{{route('posts.index')}}" class="btn btn-primary">Vedi tutti i post</a>

@endsection