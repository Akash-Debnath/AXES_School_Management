<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feesmaster; 
use App\Models\FeesType; 
use App\Models\FeesGroup; 





class  FeesmasterController extends Controller
{
    public function ViewFeesMaster(){
    	$data['allData'] = Feesmaster::all();
    	return view('backend.setup.fees_master.view_fees_master', $data);
 
    }


    public function FeesMasterAdd(){
		$data['types'] = FeesType::all();
		$data['groups'] = FeesGroup::all();
    	return view('backend.setup.fees_master.add_fees_master', $data);
    }

	public function FeesMasterAsign(){
		$data['types'] = FeesType::all();
		$data['groups'] = FeesGroup::all();
    	return view('backend.setup.fees_master.add_fees_master', $data);
    }


public function FeesMasterStore(Request $request){
            //dd('ok');
	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:feesmasters,name',
	    		
	    	]);

	    	$data = new Feesmaster();
	    	$data->name = $request->name;
			$data->amount = $request->amount;
			$data->due_date = $request->due_date;
			$data->percentage = $request->percentage;
			$data->fixed = $request->fixed;
			$data->feetype_id = $request->feetype_id;
			$data->feegroup_id = $request->feegroup_id ;
			$data->description = $request->description;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Fees Master Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('fees.master.view')->with($notification);

	    }



	 public function FeesMasterEdit($id){
	    	$editData = Feesmaster::find($id);
	    	return view('backend.setup.fees_master.edit_fees_master',compact('editData'));

	    }



	 public function FeesMasterUpdate(Request $request,$id){

	 $data = Feesmaster::find($id);
     
     $validatedData = $request->validate([
    		'name' => 'required|unique:feesmasters,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
		$data->amount = $request->amount;
		$data->due_date = $request->due_date;
		$data->percentage = $request->percentage;
		$data->fixed = $request->fixed;
		$data->feetype_id = $request->feetype_id;
		$data->feesgroup_id = $request->feesgroup_id ;
		$data->description = $request->description;
    	$data->save();

    	$notification = array(
    		'message' => 'Fees Master Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('fees.master.view')->with($notification);
    }


 public function FeesMasterDelete($id){
	    	$data = Feesmaster::find($id);
	    	$data->delete();

	    	$notification = array(
	    		'message' => 'Fees Master Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('fees.master.view')->with($notification);

	    }



}
