<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassTimetable;

class ClassTimetableController extends Controller
{
    public function View(){
    	$data['allData'] =ClassTimetable::all();
    	return view('backend.academic.classtimetable.index',$data);
 
    }


    public function Add(){
    	return view('backend.academic.classtimetable.create');
    }


    public function Store(Request $request){

	    	$validatedData = $request->validate([
	    		'type' => 'required',
				'start' => 'required',
				'end' => 'required',
				'period' => 'required',
	    		
	    	]);

	    	$data = new ClassTimetable();
	    	$data->type = $request->type;
			$data->period = $request->period;
			$data->start = $request->start;
			$data->end = $request->end;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'ClassTimetable Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('classtimetable.view')->with($notification);

	    }



	    public function Edit($id){
	    	$editData =ClassTimetable::find($id);
	    	return view('backend.academic.classtimetable.edit',compact('editData'));

	    }



	    public function Update(Request $request,$id){

	    $data =ClassTimetable::find($id);
     
		$validatedData = $request->validate([
			'type' => 'required',
			'start' => 'required',
			'end' => 'required',
			'period' => 'required',
			
		]);
    	
		$data->type = $request->type;
		$data->period = $request->period;
		$data->start = $request->start;
		$data->end = $request->end;
    	$data->save();

    	$notification = array(
    		'message' => 'ClassTimetable Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('classtimetable.view')->with($notification);
    }


           public function Delete($id){
	    	$user = ClassTimetable::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'ClassTimetable Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('classtimetable.view')->with($notification);

	    }
}
