<?php

namespace App\Http\Controllers\Backend\Transport;

use App\Http\Controllers\Controller;
use App\Models\Transportroute;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Assignvehicle;
use Illuminate\Mail\Transport\Transport;

class AssignVehicleController extends Controller
{
    public function ViewAssignvehicle(){
    	$data['allData'] =Assignvehicle::all();
    	return view('backend.transport.assignvehicle.view_assignvehicle',$data);
 
    }


    public function AssignvehicleAdd(){
    	return view('backend.transport.assignvehicle.add_assignvehicle',[
			'transportroutes'=> Transportroute::all(),
			'vehicles'=> Vehicle::all(),
		]);
    }


    public function AssignvehicleStore(Request $request){
		// return request();

	    	// $validatedData = $request->validate([
	    		 	
	    	// ]);

	    	$data = new assignvehicle();
	    	$data->route_name = $request->route;
			$data->vehicle_id = $request->vehicle;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'Assignvehicle Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('assignvehicle.view')->with($notification);

	    }



	    // public function AssignvehicleEdit($id){
	    // 	$editData =VehicleRoute::find($id)
		// 		["transportroutes"-> Transportroute::all()];	        
	    // 	return view('backend.transport.assignvehicle.edit_assignvehicle',compact('editData'));
	    // }
		
		public function AssignvehicleEdit($id){
	    	$editData =Assignvehicle::find($id);
			
	    	return view('backend.transport.assignvehicle.edit_assignvehicle',compact('editData'),[
				'transportroutes'=> Transportroute::all(),
				'vehicles'=> Vehicle::all(),
			]);
			
	}





	    public function AssignvehicleUpdate(Request $request,$id){

	    $data =Assignvehicle::find($id);
     
        // $validatedData = $request->validate([
    	// 	'name' => 'required|unique:vehicle_route,name,'.$data->id
    		
    	// ]);

    	
    	$data->route_name = $request->route;
		$data->vehicle_id = $request->vehicle;
    	
		$data->update();

    	$notification = array(
    		'message' => 'Assignvehicle Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('assignvehicle.view')->with($notification);
    }


           public function AssignvehicleDelete($id){
	    	$user = Assignvehicle::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Assignvehicle Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('assignvehicle.view')->with($notification);

	    }
}
