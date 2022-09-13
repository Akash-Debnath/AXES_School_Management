<?php

namespace App\Http\Controllers\Backend\Transport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehiclesController extends Controller
{
    public function ViewVehicles(){
    	$data['allData'] =Vehicle::all();
    	return view('backend.transport.vehicles.view_Vehicles',$data);
 
    }


    public function VehiclesAdd(){        
    	return view('backend.transport.vehicles.add_Vehicles');
    }


    public function VehiclesStore(Request $request){
    //dd($request->all());
	    	// $validatedData = $request->validate([
	    		    		
	    	// ]);

	    	$data = new Vehicle();
	    	$data->vehicle_no = $request->vehicle_no;
			$data->vehicle_model = $request->vehicle_model;
			$data->manufacture_year = $request->manufacture_year;
			$data->driver_name = $request->driver_name;
			$data->driver_licence = $request->driver_licence;
			$data->driver_contact = $request->driver_contact;
			$data->note = $request->note;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'Vehicles Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('vehicles.view')->with($notification);

	    }



	    public function VehiclesEdit($id){
	    	$editData =Vehicle::find($id);
	    	return view('backend.transport.vehicles.edit_Vehicles',compact('editData'));

	    }



	    public function VehiclesUpdate(Request $request,$id){

	    $data =Vehicle::find($id);
     
        // $validatedData = $request->validate([
    	// 	'name' => 'required|unique:Vehicles,name,'.$data->id
    		
    	// ]);

    	
    	$data->vehicle_no = $request->vehicle_no;
			$data->vehicle_model = $request->vehicle_model;
			$data->manufacture_year = $request->manufacture_year;
			$data->driver_name = $request->driver_name;
			$data->driver_licence = $request->driver_licence;
			$data->driver_contact = $request->driver_contact;
			$data->note = $request->note;

    	$data->update();

    	$notification = array(
    		'message' => 'Vehicles Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->back()->with($notification);
    }


	public function VehiclesDelete($id){
		$user = Vehicle::find($id);
		// return $id;
		$user->delete();

  	    	$notification = array(
	    		'message' => 'Vehicles Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->back()->with($notification);

	    }
}
