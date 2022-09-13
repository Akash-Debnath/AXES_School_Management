<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentSemester;

class StudentSemesterController extends Controller
{
    public function ViewStudent(){
    	$data['allData'] = StudentSemester::all();
    	return view('backend.setup.student_semester.view_semester',$data);

    }


    public function StudentSemesterAdd(){
    	return view('backend.setup.student_semester.add_semester');
    }


    public function StudentSemesterStore(Request $request){

    	$validatedData = $request->validate([
    		'name' => 'required|unique:student_semesters,name',
    		
    	]);

    	$data = new StudentSemester();
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Student Semester Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('student.semester.view')->with($notification);

    }



    public function StudentSemesterEdit($id){
    	$editData = StudentSemester::find($id);
    	return view('backend.setup.student_semester.edit_semester',compact('editData'));

    }


    public function StudentSemesterUpdate(Request $request,$id){

		$data = StudentSemester::find($id);
     
     $validatedData = $request->validate([
    		'name' => 'required|unique:student_semesters,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Student Semester Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('student.semester.view')->with($notification);
    }


    public function StudentSemesterDelete($id){
    	$user = StudentSemester::find($id);
    	$user->delete();

    	$notification = array(
    		'message' => 'Student Semester Deleted Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('student.semester.view')->with($notification);

    }

}
