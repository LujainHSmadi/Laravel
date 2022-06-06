<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Doctor;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function edit($id)
    {
        $student = Student::find($id);
       
        $course = Course::find([4, 1]);
        $student->getCourses()->attach($course);
        return "Success";

    }
    public function show($id)
    {
            $dr = Course::select(
        "doctors.name")->join("doctors", "doctors.id", "=", "courses.doctor_id")
             ->get();

// dd($dr);


        $student  = Student::find($id);

        return view('show', compact('student','dr'));
    }

}
