<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subjects;

class SubjectsController extends Controller
{
    public function ViewSubjects(){
    	$data['allData'] =Subjects::all();
    	return view('backend.setup.subjects.view_subjects',$data);
 
    }


    public function SubjectsAdd(){
    	return view('backend.setup.subjects.add_subjects');
    }


    public function SubjectsStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:Subjects,name',
	    		
	    	]);

	    	$data = new Subjects();
	    	$data->name = $request->name;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'Subjects Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('subjects.view')->with($notification);

	    }



	    public function SubjectsEdit($id){
	    	$editData =Subjects::find($id);
	    	return view('backend.setup.subjects.edit_subjects',compact('editData'));

	    }



	    public function SubjectsUpdate(Request $request,$id){

	    $data =subjects::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:subjects,name,'.$data->id
    		
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
    		'message' => 'Subjects Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('subjects.view')->with($notification);
    }


           public function SubjectsDelete($id){
	    	$user = Subjects::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Subjects Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('subjects.view')->with($notification);

	    }
}
