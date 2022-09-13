<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mobileaccount;

class MobileaccountController extends Controller
{
    public function index(){
    	$data['allData'] = Mobileaccount::all();
    	return view('backend.account.mobileaccount.index',$data);
 
    }


    public function create(){

    	return view('backend.account.mobileaccount.create');
    }


        public function store(Request $request){

	    	$validatedData = $request->validate([
	    		'mname' => 'required',
                'mobile' => 'required',
	    		
	    	]);

	    	$data = new Mobileaccount();
            $data->mname = $request->mname;
	    	$data->mobile = $request->mobile;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Mobile Account Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('account.mobileaccount.index')->with($notification);

	    }



        public function edit($id){     
	    	$data = Mobileaccount::find($id);
	    	return view('backend.account.mobileaccount.edit',compact('data'));
	    }


    public function update(Request $request,$id){

        $data = Mobileaccount::find($id);
        
        $validatedData = $request->validate([
                'mname' => 'required',
                'mobile' => 'required',
                
            ]);

            
            $data->mname = $request->mname;
	    	$data->mobile = $request->mobile;
            $data->save();

            $notification = array(
                'message' => 'Mobile Account Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('account.mobileaccount.index')->with($notification);
    }


    public function delete($id){
	    	$data = Mobileaccount::find($id);
	    	$data->delete();

	    	$notification = array(
	    		'message' => 'Mobile Account Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('account.mobileaccount.index')->with($notification);

	}
}
