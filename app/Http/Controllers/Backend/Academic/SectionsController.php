<?php

namespace App\Http\Controllers\Backend\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sections;

class SectionsController extends Controller
{
    public function ViewSections(){
    	$data['allData'] =Sections::all();
    	return view('backend.academic.sections.index',$data);
 
    }


    public function SectionsAdd(){
    	return view('backend.academic.sections.create');
    }


    public function SectionsStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:sections,name',
	    		
	    	]);

	    	$data = new Sections();
	    	$data->name = $request->name;
			$data->description = $request->description;
	    	$data->save();
	    	$notification = array(
	    		'message' => 'Sections Inserted Successfully',
	    		'alert-type' => 'success'
	    	);
	    	return redirect()->route('sections.view')->with($notification);

	    }



	    public function SectionsEdit($id){
	    	$editData =Sections::find($id);
	    	return view('backend.academic.sections.edit',compact('editData'));

	    }



	    public function SectionsUpdate(Request $request,$id){

	    $data =Sections::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:sections,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
		$data->description = $request->description;
    	$data->save();

    	$notification = array(
    		'message' => 'Sections Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('sections.view')->with($notification);
    }


           public function SectionsDelete($id){
	    	$user = Sections::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Sections Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('sections.view')->with($notification);

	    }
}
