<?php

namespace App\Http\Controllers\user\others;

use App\Http\Controllers\Controller;
use App\Models\courseaddordrop;
use Illuminate\Http\Request;

class courseAddordropController extends Controller
{
    public function courseAdd(){
        return view('user.others.course-addordrop');
    }

    public function saveCourseAdd(Request $request){
        $course=new courseaddordrop();
        $course->student_id=$request->student_id;
        $course->student_name=$request->student_name;
        $course->dept_name=$request->dept_name;
        $course->campus=$request->campus;
        $course->completed_credit=$request->completed_credit;
        $course->current_cgpa=$request->current_cgpa;
        $course->current_sem=$request->current_sem;
        $course->current_sem_year=$request->current_sem_year;
        $course->student_mobile=$request->student_mobile;
        $course->student_email=$request->student_email;
        $course->registered_course=$request->registered_course;
        $course->add_course=$request->add_course;
        $course->drop_course=$request->drop_course;
        $course->save();
        return redirect()->back()->with('message','data save successfully');
    }
}
