<?php

namespace App\Http\Controllers\Backend\Transport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transportroute;

class TransportrouteController extends Controller
{
    public function ViewRoutes(){
    	$data['allData'] =Transportroute::all();
    	return view('backend.transport.routes.view_Routes',$data);
 
    }


    public function RoutesAdd(){
    	return view('backend.transport.routes.add_Routes');
    }


    public function RoutesStore(Request $request){

	    	$validatedData = $request->validate([
	
	    	]);

	    	$data = new Transportroute();
	    	$data->route_title = $request->route_title;
			$data->fare = $request->fare;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'Routes Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('routes.view')->with($notification);

	    }



	    public function RoutesEdit($id){
	    	$editData =Transportroute::find($id);
	    	return view('backend.transport.routes.edit_Routes',compact('editData'));

	    }



	    public function RoutesUpdate(Request $request,$id){

	    $data =Transportroute::find($id);
     
        // $validatedData = $request->validate([
    	// 	'name' => 'required|unique:Routes,name,'.$data->id
    		
    	// ]);

    	
    	
		$data->route_title = $request->route_title;
			$data->fare = $request->fare;
    	$data->update();

    	$notification = array(
    		'message' => 'Routes Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('routes.view')->with($notification);
    }


           public function RoutesDelete($id){
	    	$user = Transportroute::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Routes Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('routes.view')->with($notification);

	    }
}
