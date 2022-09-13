<?php

namespace App\Http\Controllers\user\others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class improvementExamController extends Controller
{
    public function improvementExam(){
        return view('user.others.improvement-exam');
    }
}
