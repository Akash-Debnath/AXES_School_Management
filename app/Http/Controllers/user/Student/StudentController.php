<?php

namespace App\Http\Controllers\user\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function Logout(){
    	Auth::logout();
    	return Redirect()->route('studentlogin');
    }

}
