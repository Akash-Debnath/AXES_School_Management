<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountGroup;
use App\Models\Accountsubgroup;
use App\Models\Accountledger;

class AccountledgerController extends Controller
{
    public function index(){
    	$data['allData'] = Accountledger::all();
    	return view('backend.account.ledger.index',$data);
 
    }


    public function create(){

		$data = Accountgroup::all();
        $subdata = Accountsubgroup::all();
    	return view('backend.account.ledger.create',compact('data','subdata'));
    }


        public function store(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:accountledgers,name',
	    		
	    	]);

	    	$data = new Accountledger();
            $data->grp_id = $request->grp_id;
			$data->sub_grp_id = $request->sub_grp_id;
	    	$data->name = $request->name;
            $data->description = $request->description;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Ledger Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('account.ledger.index')->with($notification);

	    }



        public function edit($id){     
	    	$editData = Accountledger::find($id);
	    	return view('backend.account.ledger.edit',compact('editData'));
	    }


    public function update(Request $request,$id){

        $data = Accountledger::find($id);
        
        $validatedData = $request->validate([
                'name' => 'required|unique:accountledgers,name,'.$data->id
                
            ]);

            
            $data->grp_id = $request->grp_id;
            $data->sub_grp_id = $request->sub_grp_id;
	    	$data->name = $request->name;
            $data->description = $request->description;
            $data->save();

            $notification = array(
                'message' => 'Ledger Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('account.ledger.index')->with($notification);
    }


    public function delete($id){
	    	$data = Accountledger::find($id);
	    	$data->delete();

	    	$notification = array(
	    		'message' => 'Ledger Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('account.ledger.index')->with($notification);

	}
}
