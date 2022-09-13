<?php

namespace App\Http\Controllers\user\others;

use App\Http\Controllers\Controller;
use App\Models\departmentchanges;
use Illuminate\Http\Request;

class DepartmentChangeController extends Controller
{
    public function departmentDhange(){
        return view('user.others.department-change');
    }

    public function saveDepartmentChange(Request $request){
        $depchange=new departmentchanges();
        $depchange->student_id=$request->student_id;
        $depchange->student_name=$request->student_name;
        $depchange->campus=$request->campus;
        $depchange->current_sem=$request->current_sem;
        $depchange->current_sem_year=$request->current_sem_year;
        $depchange->student_mobile=$request->student_mobile;
        $depchange->student_email=$request->student_email;
        $depchange->present_dept=$request->present_dept;
        $depchange->to_be_dept=$request->to_be_dept;
        $depchange->apply_reason=$request->apply_reason;
        $depchange->save();
        return redirect()->back()->with('message','data save successfully');
    }
}
