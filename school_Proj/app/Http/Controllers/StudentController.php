<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        $student = new Student;
        $student->name = 'Qutaibah';
        $student->save();
        $student->name = 'Haya';
        $student->save();

        $subject = Subject::find([1, 2]);
        $student->getSubject()->attach($subject);
        return "Success";

    }
    public function show(Student $std)
    {
        return view('show', compact('std'));
    }

}
