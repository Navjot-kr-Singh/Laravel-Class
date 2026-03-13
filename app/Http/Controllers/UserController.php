<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id=0){
        return view('user',['id'=>$id]);
    }

    public function welcomeStudent($name = 'John Doe'){
        return view('welcome_student', ['studentName' => $name]);
    }

    public function studentName($name = 'Jane Smith'){
        return view('student_name', ['name' => $name]);
    }

    public function course($courseName = 'Laravel Development'){
        return view('course', ['courseName' => $courseName]);
    }
}
