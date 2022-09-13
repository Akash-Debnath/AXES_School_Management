<?php

namespace App\Http\Controllers\Backend\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dispatch_receive;

class PostalReceiveController extends Controller
{
    public function ViewPostalReceive(){
    	$data['allData'] =Dispatch_receive::all();
    	return view('backend.frontoffice.postalreceive.view_postalreceive',$data);
 
    }


    public function PostalReceiveAdd(){
    	return view('backend.frontoffice.postalreceive.add_postalreceive');
    }


    public function PostalReceiveStore(Request $request){
        //dd($request->all());
	    	// $validatedData = $request->validate([
		
			
	    	// ]);

	    	$data = new Dispatch_receive();
	    	$data->reference_no = $request->reference_no;
			$data->to_title = $request->to_title;
			$data->address = $request->address;
			$data->note = $request->note;
			$data->from_title = $request->from_title;
			$data->date = $request->date;
			

			if ($request->file('image')) {
				$file = $request->file('image');
				@unlink(public_path('upload/dispatchreceive_images/'.$data->image));
				$filename1 = date('YmdHi').$file->getClientOriginalName();
				$file->move(public_path('upload/dispatchreceive_images'),$filename1);
				$data['image'] = $filename1;
			  }


	    	$data->save();

	    	$notification = array(
	    		'message' => 'PostalReceivet Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('postalreceive.view')->with($notification);

	    }



	    public function PostalReceiveEdit($id){
	    	$editData =Dispatch_receive::find($id);
	    	return view('backend.frontoffice.postalreceive.edit_postalreceive',compact('editData'));

	    }



	    public function PostalReceiveUpdate(Request $request,$id){

	    $data =Dispatch_receive::find($id);
     
        $validatedData = $request->validate([
    		// 'name' => 'required|unique:postalreceive,name,'.$data->id
    		
    	]);

    	
    	$data->reference_no = $request->reference_no;
			$data->to_title = $request->to_title;
			$data->address = $request->address;
			$data->note = $request->note;
			$data->from_title = $request->from_title;
			$data->date = $request->date;
			
			if ($request->file('image')) {
				$file = $request->file('image');
				@unlink(public_path('upload/dispatchreceive_images/'.$data->image));
				$filename1 = date('YmdHi').$file->getClientOriginalName();
				$file->move(public_path('upload/dispatchreceive_images'),$filename1);
				$data['image'] = $filename1;
			  }


    	$data->update();

    	$notification = array(
    		'message' => 'PostalReceive Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('postalreceive.view')->with($notification);
    }


           public function PostalReceiveDelete($id){
	    	$user = Dispatch_receive::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'PostalReceive Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('postalreceive.view')->with($notification);

	    }
}
