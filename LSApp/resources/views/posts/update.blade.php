@extends('layout.app')
@section('content')
<div class="container">
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update',$post->id )}}" class="container">
    @csrf
    @method('PUT')
    <div class="form-group">
     <div class="form-group">
    <label for="Title">Title</label>
    <input type="Text" class="form-control" id="Title" placeholder="{{$post->title}}" name='title'>
  </div>
   
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" rows="3" name='body' placeholder="{{$post->body}}"></textarea>
  </div>
 <button type="submit" class="btn btn-primary" name='post_btn'>update</button>
    </form>
    </div>
@endsection