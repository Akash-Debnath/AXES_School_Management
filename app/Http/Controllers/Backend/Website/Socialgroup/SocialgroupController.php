<?php

namespace App\Http\Controllers\Backend\Website\Socialgroup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Socialgroup;

class SocialgroupController extends Controller
{  

   
    public function Socialgroupindex(){
    	$data['allData'] =Socialgroup::all();
    	return view('backend.webinfo.socialgroup.index',$data);
 
    }


    public function Socialgroupcreate(){
    	return view('backend.webinfo.socialgroup.create');
    }


    public function Socialgroupstore(Request $request){
 //            dd($request->all());
	    	// $validatedData = $request->validate([
	    	// 	'name' => 'required|unique:Book,name',
	    		
	    	// ]);


            $data = new Socialgroup();
	    	$data->name = $request->name;
            $data->type = $request->type;
            $data->link = $request->link;

    		$data->save();

	    	$notification = array(
	    		'message' => 'Social Group Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('socialgroup.index')->with($notification);

	    }



	    public function Socialgroupedit($id){
	    	$editData =Socialgroup::find($id);
	    	return view('backend.webinfo.socialgroup.edit',compact('editData'));

	    }



	    public function Socialgroupupdate(Request $request,$id){
	    $data =Socialgroup::find($id);
     
        $data = new Socialgroup();
        $data->name = $request->name;
        $data->type = $request->type;
        $data->link = $request->link;
    	$data->save();

    	$notification = array(
    		'message' => 'Social Group Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('socialgroup.index')->with($notification);
    }


           public function Socialgroupdelete($id){
	    	$user = Socialgroup::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Social Group  Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('socialgroup.index')->with($notification);

	    }
}
