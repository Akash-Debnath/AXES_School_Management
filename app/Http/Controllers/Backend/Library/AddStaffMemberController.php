<?php

namespace App\Http\Controllers\Backend\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddStaffMember;

class AddStaffMemberController extends Controller
{
    public function ViewAddStaffMember(){
    	$data['allData'] =AddStaffMember::all();
    	return view('backend.setup.addstaffmember.view_addstaffmember',$data);
 
    }


    public function AddStaffMemberAdd(){
    	return view('backend.setup.addstaffmember.add_addstaffmember');
    }


    public function AddStaffMemberStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:addstaffmember,name',
	    		
	    	]);

	    	$data = new AddStaffMember();
	    	$data->name = $request->name;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'AddStaffMember Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('addstaffmember.view')->with($notification);

	    }



	    public function AddStaffMemberEdit($id){
	    	$editData =AddStaffMember::find($id);
	    	return view('backend.setup.addstaffmember.edit_addstaffmember',compact('editData'));

	    }



	    public function AddStaffMemberUpdate(Request $request,$id){

	    $data =AddStaffMember::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:addstaffmember,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'AddStaffMember Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('addstaffmember.view')->with($notification);
    }


           public function AddStaffMemberDelete($id){
	    	$user = AddStaffMember::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'AddStaffMember Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('addstaffmember.view')->with($notification);

	    }
}
