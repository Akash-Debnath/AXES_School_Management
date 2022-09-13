<?php

namespace App\Http\Controllers\Backend\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dispatch_receive;

class PostalDispatchController extends Controller
{
    public function ViewPostalDispatch(){
    	$data['allData'] =Dispatch_receive::all();
    	return view('backend.frontoffice.postaldispatch.view_postaldispatch',$data);
 
    }


    public function PostalDispatchAdd(){
    	return view('backend.frontoffice.postaldispatch.add_postaldispatch');
    }


    public function PostalDispatchStore(Request $request){
//dd($request->all());
	    	$validatedData = $request->validate([
	    		// 'name' => 'required|unique:dispatch_receives,name',
	    		
	    	]);

	    	$data = new Dispatch_receive();
	    	$data->to_title = $request->to_title;
			$data->reference_no = $request->reference_no;
			$data->address = $request->address;
			$data->note = $request->note;
			$data->from_title = $request->from_title;
			$data->date = $request->date;
			$data->image = $request->image;
		


	    	$data->save();

	    	$notification = array(
	    		'message' => 'PostalDispatch Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('postaldispatch.view')->with($notification);

	    }



	    public function PostalDispatchEdit($id){
	    	$editData =Dispatch_receive::find($id);
	    	return view('backend.frontoffice.postaldispatch.edit_postaldispatch',compact('editData'));

	    }



	    public function PostalDispatchUpdate(Request $request,$id){

	    $data =Dispatch_receive::find($id);
     
        $validatedData = $request->validate([
    		// 'name' => 'required|unique:postaldispatch,name,'.$data->id
    		
    	]);

    	
    	
		 	$data->to_title = $request->to_title;
			$data->reference_no = $request->reference_no;
			$data->address = $request->address;
			$data->note = $request->note;
			$data->from_title = $request->from_title;
			$data->date = $request->date;
			$data->image = $request->image;
    	$data->update();

    	$notification = array(
    		'message' => 'PostalDispatch Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('postaldispatch.view')->with($notification);
    }


           public function PostalDispatchDelete($id){
	    	$user = Dispatch_receive::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'PostalDispatch Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('postaldispatch.view')->with($notification);

	    }
}
