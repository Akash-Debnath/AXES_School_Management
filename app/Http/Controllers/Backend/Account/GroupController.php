<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountGroup;
use App\Models\Accountclass;

class GroupController extends Controller
{
    public function index(){
    	$data['allData'] = AccountGroup::all();
    	return view('backend.account.groups.index',$data);
 
    }


    public function create(){

		$data = Accountclass::all();
    	return view('backend.account.groups.create',compact('data'));
    }


        public function store(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:accountgroups,name',
	    		
	    	]);

	    	$data = new AccountGroup();
            $data->clid = $request->clid;
	    	$data->name = $request->name;
            $data->description = $request->description;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Groups Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('account.group.index')->with($notification);

	    }



        public function edit($id){     
	    	$editData = AccountGroup::find($id);
	    	return view('backend.account.group.edit',compact('editData'));
	    }


    public function update(Request $request,$id){

        $data = AccountGroup::find($id);
        
        $validatedData = $request->validate([
                'name' => 'required|unique:accountgroups,name,'.$data->id
                
            ]);

            
            $data->clid = $request->clid;
	    	$data->name = $request->name;
            $data->description = $request->description;
            $data->save();

            $notification = array(
                'message' => 'Groups Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('account.group.index')->with($notification);
    }


    public function delete($id){
	    	$data = AccountGroup::find($id);
	    	$data->delete();

	    	$notification = array(
	    		'message' => 'Group Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('account.group.index')->with($notification);

	}
}
