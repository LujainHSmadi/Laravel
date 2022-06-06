@extends('customer.layout')
@section('content')
    <div class="jumbotron jumbotron-fluid container">
  <div class="container">
    <h1 class="display-4">CRUD</h1>
    <p class="lead">This is CRUD for Customer.</p>
  </div>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">address</th>
      <th scope="col">gender</th>
      <th scope="col">update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @php
          $i =0;
      @endphp
      @foreach ($data as $value)
    <tr> 
        <th scope="row">{{++$i}}</th>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->password}}</td>
        <td>{{$value->address}}</td>
        <td>{{$value->gender}}</td>
        <td>
            <form action="" method="post">
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </td>
        <td>
            <form action="" method="post">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection