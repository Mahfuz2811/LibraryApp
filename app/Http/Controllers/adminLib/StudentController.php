<?php

namespace App\Http\Controllers\adminLib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function studentList()
    {
    	return view('adminLib.student.student_list');
    }

    public function studentForm()
    {
    	return view('adminLib.student.student_form');
    }
}
