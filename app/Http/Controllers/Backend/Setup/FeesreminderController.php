<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\FeesReminder;
use Illuminate\Http\Request;

class FeesreminderController extends Controller
{
    public function ViewFeesReminder(){
    	$data['allData'] = Feesreminder::all();
    	return view('backend.setup.fees_reminder.view_fees_reminder',$data);
 
    }


    public function FeesReminderAdd(){
    	return view('backend.setup.fees_reminder.add_fees_reminder');
    }


public function FeesReminderStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:feesdiscounts,name',
	    		
	    	]);

	    	$data = new feesreminder();
	    	$data->name = $request->name;
			$data->id = $request->id;
			$data->session_id = $request->session_id;
			$data->code = $request->code ;
			$data->amount= $request->amount;
			$data->description = $request->description;
			$data->	is_active = $request->	is_active;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Fees Reminder Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('fees.reminder.view')->with($notification);

	    }



	 public function FeesReminderEdit($id){
	    	$editData = FeesReminder::find($id);
	    	return view('backend.setup.fees_remainder.edit_fees_remainder',compact('editData'));

	    }



	 public function FeesReminderUpdate(Request $request,$id){

	 $data = FeesReminder::find($id);
     
     $validatedData = $request->validate([
    		'name' => 'required|unique:feesremainders,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Fees  Reminder Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('fees.remainder.view')->with($notification);
    }


           public function FeesReminderDelete($id){
	    	$user = FeesReminder::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Fees Remainder Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('fees.reminder.view')->with($notification);

	    }



}
