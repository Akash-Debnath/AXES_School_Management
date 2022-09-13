<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeesDiscount; 

class  FeesdiscountController extends Controller
{
    public function ViewFeesDiscount(){
    	$data['allData'] = FeesDiscount::all();
    	return view('backend.setup.fees_discount.view_fees_discount',$data);
 
    }


    public function FeesDiscountAdd(){
    	return view('backend.setup.fees_discount.add_fees_discount');
    }


public function FeesDiscountStore(Request $request){
	//dd($request->all());

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:fees_discounts,name',
	    		
	    	]);

	    	$data = new FeesDiscount();
	    	$data->name = $request->name;
			$data->code = $request->code ;
			$data->amount= $request->amount;
			$data->description = $request->description;
			$data->is_active = $request->is_active;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Fees Discount Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('fees.discount.view')->with($notification);

	    }



	 public function FeesDiscountEdit($id){
	    	$editData = FeesDiscount::find($id);
	    	return view('backend.setup.fees_group.edit_fees_group',compact('editData'));

	    }



	 public function FeesDiscountUpdate(Request $request,$id){

	 $data = FeesDiscount::find($id);
     
     $validatedData = $request->validate([
    		'name' => 'required|unique:fees_discounts,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
		$data->code = $request->code ;
		$data->amount= $request->amount;
		$data->description = $request->description;
		$data->is_active = $request->is_active;
    	$data->save();

    	$notification = array(
    		'message' => 'Fees  Discount Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('fees.discount.view')->with($notification);
    }


           public function FeesDiscountDelete($id){
	    	$user = FeesDiscount::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Fees Discount Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('fees.discount.view')->with($notification);

	    }



}
