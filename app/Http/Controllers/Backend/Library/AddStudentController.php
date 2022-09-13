<?php

namespace App\Http\Controllers\Backend\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddStudent;

use App\Models\AssignStudent;
use App\Models\Student;
use App\Models\DiscountStudent;
use App\Models\Teacher;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\StudentAttendance;
use App\Models\StudentAttendanceDetail;

use DB;
use PDF;

use Auth;

use Validator;

class AddStudentController extends Controller
{
    public function ViewAddStudent(){
    	$data['allData'] =AddStudent::all();
    	return view('backend.library.addstudent.view_addstudent',$data);
 
    }


    public function AddStudentAdd(){
		$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
		$data['shifts'] = StudentShift::all();

		$data['departments'] = Department::all();
		$data['facultys'] = Faculty::all();

    	$data['year_id'] = StudentYear::orderBy('id','desc')->first()->id;
    	$data['class_id'] = StudentClass::orderBy('id','desc')->first()->id;
		$data['dept_id'] = Department::orderBy('id','desc')->first()->id;
    	//dd($data['year_id']);
    	$data['allData'] = AssignStudent::get();
		$data['search'] ='';
    	return view('backend.library.addstudent.add_addstudent',$data);
    }

	public function AddStudentinfo(Request $request){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
		$data['departments'] = Department::all();
		$data['shifts'] = StudentShift::all();
        
    	$data['year_id'] = $request->year_id;
    	$data['batch_id'] = $request->batch_id;
		$data['shift_id'] = $request->shift_id;
		$data['dept_id'] =  $request->dept_id;
		$data['type'] =  $request->type;
		$data['search'] =1;
		//dd($request->type);

		if($request->type=='Student'){
			$data['allData'] = AssignStudent::where('year_id',$request->year_id)->where('dept_id',$request->dept_id)->get();

		}else{
			$data['allData'] = Teacher::get();

		}
    	 
    	

		return view('backend.library.addstudent.add_addstudent',$data);

    } 


    public function AddStudentStore(Request $request){

		$lib_track = 'LIB'.'0'. AddStudent::get()->max('id');
		$type=$request->type;
		
		$id=$request->id;
		//dd($id);

		if($request->type='Student'){
			$student=Student::find($id);
		

			$check=AddStudent::where('sid',$student->id)->where('type',$type)->count();
			if($check>0){
				$notification = array(
					'message' => 'Already Added',
					'alert-type' => 'danger'
				);
				return redirect()->route('addstudent.view')->with($notification);
			}

		}elseif($request->type='Teacher'){
			$taecher=Teacher::find($id);
		

			$check=AddStudent::where('sid',$taecher->id)->where('type',$type)->count();
			if($check>0){
				$notification = array(
					'message' => 'Already Added',
					'alert-type' => 'danger'
				);
				return redirect()->route('addstudent.view')->with($notification);
			}

		}else{

		}

	       

	    	$data = new AddStudent();
	    	$data->name = $student->name;
			$data->sid = $student->id;
			$data->id_no = $student->id_no;
			$data->library_no = $lib_track;
			$data->email = $student->email;
			$data->address = $student->address;
			$data->type = $type;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'Member Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('addstudent.view')->with($notification);

	    }



	    public function AddStudentEdit($id){
	    	$editData =AddStudent::find($id);
	    	return view('backend.library.addstudent.edit_addstudent',compact('editData'));

	    }



	    public function AddStudentUpdate(Request $request,$id){

	    $data =AddStudent::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:addstudent,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'AddStudent Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('addstudent.view')->with($notification);
    }


           public function AddStudentDelete($id){
	    	$user = AddStudent::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'AddStudent Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('addstudent.view')->with($notification);

	    }
}
