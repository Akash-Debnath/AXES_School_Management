<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty; 

use Image;

class FacultyController extends Controller
{

    public function ViewFaculty(){
    	$data['allData'] = Faculty::all();
    	return view('backend.setup.faculty.index',$data);
 
    }


    public function FacultyAdd(){
        return view('backend.setup.faculty.create');
    }
    
    public function FacultyEdit($id){
        $editData = Faculty::find($id);
        return view('backend.setup.faculty.edit',compact('editData'));
    }
  
    public function FacultyStore(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:facultys,name',
            
        ]);

        $data = new Faculty();
        $data->name = $request->name;
        $data->description = $request->description;
			$data->link = $request->link;
			$data->code = $request->code;
			if ($request->file('image')) {
                $file1 = $request->file('image');
                $filename1 = date('YmdHi').$file1->getClientOriginalName();
                $data['image'] = $filename1;

				$destinationPath = public_path('upload/faculty');
				$img = Image::make($file1->getRealPath());
				$img->fit(600, 600, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
			}
        $data->save();

        $notification = array(
            'message' => 'Faculty Inserted Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('faculty.view')->with($notification);

    }

    public function FacultyDelete($id){
        $user = Faculty::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Faculty Deleted Successfully',
            'alert-type' => 'info'
        );

   return redirect()->route('faculty.view')->with($notification);

    }

public function FacultyUpdate(Request $request,$id){

        $validatedData = $request->validate([
            
            'name' => 'required|unique:facultys,name'
        ]);

        $data = new Faculty();
        $data->name = $request->name;
        $data->description = $request->description;
			$data->link = $request->link;
            $data->code = $request->code;

			if ($request->file('image')) {
                $file1 = $request->file('image');
                $filename1 = date('YmdHi').$file1->getClientOriginalName();
                $data['image'] = $filename1;

				$destinationPath = public_path('upload/faculty');
				$img = Image::make($file1->getRealPath());
				$img->fit(600, 600, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
			}
        $data->save();

        $notification = array(
            'message' => 'Faculty Updated Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('faculty.view')->with($notification);

    }

}
