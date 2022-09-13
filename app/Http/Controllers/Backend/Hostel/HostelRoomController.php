<?php

namespace App\Http\Controllers\Backend\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hostelroom;

class HostelRoomController extends Controller
{
    public function ViewHostelRoom(){
    	$data['allData'] =Hostelroom::all();
    	return view('backend.hostel.hostelroom.view_hostelroom',$data);
 
    }


    public function HostelRoomAdd(){
    	return view('backend.hostel.hostelroom.add_hostelroom');
    }


    public function HostelRoomStore(Request $request){

	    	$validatedData = $request->validate([
	    	
	    	
	    	]);
			$data = new Hostelroom();
	    	$data->room_no = $request->room_no;
			$data->hostel_name = $request->hostel_name;
			$data->room_type = $request->room_type;
			$data->no_of_bed = $request->no_of_bed;
			$data->cost_per_bed = $request->cost_per_bed;
			$data->description = $request->description;
		

	    	$data->save();

	    	$notification = array(
	    		'message' => 'HostelRoom Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('hostelroom.view')->with($notification);

	    }



	    public function HostelRoomEdit($id){
	    	$editData =Hostelroom::find($id);
	    	return view('backend.hostel.hostelroom.edit_hostelroom',compact('editData'));

	    }



	    public function HostelRoomUpdate(Request $request,$id){

	    $data =Hostelroom::find($id);
		//dd( $data);
     
        // $validatedData = $request->validate([
    	// 	'name' => 'required|unique:hostelroom,name,'.$data->id    		
    	// ]);
    	
    	    $data->room_no = $request->room_no;
			$data->hostel_name = $request->hostel_name;
			$data->room_type = $request->room_type;
			$data->no_of_bed = $request->no_of_bed ;
			$data->cost_per_bed= $request->cost_per_bed;
			$data->description = $request->description;
			//$data->is_active = $request->is_active;

    	$data->save();

    	$notification = array(
    		'message' => 'HostelRoom Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('hostelroom.view')->with($notification);
    }


           public function HostelRoomDelete($id){
	    	$user = Hostelroom::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'HostelRoom Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('hostelroom.view')->with($notification);

	    }
}
