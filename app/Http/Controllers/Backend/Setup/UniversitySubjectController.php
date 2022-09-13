<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\UniversitySubject; 

class UniversitySubjectController extends Controller
{
      public function ViewSubject(){
    	$data['allData'] = UniversitySubject::all();
    	return view('backend.setup.university_subject.view_university_subject',$data);
 
    }


	public function SubjectAdd(){
    	return view('backend.setup.university_subject.add_university_subject');
    }

    public function SubjectStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:university_subjects,name',
	    		
	    	]);

	    	$data = new UniversitySubject();
	    	$data->name = $request->name;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Subject Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('university.subject.view')->with($notification);

	    }


	    public function SubjectEdit($id){
	    	$editData = UniversitySubject::find($id);
	    	return view('backend.setup.university_subject.edit_university_subject',compact('editData'));
	    }



	    public function SubjectUpdate(Request $request,$id){

	 $data = UniversitySubject::find($id);
     
     $validatedData = $request->validate([
    		'name' => 'required|unique:university_subjects,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Subject Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('university.subject.view')->with($notification);
    }


     public function SubjectDelete($id){
	    	$user = UniversitySubject::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Subject Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	   return redirect()->route('university.subject.view')->with($notification);

	    }




} 
