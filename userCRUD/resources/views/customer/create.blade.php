@extends('customer.layout')


@section('content')
    <form class="container" method="POST" action="/customers">
        @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="password">
  </div>
  <div class="form-group">
    <label for="password">Address</label>
    <input type="password" class="form-control" name="address" id="Address" placeholder="Address">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
  <label class="form-check-label" for="gender">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
  <label class="form-check-label" for="gender">
    Female
  </label>
</div>
 <div class="form-group"> <button type="submit" class="btn btn-primary">Create</button></div>
</form>
@endsection
