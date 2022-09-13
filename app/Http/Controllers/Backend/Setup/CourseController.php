<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Image;

class CourseController extends Controller
{
    public function ViewCourse(){
    	$data['allData'] = Course::all();
    	return view('backend.setup.course.index',$data);
 
    }


    public function CourseAdd(){

		// $data['allData'] = Faculty::all();
    	return view('backend.setup.course.create');
    }


        public function CourseStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:courses,name',
	    		
	    		
	    	]);

	    	$data = new Course();
		
	    	$data->name = $request->name;
			$data->description = $request->description;
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

				$destinationPath = public_path('upload/course');
				$img = Image::make($file1->getRealPath());
				$img->fit(197, 279, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
			}
			if ($request->file('course_brochure')) {
        		$file = $request->file('course_brochure');
        		$filename = date('YmdHi').$file->getClientOriginalName();
        		$file->move(public_path('upload/course'),$filename);
        		$data['course_brochure'] = $filename;
        	}
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Course Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('course.view')->with($notification);

	    }



        public function CourseEdit($id){    
            // $allData = Faculty::all();
	    	$editData = Course::find($id);
	    	return view('backend.setup.course.edit',compact('editData'));
	    }


    public function CourseUpdate(Request $request,$id){

        
        
        	$validatedData = $request->validate([
	    		'name' => 'required|unique:courses,name,' .$id,
	   // 		'fid' => 'required',
	    		
	    	]);

	        $data = Course::find($id);
// 			$data->fid = $request->fid;
	    	$data->name = $request->name;
			$data->description = $request->description;
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

				$destinationPath = public_path('upload/course');
				$img = Image::make($file1->getRealPath());
				$img->fit(197, 279, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
			}
			if ($request->file('course_brochure')) {
        		$file = $request->file('course_brochure');
        		$filename = date('YmdHi').$file->getClientOriginalName();
        		$file->move(public_path('upload/course'),$filename);
        		$data['course_brochure'] = $filename;
        	}
	    	$data->save();

            $notification = array(
                'message' => 'Course Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('course.view')->with($notification);
    }


    public function CourseDelete($id){
	    	$user = Course::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Course Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('course.view')->with($notification);

	}
}
