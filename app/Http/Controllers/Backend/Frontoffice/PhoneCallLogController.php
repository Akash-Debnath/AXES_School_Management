<?php

namespace App\Http\Controllers\Backend\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phonecalllog;

class PhoneCallLogController extends Controller
{
	public function ViewPhoneCallLog(){
		$data['allData'] =Phonecalllog::all();
		return view('backend.frontoffice.phonecalllog.view_phonecalllog',$data);
 
	}

    public function PhoneCallLogAdd(){
		$data['allData'] =Phonecalllog::all();
    	return view('backend.frontoffice.phonecalllog.add_phonecalllog',$data);
    }


    public function PhoneCallLogStore(Request $request){
       //dd($request->all());
	    	$validatedData = $request->validate([
	    		'name' => 'required',
	    		
	    	]);

	    	$data = new Phonecalllog();
			$data->name = $request->name;
			$data->phone = $request->phone ;
			$data->date= $request->date;
			$data->next_follow_up_date = $request->next_follow_up_date;
			$data->description = $request->description;
			$data->call_duration = $request->call_duration ;
			$data->call_type = $request->call_type;
			$data->note= $request->note;
		

	    	$data->save();

	    	$notification = array(
	    		'message' => 'PhoneCallLog Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('phonecalllog.view')->with($notification);

	    }



	    public function PhoneCallLogEdit($id){
	    	$editData =Phonecalllog::find($id);
	    	return view('backend.frontoffice.phonecalllog.edit_phonecalllog',compact('editData'));

	    }



	    public function PhoneCallLogUpdate(Request $request,$id){

	    $data =Phonecalllog::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:phonecalllogs,name,'.$data->id
    		
    	]);

    	
		$data->name = $request->name;
		    $data->id = $request->id;
		
			$data->phone = $request->Phone ;
			$data->date= $request->date;
			$data->description = $request->description;
			$data->next_follow_up_date = $request->next_follow_up_date;
			$data->call_duration = $request->call_duration ;
			$data->note= $request->note;
			$data->call_type = $request->call_type;
    	$data->update();

    	$notification = array(
    		'message' => 'PhoneCallLog Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('phonecalllog.view')->with($notification);
    }


           public function PhoneCallLogDelete($id){
	    	$user = Phonecalllog::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'PhoneCallLog Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('phonecalllog.view')->with($notification);

	    }
}
