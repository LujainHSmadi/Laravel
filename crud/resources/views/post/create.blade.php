@extends('post.layout')
@section('content')

<form class="container" action="{{ route('posts.store') }}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="tiltle">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Active</label>
    <select class="form-control" name= "" id="exampleFormControlSelect1">
      <option>0</option>
      <option>1</option>
    
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">description</label>
    <textarea class="form-control" name= "description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>


@endsection