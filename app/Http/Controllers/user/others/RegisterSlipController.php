<?php

namespace App\Http\Controllers\user\others;

use App\Http\Controllers\Controller;
use App\Models\registerslip;
use Illuminate\Http\Request;

class RegisterSlipController extends Controller
{
    public function registerSlip(){
        return view('user.others.registration-slip');
    }

    public function saveRegisterSlip(Request $request){
        $register=new registerslip();
        $register->student_id=$request->student_id;
        $register->dept=$request->dept;
        $register->student_name=$request->student_name;
        $register->student_email=$request->student_email;
        $register->student_mobile=$request->student_mobile;
        $register->save();
        return redirect()->back()->with('message','data save successfully');
    }
}
