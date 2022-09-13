<?php

namespace App\Http\Controllers\Backend\Newsevents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsevent;

use Image;

class NewseventsController extends Controller
{
    public function ViewNewsevents(){
    	$data['allData'] =Newsevent::all();
    	return view('backend.newsevent.index',$data);
        // return view('backend.newsevent.index.',compact('data'));
 
    }


    public function NewseventsAdd(){
        return view('backend.newsevent.create');
    }


    public function NewseventsStore(Request $request){

	    	// $validatedData = $request->validate([
	    	// 	'name' => 'required|unique:newsevent,name',
	    		
	    	// ]);

	    	$data = new Newsevent();
	    	$data->title = $request->title;
            $data->description = $request->description;
        if ($request->file('image')) {
    		$file1 = $request->file('image');
                $filename1 = date('YmdHi').$file1->getClientOriginalName();
                $data['image'] = $filename1;

				$destinationPath = public_path('upload/newsevent');
				$img = Image::make($file1->getRealPath());
				$img->fit(360, 200, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
    	}
        if ($request->file('file')) {
    		$file = $request->file('file');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/newsevent'),$filename);
    		$data['file'] = $filename;
    	}

	    	$data->save();

	    	$notification = array(
	    		'message' => 'Newsevent Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('newsevent.view')->with($notification);

	    }



	    public function NewseventsEdit($id){
	    	$editData =Newsevent::find($id);
	    	return view('backend.newsevent.edit',compact('editData'));
            // return view('backend.newsevent.edit',compact('newsevent'));

	    }



	    public function NewseventsUpdate(Request $request,$id){

	    	$data = new Newsevent();
	    	$data->title = $request->title;
            $data->description = $request->description;
        if ($request->file('image')) {
    		$file1 = $request->file('image');
    		$filename1 = date('YmdHi').$file1->getClientOriginalName();
    		$file1->move(public_path('upload/newsevent'),$filename1);
    		$newsevent['image'] = $filename1;
    	}
        if ($request->file('file')) {
    		$file = $request->file('file');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/newsevent'),$filename);
    		$newsevent['file'] = $filename;
    	}

	    	$data->save();


    	$notification = array(
    		'message' => 'newsevent Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('newsevent.view')->with($notification);
    }


    public function newseventDelete($id){
        $user = Newsevent::find($id);
        $user->delete();
    
        $notification = array(
            'message' => 'Newsevent Deleted Successfully',
            'alert-type' => 'danger'
        );
    
        return redirect()->route('newsevent.view')->with($notification);

	    }


}
