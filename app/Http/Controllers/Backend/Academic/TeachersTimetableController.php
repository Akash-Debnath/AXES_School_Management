<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeachersTimetable;

class TeachersTimetableController extends Controller
{
    public function ViewTeachersTimetable(){
    	$data['allData'] =TeachersTimetable::all();
    	return view('backend.setup.teacherstimetable.view_teacherstimetable',$data);
 
    }


    public function TeachersTimetableAdd(){
    	return view('backend.setup.teacherstimetable.add_teacherstimetable');
    }


    public function TeachersTimetableStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:TeachersTimetable,name',
	    		
	    	]);

	    	$data = new TeachersTimetable();
	    	$data->name = $request->name;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'TeachersTimetable Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('teacherstimetable.view')->with($notification);

	    }



	    public function TeachersTimetableEdit($id){
	    	$editData =TeachersTimetable::find($id);
	    	return view('backend.setup.teacherstimetable.edit_teacherstimetable',compact('editData'));

	    }



	    public function TeachersTimetableUpdate(Request $request,$id){

	    $data =TeachersTimetable::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:teacherstimetable,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
			$data->id = $request->id;
			$data->session_id = $request->session_id;
			$data->code = $request->code ;
			$data->amount= $request->amount;
			$data->description = $request->description;
			$data->	is_active = $request->	is_active;
    	$data->save();

    	$notification = array(
    		'message' => 'TeachersTimetable Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('teacherstimetable.view')->with($notification);
    }


           public function TeachersTimetableDelete($id){
	    	$user = TeachersTimetable::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'TeachersTimetable Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('teacherstimetable.view')->with($notification);

	    }
}
