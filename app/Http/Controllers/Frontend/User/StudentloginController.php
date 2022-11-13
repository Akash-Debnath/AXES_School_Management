<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentloginController extends Controller
{
    public function Studentlogin(){
    	// return view('user.studentlogin');
        return view('studentauth.login');
    }

    public function StudentPortalLogin(Request $request)
    {
        $request-> validate([
            'email'=>"required",
            'password'=>"required"
        ]);

        if(Auth::guard('student')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('student/dashboard');
        }else {
            return redirect()->back()->with('fail', 'Username or Password is not matched!');
        }
    }
}
