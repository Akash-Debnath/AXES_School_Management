<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllClass;

class AllClassController extends Controller
{
    public function ViewAllClass(){
    	$data['allData'] =AllClass::all();
    	return view('backend.setup.allclass.view_allclass',$data);
 
    }


    public function AllClassAdd(){
    	return view('backend.setup.allclass.add_allclass');
    }


    public function AllClassStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:AllClass,name',
	    		
	    	]);

	    	$data = new AllClass();
	    	$data->name = $request->name;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'AllClass Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('allclass.view')->with($notification);

	    }



	    public function AllClassEdit($id){
	    	$editData =AllClass::find($id);
	    	return view('backend.setup.allclass.edit_allclass',compact('editData'));

	    }



	    public function AllClassUpdate(Request $request,$id){

	    $data =AllClass::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:allclass,name,'.$data->id
    		
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
    		'message' => 'AllClass Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('allclass.view')->with($notification);
    }


           public function AllClassDelete($id){
	    	$user = AllClass::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'AllClass Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('allclass.view')->with($notification);

	    }
}
