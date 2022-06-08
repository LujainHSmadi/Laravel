@extends('layout.app')
@section('content')
<div class="container">
    <h1>Create Post</h1>
    <form method="POST" action="{{route('posts.store')}}" class="container">
    @csrf
    <div class="form-group">
     <div class="form-group">
    <label for="Title">Title</label>
    <input type="Text" class="form-control" id="Title" placeholder="Add title" name='title'>
  </div>
   
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" rows="3" name='body' placeholder="Add body here"></textarea>
  </div>
 <button type="submit" class="btn btn-primary" name='post_btn'>Post</button>
    </form>
    </div>
@endsection