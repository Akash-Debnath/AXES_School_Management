<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeesType; 

class  FeestypeController extends Controller
{
    public function ViewFeesType(){
    	$data['allData'] = FeesType::all();
    	return view('backend.setup.fees_type.view_fees_type',$data);
 
    }


    public function FeesTypeAdd(){
    	return view('backend.setup.fees_type.add_fees_type');
    }


public function FeesTypeStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:fees_types,name',
	    		
	    	]);
			

	    	$data = new FeesType();
	    	$data->name = $request->name;
			$data->description = $request->description;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Fees Type Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('fees.type.view')->with($notification);

	    }



	 public function FeesTypeEdit($id){
	    	$editData = FeesType::find($id);
	    	return view('backend.setup.fees_type.edit_fees_type',compact('editData'));

	    }



	 public function FeesTypeUpdate(Request $request,$id){

	 $data = FeesType::find($id);
     
     $validatedData = $request->validate([
    		'name' => 'required|unique:fees_types,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Fees Type Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('fees.type.view')->with($notification);
    }


 public function FeesTypeDelete($id){
	    	$user = FeesType::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Fees Type Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('fees.type.view')->with($notification);

	    }



}
