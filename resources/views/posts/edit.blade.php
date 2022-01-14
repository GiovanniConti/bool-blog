@extends('layouts.default')

@section('title', 'Modifica post')

@section('page_header')
<header>
  <h1 class="text-center text-danger m-5">Modifica Post</h1>
</header>
@endsection

@section('main_content')
  <form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title"
      value="{{ $post->title }}">
    </div>
    <div class="mb-3">
      <label for="subtitle" class="form-label">Subitle</label>
      <input type="text" class="form-control" id="subtitle" name="subtitle"
      value="{{ $post->subtitle }}">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" id="content" name="content"">{{ $post->content }}</textarea>
      
    </div>

    <div class="mb-3">
      <label for="coverImg" class="form-label">Image</label>
      <input type="text" class="form-control" id="coverImg" name="coverImg"
      value="{{ $post->coverImg }}">
    </div>
    <div class="mb-3">
      <label for="author" class="form-label">Author</label>
      <input type="text" class="form-control" id="author" name="author"
      value="{{ $post->author }}">
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <input type="text" class="form-control" id="category" name="category"
      value="{{ $post->category }}">
    </div>
    <div class="text-center mb-3">
      <button type="submit" class="btn btn-success btn-submit">Submit</button>
    </div>
  </form>

  <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@endsection