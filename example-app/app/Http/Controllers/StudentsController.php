<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class StudentsController extends Controller
{
    //
    function readDate(){
        return student::all();
    }
}
