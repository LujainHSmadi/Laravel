<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        return 'middleware Pass ..';
    }
    public function uploadForm(){
        return view('upload');
    }
    public function uploadFile(Request $request){
         $request->file('file')->store('public');
         return "the file has been uploaded successfully!!";
    }
}
