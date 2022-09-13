<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PromoteStudents;

class PromoteStudentsController extends Controller
{
    public function ViewPromoteStudents(){
    	$data['allData'] =PromoteStudents::all();
    	return view('backend.setup.promotestudents.view_promotestudents',$data);
 
    }


    public function PromoteStudentsAdd(){
    	return view('backend.setup.promotestudents.add_promotestudents');
    }


    public function PromoteStudentsStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:PromoteStudents,name',
	    		
	    	]);

	    	$data = new PromoteStudents();
	    	$data->name = $request->name;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'PromoteStudents Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('promotestudents.view')->with($notification);

	    }



	    public function PromoteStudentsEdit($id){
	    	$editData =PromoteStudents::find($id);
	    	return view('backend.setup.promotestudents.edit_promotestudents',compact('editData'));

	    }



	    public function PromoteStudentsUpdate(Request $request,$id){

	    $data =PromoteStudents::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:promotestudents,name,'.$data->id
    		
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
    		'message' => 'PromoteStudents Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('promotestudents.view')->with($notification);
    }


           public function PromoteStudentsDelete($id){
	    	$user = PromoteStudents::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'PromoteStudents Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('promotestudents.view')->with($notification);

	    }
}
