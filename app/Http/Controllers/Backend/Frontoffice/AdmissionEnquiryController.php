<?php

namespace App\Http\Controllers\Backend\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admissionenquiry;

class AdmissionEnquiryController extends Controller
{
    public function ViewAdmissionEnquiry(){
    	$data['allData'] =AdmissionEnquiry::all();
    	return view('backend.frontoffice.admissionenquiry.view_admissionenquiry',$data);
 
    }


    public function AdmissionEnquiryAdd(){
    	return view('backend.frontoffice.admissionenquiry.add_admissionenquiry');
    }


    public function AdmissionEnquiryStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:admissionenquiries,name',
	    		
	    	]);

	    	$data = new Admissionenquiry();
	    	$data->name = $request->name;
			$data->phone = $request->phone;
			$data->email = $request->email;
			$data->address = $request->address;
			$data->description = $request->description;
			$data->note = $request->note;
			$data->date = $request->date;
			$data->next_date = $request->next_date;
			$data->assign = $request->assign;
			$data->reference = $request->reference;
			$data->source = $request->source;
			$data->student_number = $request->student_number;
			$data->status = $request->status;			

	    	$data->save();

	    	$notification = array(
	    		'message' => 'AdmissionEnquiry Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('admissionenquiry.view')->with($notification);

	    }



	    public function AdmissionEnquiryEdit($id){
	    	$editData =Admissionenquiry::find($id);
	    	return view('backend.frontoffice.admissionenquiry.edit_admissionenquiry',compact('editData'));

	    }



	    public function AdmissionEnquiryUpdate(Request $request,$id){

	    $data =Admissionenquiry::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:admissionenquiries,name,'.$data->id
    		
    	]);

    	
		$data->name = $request->name;
		$data->phone = $request->phone;
		$data->email = $request->email;
		$data->address = $request->address;
		$data->description = $request->description;
		$data->note = $request->note;
		$data->date = $request->date;
		$data->next_date = $request->next_date;
		$data->assign = $request->assign;
		$data->reference = $request->reference;
		$data->source = $request->source;
		$data->student_number = $request->student_number;
		$data->status = $request->status;

    	$data->save();

    	$notification = array(
    		'message' => 'AdmissionEnquiry Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('admissionenquiry.view')->with($notification);
    }


           public function AdmissionEnquiryDelete($id){
	    	$user = Admissionenquiry::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'AdmissionEnquiry Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('admissionenquiry.view')->with($notification);

	    }
}
