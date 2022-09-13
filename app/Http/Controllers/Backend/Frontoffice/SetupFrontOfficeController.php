<?php

namespace App\Http\Controllers\Backend\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SetupFrontOffice;

class SetupFrontOfficeController extends Controller
{
    public function ViewSetupFrontOffice(){
    	$data['allData'] =SetupFrontOffice::all();
    	return view('backend.frontoffice.setupfrontoffice.view_setupfrontoffice',$data);
 
    }


    public function SetupFrontOfficeAdd(){
    	return view('backend.frontoffice.setupfrontoffice.add_setupfrontoffice');
    }


    public function SetupFrontOfficeStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:SetupFrontOffice,name',
	    		
	    	]);

	    	$data = new SetupFrontOffice();
	    	$data->name = $request->name;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'SetupFrontOffice Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('setupfrontoffice.view')->with($notification);

	    }



	    public function SetupFrontOfficeEdit($id){
	    	$editData =SetupFrontOffice::find($id);
	    	return view('backend.frontoffice.setupfrontoffice.edit_setupfrontoffice',compact('editData'));

	    }



	    public function SetupFrontOfficeUpdate(Request $request,$id){

	    $data =SetupFrontOffice::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:setupfrontoffice,name,'.$data->id
    		
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
    		'message' => 'SetupFrontOffice Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('setupfrontoffice.view')->with($notification);
    }


           public function SetupFrontOfficeDelete($id){
	    	$user = SetupFrontOffice::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'SetupFrontOffice Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('setupfrontoffice.view')->with($notification);

	    }
}
