@extends('layout.app')
@section('content')
    
<h1 class="container">{{$title}}</h1>
<p class="container">
    @if (count($Services)> 0)
        @foreach ($Services as $item)
            <li class="container">{{$item}}</li>
        @endforeach
    @endif
</p>
@endsection
