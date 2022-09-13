<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentloginController extends Controller
{
    public function Studentlogin(){
        
    	return view('user.studentlogin');

    }
}
