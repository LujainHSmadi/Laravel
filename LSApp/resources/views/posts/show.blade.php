@extends('layout.app')
@section('content')
    <h1>{{$post->title}}</h1>

    
        <div class='well container'>
            <a href="/posts" class="  btn btn-primary">Go Back</a>
            <br>
            <br>
            <br>
            <div class='card container'>
                
            <br>
                {{$post->body}}
                <br>
            <br>
            </div>
             <br>
            <br>
            <br>
            <hr>
            <small>Written on {{$post->created_at}}</small>
             <br>
            <br>
            <br>
        </div>
        
         
           
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
            <form action="{{ route('posts.destroy',$post->id )}}" method="post" class="pull-right">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" class="pull-right">delete</button>
                
                
            </form>
                
        </div>
    

     
@endsection