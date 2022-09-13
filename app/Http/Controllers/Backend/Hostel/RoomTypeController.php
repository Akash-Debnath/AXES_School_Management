<?php

namespace App\Http\Controllers\Backend\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room_type;

class RoomTypeController extends Controller
{
    public function ViewRoomType(){
    	$data['allData'] =Room_type::all();
    	return view('backend.hostel.roomtype.view_roomtype',$data);
 
    }


    public function RoomTypeAdd(){
    	return view('backend.hostel.roomtype.add_roomtype');
    }


    public function RoomTypeStore(Request $request){

	   // 	$validatedData = $request->validate([
	   // 		'room_type' => 'required|unique:room_types,
	    		
	   // 	]);

	    	$data = new Room_type();
	    	$data->room_type = $request->room_type;
			$data->description = $request->description;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'RoomType Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('roomtype.view')->with($notification);

	    }



	    public function RoomTypeEdit($id){
	    	$editData =Room_type::find($id);
	    	return view('backend.hostel.roomtype.edit_roomtype',compact('editData'));

	    }



	    public function RoomTypeUpdate(Request $request,$id){

	    $data =Room_type::find($id);
     
        $validatedData = $request->validate([
    		'room_type' => 'required|unique:room_types,'.$data->id,
    		
    	]);

    	
    	  
			// $data->id = $request->id;
			// $data->session_id = $request->session_id;
			$data->room_type = $request->room_type;
			$data->description = $request->description;
			
    	$data->update();

    	$notification = array(
    		'message' => 'RoomType Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('roomtype.view')->with($notification);
    }


           public function RoomTypeDelete($id){
	    	$user = Room_type::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'RoomType Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('roomtype.view')->with($notification);

	    }
}
