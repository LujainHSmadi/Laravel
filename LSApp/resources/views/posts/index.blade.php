@extends('layout.app')
@section('content')
<div class="container">
    <h1>Posts</h1>
    @if (count($posts)>0)
    @foreach ($posts as $item)
        <div class='card container'>
            <h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
            <small>Written on {{$item->created_at}}</small>
        </div>
        <br>
        <br>
        <br>
        <br>
        
        
    @endforeach
    {{$posts->links()}}
    @else
    <div class='well container'>No Posts</div>
    
    @endif
    </div>
@endsection