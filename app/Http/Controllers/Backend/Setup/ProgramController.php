<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
  
    public function ViewProgram(){
    	$data['allData'] = Program::all();
    	return view('backend.setup.program.index',$data);
 
    }


    public function ProgramAdd(){

		  $data['facultys'] = Faculty::all();
		  $data['departments'] = Department::all();
		
		 
    	return view('backend.setup.program.create',$data);
    }


        public function ProgramStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:programs,name',
	    		
	    	]);
			//dd($request->image);

	    	$data = new Program();
			$data->fid = $request->fid;
			$data->did = $request->did;
	    	$data->name = $request->name;
			$data->description = $request->description;
			$data->link = $request->link;
			if ($request->file('image')) {
				$file = $request->file('image');
				@unlink(public_path('upload/program/'.$data->image));
				$filename1 = date('YmdHi').$file->getClientOriginalName();
				$file->move(public_path('upload/program'),$filename1);
				$data['image'] = $filename1;
			}
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Program Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('program.view')->with($notification);

	    }



        public function ProgramEdit($id){ 
			$facultys = Faculty::all();
		  $departments = Department::all();
	    	$editData = Program::find($id);
		  
	    	return view('backend.setup.program.edit',compact('editData','facultys','departments'));
	    }


    public function ProgramUpdate(Request $request,$id){

        $data = Program::find($id);
        
        $validatedData = $request->validate([
                'name' => 'required|unique:programs,name,'.$data->id
                
            ]);

            
        	$data->fid = $request->fid;
			$data->did = $request->did;
	    	$data->name = $request->name;
			$data->description = $request->description;
			$data->link = $request->link;
			if ($request->file('image')) {
				$file = $request->file('image');
				@unlink(public_path('upload/program/'.$data->image));
				$filename1 = date('YmdHi').$file->getClientOriginalName();
				$file->move(public_path('upload/program'),$filename1);
				$data['image'] = $filename1;
			}
	    	$data->save();

	    	
            $notification = array(
                'message' => 'Program Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('program.view')->with($notification);
    }


    public function ProgramDelete($id){
	    	$user = Program::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Program Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('program.view')->with($notification);

	}
}
