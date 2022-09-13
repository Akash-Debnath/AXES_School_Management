<?php

namespace App\Http\Controllers\Backend\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitors_book;

class VisitorBookController extends Controller
{
    public function ViewVisitorBook(){
    	$data['allData'] =Visitors_book::all();
    	return view('backend.frontoffice.visitorbook.view_visitorbook',$data);
 
    }


    public function VisitorBookAdd(){
    	return view('backend.frontoffice.visitorbook.add_visitorbook');
    }


    public function VisitorBookStore(Request $request){
	    //dd($request->all());
	    	$validatedData = $request->validate([
	    		'name' => 'required',
	    		
	    	]);

	    	$data = new Visitors_book();
	    	$data->purpose = $request->purpose;
			$data->name = $request->name;
			$data->email = $request->email;
			$data->Phone = $request->phone;
			$data->id_card = $request->id_card;
			$data->no_of_people = $request->no_of_people;
			$data->date = $request->date;
			$data->in_time = $request->in_time;
			$data->out_time = $request->out_time;
			$data->note = $request->note;
	
			if ($request->file('image')) {
				$file = $request->file('image');
				$filename = date('YmdHi').$file->getClientOriginalName();
				$file->move(public_path('upload/visitor_images'),$filename);
				$data['image'] = $filename;
			}

	    	$data->save();

	    	$notification = array(
	    		'message' => 'VisitorBook Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('visitorbook.view')->with($notification);

	    }



	    public function VisitorBookEdit($id){
	    	$editData =Visitors_book::find($id);
	    	return view('backend.frontoffice.visitorbook.edit_visitorbook',compact('editData'));

	    }



	    public function VisitorBookUpdate(Request $request,$id){

	    $data =Visitors_book::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:visitors_books,name,'.$data->id
    		
    	]);

    	
    	
	    	$data->purpose = $request->purpose;
			$data->name = $request->name;
			$data->email = $request->email;
			$data->Phone = $request->phone;
			$data->id_card = $request->id_card;
			$data->no_of_people = $request->no_of_people;
			$data->date = $request->date;
			$data->in_time = $request->in_time;
			$data->out_time = $request->out_time;
			$data->note = $request->note;
	
			if ($request->file('image')) {
				$file = $request->file('image');
				$filename = date('YmdHi').$file->getClientOriginalName();
				$file->move(public_path('upload/visitor_images'),$filename);
				$data['image'] = $filename;
			}

    	$notification = array(
    		'message' => 'VisitorBook Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('visitorbook.view')->with($notification);
    }


           public function VisitorBookDelete($id){
	    	$user = Visitors_book::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'VisitorBook Deleted Successfully',
	    		'alert-type' => 'danger'
	    	);

	    	return redirect()->route('visitorbook.view')->with($notification);

	    }
}
