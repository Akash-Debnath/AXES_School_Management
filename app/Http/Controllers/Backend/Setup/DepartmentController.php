<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

use Image;

class DepartmentController extends Controller
{
    public function ViewDepartment(){
    	$data['allData'] = Department::all();
    	return view('backend.setup.department.index',$data);
 
    }


    public function DepartmentAdd(){

		$data['allData'] = Faculty::all();
    	return view('backend.setup.department.create',$data);
    }


        public function DepartmentStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:departments,name',
	    		'fid' => 'required',
	    		
	    	]);

	    	$data = new Department();
			$data->fid = $request->fid;
	    	$data->name = $request->name;
			$data->description = $request->editor1;
			$data->duration = $request->duration;
			$data->grading_system = $request->grading_system;
			$data->course_curriculum = $request->course_curriculum;
			$data->fee_schedules = $request->fee_schedules;
			$data->semester_details = $request->semester_details;
			$data->eligibility = $request->eligibility;
			$data->course_fee = $request->course_fee;
			$data->link = $request->link;
			$data->code = $request->code;
			if ($request->file('image')) {
				$file1 = $request->file('image');
                $filename1 = date('YmdHi').$file1->getClientOriginalName();
                $data['image'] = $filename1;

				$destinationPath = public_path('upload/department');
				$img = Image::make($file1->getRealPath());
				$img->fit(197, 279, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
			}
			if ($request->file('course_brochure')) {
        		$file = $request->file('course_brochure');
        		$filename = date('YmdHi').$file->getClientOriginalName();
        		$file->move(public_path('upload/department'),$filename);
        		$data['course_brochure'] = $filename;
        	}
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Department Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('department.view')->with($notification);

	    }



        public function DepartmentEdit($id){    
            $allData = Faculty::all();
	    	$editData = Department::find($id);
	    	return view('backend.setup.department.edit',compact('editData','allData'));
	    }


    public function DepartmentUpdate(Request $request,$id){

        
        
        	$validatedData = $request->validate([
	    		'name' => 'required|unique:departments,name,' .$id,
	    		'fid' => 'required',
	    		
	    	]);

	        $data = Department::find($id);
			$data->fid = $request->fid;
	    	$data->name = $request->name;
			$data->description = $request->editor1;
			$data->duration = $request->duration;
			$data->grading_system = $request->grading_system;
			$data->course_curriculum = $request->course_curriculum;
			$data->fee_schedules = $request->fee_schedules;
			$data->semester_details = $request->semester_details;
			$data->eligibility = $request->eligibility;
			$data->course_fee = $request->course_fee;
			$data->link = $request->link;
			$data->code = $request->code;
			if ($request->file('image')) {
				$file1 = $request->file('image');
                $filename1 = date('YmdHi').$file1->getClientOriginalName();
                $data['image'] = $filename1;

				$destinationPath = public_path('upload/department');
				$img = Image::make($file1->getRealPath());
				$img->fit(197, 279, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
			}
			if ($request->file('course_brochure')) {
        		$file = $request->file('course_brochure');
        		$filename = date('YmdHi').$file->getClientOriginalName();
        		$file->move(public_path('upload/department'),$filename);
        		$data['course_brochure'] = $filename;
        	}
	    	$data->save();

            $notification = array(
                'message' => 'Department Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('department.view')->with($notification);
    }


    public function DepartmentDelete($id){
	    	$user = Department::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Department Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('department.view')->with($notification);

	}
}
