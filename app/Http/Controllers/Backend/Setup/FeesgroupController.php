<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeesGroup; 

class  FeesgroupController extends Controller
{
    public function ViewFeesGroup(){
    	$data['allData'] = FeesGroup::all();
    	return view('backend.setup.fees_group.view_fees_group',$data);
 
    }


    public function FeesGroupAdd(){
    	return view('backend.setup.fees_group.add_fees_group');
    }


public function FeesGroupStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:fees_groups,name',
	    		
	    	]);

	    	$data = new FeesGroup();
	    	$data->name = $request->name;
			$data->description = $request->description;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Fees Group Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('fees.group.view')->with($notification);

	    }



	 public function FeesGroupEdit($id){
	    	$editData = FeesGroup::find($id);
	    	return view('backend.setup.fees_group.edit_fees_group',compact('editData'));

	    }



	 public function FeesGroupUpdate(Request $request,$id){

	 $data = FeesGroup::find($id);
     
     $validatedData = $request->validate([
    		'name' => 'required|unique:fees_groups,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Fees Groups Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('fees.group.view')->with($notification);
    }


 public function FeesGroupDelete($id){
	    	$user = FeesGroup::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Fees Group Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('fees.group.view')->with($notification);

	    }



}
