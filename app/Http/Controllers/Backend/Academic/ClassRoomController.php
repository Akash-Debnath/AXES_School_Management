<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassRooms;

class ClassRoomController extends Controller
{
    public function View(){
    	$data['allData'] =ClassRooms::all();
    	return view('backend.academic.classrooms.index',$data);
 
    }


    public function Add(){
    	return view('backend.academic.classrooms.create');
    }


    public function Store(Request $request){

	    	$validatedData = $request->validate([
	    		'building_name' => 'required',
                'room_no' => 'required',
	    		
	    	]);

	    	$data = new ClassRooms();
	    	$data->building_name = $request->building_name;
            $data->room_no = $request->room_no;
			$data->description = $request->description;
	    	$data->save();
	    	$notification = array(
	    		'message' => 'Class Rooms Inserted Successfully',
	    		'alert-type' => 'success'
	    	);
	    	return redirect()->route('classrooms.view')->with($notification);

	    }



	    public function Edit($id){
	    	$editData =ClassRooms::find($id);
	    	return view('backend.academic.classrooms.edit',compact('editData'));

	    }



	    public function Update(Request $request,$id){

	    $data =ClassRooms::find($id);
     
        $validatedData = $request->validate([
            'building_name' => 'required',
            'room_no' => 'required',
            
        ]);


    	
    	$data->building_name = $request->building_name;
        $data->room_no = $request->room_no;
		$data->description = $request->description;
    	$data->save();

    	$notification = array(
    		'message' => 'Class Rooms Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('classrooms.view')->with($notification);
    }


           public function Delete($id){
	    	$user = ClassRooms::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Class Rooms Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('classrooms.view')->with($notification);

	    }
}
