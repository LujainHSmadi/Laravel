<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $data = Post::latest();
        return view('post.index', compact('data'));
        
    }
    public function create(){
        return view('post.create');
    }
    public function store(Request $request)
    {
        $data = Post::create($request->all());
        return redirect()->rout('post.index')->with('success', 'product added successfully');
    }
    public function show(Post $post){
        return view('post.show',compact('post'));
    }

}
