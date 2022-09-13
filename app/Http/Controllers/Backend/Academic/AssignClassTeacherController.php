<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignClassTeacher;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\Program;
use App\Models\StudentClass;
use App\Models\SchoolSubject;
use Auth;

class AssignClassTeacherController extends Controller
{
    public function View(){
    	$data['allData'] =AssignClassTeacher::all();
    	return view('backend.academic.assignteacher.index',$data);
 
    }


    public function Add(){
		$data['departments'] =Department::all();
		$data['classes'] =StudentClass::all();
		$data['programs'] =Program::all();
		$data['teachers'] =Teacher::all();
		$data['subjects'] =SchoolSubject::all();
    	return view('backend.academic.assignteacher.create',$data);
    }


    public function Store(Request $request){
		//dd($request->all());

	    	$validatedData = $request->validate([
	    		'teacher_id' => 'required',
				'department_id' => 'required',
				'programs_id' => 'required',
	    		
	    	]);
			$user_id=Auth::User()->id;

	    	$data = new AssignClassTeacher();
			$data->teacher_id = $request->teacher_id;
	    	$data->department_id = $request->department_id;
			$data->program_id = $request->programs_id;
			$data->class_id = $request->class_id;
			$data->subject_id = $request->subject_id;
			$data->added_by = $user_id;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'AssignClassTeacher Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('assignclassteacher.view')->with($notification);

	    }



	    public function Edit($id){
	    	$editData =AssignClassTeacher::find($id);
	    	return view('backend.academic.assignteacher.edit',compact('editData'));

	    }



	    public function Update(Request $request,$id){

	    $data =AssignClassTeacher::find($id);
     
		$validatedData = $request->validate([
			'teacher_id' => 'required',
			'department_id' => 'required',
			'program_id' => 'required',
			
		]);

    	
    	$data->teacher_id = $request->teacher_id;
		$data->department_id = $request->department_id;
		$data->program_id = $request->program_id;
		$data->class_id = $request->class_id;
		$data->subject_id = $request->subject_id;
    	$data->save();

    	$notification = array(
    		'message' => 'AssignClassTeacher Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('assignclassteacher.view')->with($notification);
    }


           public function Delete($id){
	    	$user = AssignClassTeacher::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'AssignClassTeacher Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('assignclassteacher.view')->with($notification);

	    }
}
