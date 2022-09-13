<?php

namespace App\Http\Controllers\user\others;

use App\Http\Controllers\Controller;
use App\Models\studentPermission;
use Illuminate\Http\Request;

class permissionController extends Controller
{
    public function studentPermission(){
        return view('user.others.permission');
    }

    public function savePermission(Request $request){

        if ($request->file('member_image')){
            $image=$request->file('member_image');
            $image_name=time().rand(10,2000).'.'.$image->getClientOriginalExtension();
            $directory='public/user/student/permissionImages/';
            $image->move($directory,$image_name);
            $imageUrl=$directory.$image_name;
        }
        else{
            $imageUrl=' ';
        }
        $permission=new studentPermission();
        $permission->application_for=$request->application_for;
        $permission->student_id=$request->student_id;
        $permission->student_name=$request->student_name;
        $permission->dept_name=$request->dept_name;
        $permission->campus=$request->campus;
        $permission->current_semester=$request->current_semester;
        $permission->current_sem_year=$request->current_sem_year;
        $permission->student_mobile=$request->student_mobile;
        $permission->student_email=$request->student_email;
        $permission->father_name=$request->father_name;
        $permission->father_occupation=$request->father_occupation;
        $permission->father_number=$request->father_number;
        $permission->last_paid_amou=$request->last_paid_amou;
        $permission->current_due=$request->current_due;
        $permission->pay_within=$request->pay_within;
        $permission->apply_reason=$request->apply_reason;
        $permission->member_image=$imageUrl;
        $permission->save();
        return redirect()->back()->with('message','data save successfully');


       }
}
