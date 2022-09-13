<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubjectGroup;

class SubjectGroupController extends Controller
{
    public function ViewSubjectGroup(){
    	$data['allData'] =SubjectGroup::all();
    	return view('backend.setup.subjectgroup.view_subjectgroup',$data);
 
    }


    public function SubjectGroupAdd(){
    	return view('backend.setup.subjectgroup.add_subjectgroup');
    }


    public function SubjectGroupStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:SubjectGroup,name',
	    		
	    	]);

	    	$data = new SubjectGroup();
	    	$data->name = $request->name;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'SubjectGroup Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('subjectgroup.view')->with($notification);

	    }



	    public function SubjectGroupEdit($id){
	    	$editData =SubjectGroup::find($id);
	    	return view('backend.setup.subjectgroup.edit_subjectgroup',compact('editData'));

	    }



	    public function SubjectGroupUpdate(Request $request,$id){

	    $data =SubjectGroup::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:subjectgroup,name,'.$data->id
    		
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
    		'message' => 'SubjectGroup Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('subjectgroup.view')->with($notification);
    }


           public function SubjectGroupDelete($id){
	    	$user = SubjectGroup::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'SubjectGroup Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('subjectgroup.view')->with($notification);

	    }
}
