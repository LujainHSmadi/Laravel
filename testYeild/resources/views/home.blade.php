@extends('layout.master')

@section('home')

<ul>
  @foreach ($data as $value)
      <li>{{$value->name}}</li>
      <li>{{$value->id}}</li>
  @endforeach
</ul>
@endsection
