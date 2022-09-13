<?php

namespace App\Http\Controllers\Backend\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complain;

class ComplainController extends Controller
{
    public function ViewComplain(){
    	$data['allData'] =Complain::all();
    	return view('backend.frontoffice.complain.view_complain',$data);
 
    }


    public function ComplainAdd(){
    	return view('backend.frontoffice.complain.add_complain');
    }


    public function ComplainStore(Request $request){
		//dd($request->all());

	    	$validatedData = $request->validate([
	    		
	    	
	    	]);

	    	$data = new Complain();
	    	$data->complain_type = $request->complain_type;
			$data->source = $request->source;
			$data->name = $request->name;	
			$data->complain_by = $request->complain_by;
			$data->contact = $request->contact;
			$data->email = $request->email;
			$data->date = $request->date;
			$data->description = $request->description;
			$data->action_taken = $request->action_taken;
			$data->assigned = $request->assigned;
			$data->note = $request->note;
			$data->image = $request->image;

			if ($request->file('image')) {
				$file = $request->file('image');
				$filename = date('YmdHi').$file->getClientOriginalName();
				$file->move(public_path('upload/complain_images'),$filename);
				$data['image'] = $filename;
			}

	    	$data->save();

	    	$notification = array(
	    		'message' => 'Complain Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('complain.view')->with($notification);

	    }



	    public function ComplainEdit($id){
	    	$editData =Complain::find($id);
	    	return view('backend.frontoffice.complain.edit_complain',compact('editData'));

	    }



	    public function ComplainUpdate(Request $request,$id){

	    $data =Complain::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:complains,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
			$data->id = $request->id;
			$data->complaint_type = $request->complaint_type;
			$data->source = $request->source;
			$data->name = $request->name;
			$data->name = $request->complain_by;
			$data->contact = $request->contact;
			$data->email = $request->email;
			$data->date = $request->date;
			$data->description = $request->description;
			$data->action_taken = $request->action_taken;
			$data->assigned = $request->assigned;
			$data->note = $request->note;
			$data->image = $request->image;
			
			
    	$data->save();

    	$notification = array(
    		'message' => 'Complain Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('complain.view')->with($notification);
    }


           public function ComplainDelete($id){
	    	$user = Complain::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Complain Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('complain.view')->with($notification);

	    }
}
