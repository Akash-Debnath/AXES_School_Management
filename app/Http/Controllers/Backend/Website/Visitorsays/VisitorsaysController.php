<?php

namespace App\Http\Controllers\Backend\Website\Visitorsays;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitorsay;

use Image;

class VisitorsaysController extends Controller
{
   
    public function ViewVisitorsays(){
    	$data['allData'] =Visitorsay::all();
    	return view('backend.webinfo.visitorsays.index',$data);
 
    }


    public function VisitorsaysAdd(){
    	return view('backend.webinfo.visitorsays.create');
    }


    public function VisitorsaysStore(Request $request){



            $data = new Visitorsay();
	    	$data->name = $request->name;
            $data->comment = $request->comment;
            if ($request->file('image')) {
                $file1 = $request->file('image');
                $filename1 = date('YmdHi').$file1->getClientOriginalName();
                $data['image'] = $filename1;

				$destinationPath = public_path('upload/visitorsays');
				$img = Image::make($file1->getRealPath());
				$img->fit(72, 72, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
            }
    		$data->save();

	    	$notification = array(
	    		'message' => 'Visitorsays Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('visitorsays.view')->with($notification);

	    }



	    public function VisitorsaysEdit($id){
	    	$editData =Visitorsay::find($id);
	    	return view('backend.webinfo.visitorsays.edit',compact('editData'));

	    }



	    public function VisitorsaysUpdate(Request $request,$id){

	    $data =Visitorsay::find($id);
     
        // $validatedData = $request->validate([
    	// 	'name' => 'required|unique:book,name,'.$data->id
    		
    	// ]);

    	
	    	$data = new Visitorsay();
	    	$data->name = $request->name;
            $data->comment = $request->comment;
            if ($request->file('image')) {
                $file1 = $request->file('image');
                $filename1 = date('YmdHi').$file1->getClientOriginalName();
                $file1->move(public_path('upload/visitorsays'),$filename1);
                $newsevent['image'] = $filename1;
            }
    	$data->save();

    	$notification = array(
    		'message' => 'Book Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('visitorsays.view')->with($notification);
    }


           public function VisitorsaysDelete($id){
	    	$user = Visitorsay::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Visitorsays Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('visitorsays.view')->with($notification);

	    }
}
