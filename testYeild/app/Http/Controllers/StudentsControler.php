<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsControler extends Controller
{
    function readDate(){
        
        $data = Student::all();
       
            return view('home', compact('data'));
            
       
    }

    function homapage(){

        $data = ['ashraf'=>'Hi'];

       return view('home',$data);
    }
    function contatcpage(){
       return view('contact',['data'=>'hello']);
    }
}
