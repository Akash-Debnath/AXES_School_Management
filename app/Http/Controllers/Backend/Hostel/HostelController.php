<?php

namespace App\Http\Controllers\Backend\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hostel;

class HostelController extends Controller
{
    public function ViewHostel(){
    	$data['allData'] =Hostel::all();
    	return view('backend.hostel.hosteldetail.view_hostel',$data);
 
    }


    public function HostelAdd(){
    	return view('backend.hostel.hosteldetail.add_hostel');
    }


    public function HostelStore(Request $request){
		//dd($request->all());
		$validatedData = $request->validate([
			'hostel_name' => 'required|unique:hostels,hostel_name',
			
		]);
		
	    	$data = new Hostel();
	    	$data->hostel_name = $request->hostel_name;
			$data->address = $request->address;
			$data->type = $request->type;
			$data->intake = $request->intake;
			$data->description = $request->description;


	    	$data->save();
			
	    	$notification = array(
	    		'message' => 'Hostel Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('hostel.hosteldetail.view')->with($notification);

	    }



	    public function HostelEdit($id){
	    	$editData =Hostel::find($id);
	    	return view('backend.hostel.hosteldetail.edit_hostel',compact('editData'));

	    }



	    public function HostelUpdate(Request $request,$id){

	    $data =Hostel::find($id);
     
        $validatedData = $request->validate([
    		'hostel_name' => 'required|unique:hostels,hostel_name,'.$data->id
    		
    	]);

    	

		$data->hostel_name = $request->hostel_name;
		$data->address = $request->address;
		$data->type = $request->type;
		$data->intake = $request->intake;
		$data->description = $request->description;
    	$data->save();

    	$notification = array(
    		'message' => 'Hostel Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('hostel.hosteldetail.view')->with($notification);
    }


           public function HostelDelete($id){
	    	$user = Hostel::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Hostel Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('hostel.hosteldetail.view')->with($notification);

	    }
}
