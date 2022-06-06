@extends('post.layout')

@section('content')
   
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<div class="container">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">active</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    $i=0;    
    @endphp
    @foreach ($data as $value)
         <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$value->title}}</td>
      <td>{{$value->description}}</td>
      <td>{{$value->active}}</td>
      <td>
        <a href="{{rout('posts.show')}}"></a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

</div>
@endsection