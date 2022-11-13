<?php

namespace App\Http\Controllers\user\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function dashboard(){
        return view('student.student_master');
    }
}
