<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountGroup;
use App\Models\Accountsubgroup;

class AccountsubgroupController extends Controller
{
    public function index(){
    	$data['allData'] = Accountsubgroup::all();
    	return view('backend.account.subgroup.index',$data);
 
    }


    public function create(){

		$data = Accountgroup::all();
    	return view('backend.account.subgroup.create',compact('data'));
    }


        public function store(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:accountsubgroups,name',
	    		
	    	]);

	    	$data = new Accountsubgroup();
            $data->grp_id = $request->grp_id;
	    	$data->name = $request->name;
            $data->description = $request->description;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Subgroups Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('account.subgroup.index')->with($notification);

	    }



        public function edit($id){     
	    	$editData = Accountsubgroup::find($id);
	    	return view('backend.account.subgroup.edit',compact('editData'));
	    }


    public function update(Request $request,$id){

        $data = Accountsubgroup::find($id);
        
        $validatedData = $request->validate([
                'name' => 'required|unique:accountsubgroups,name,'.$data->id
                
            ]);

            
            $data->grp_id = $request->grp_id;
	    	$data->name = $request->name;
            $data->description = $request->description;
            $data->save();

            $notification = array(
                'message' => 'Subgroups Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('account.subgroup.index')->with($notification);
    }


    public function delete($id){
	    	$data = Accountsubgroup::find($id);
	    	$data->delete();

	    	$notification = array(
	    		'message' => 'Subgroup Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('account.subgroup.index')->with($notification);

	}
}
