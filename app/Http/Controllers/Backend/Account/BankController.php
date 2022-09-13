<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank;
Use Auth;

class BankController extends Controller
{
    public function create()
    {
    	return view('backend.account.bank.create');
    }
    public function index()
    {
        $data['allData'] = Bank::all();
    	return view('backend.account.bank.index',$data);
    }

    public function store(Request $request){
    	
        $validatedData = $request->validate([
            'name' => 'required|unique:banks,name',
            
        ]);

        $data = new Bank();
        $data->name = $request->name;
        $data->sort = $request->sort;
        $data->save();

        $notification = array(
            'message' => 'Bank Inserted Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('account.bank.index')->with($notification);
    }
    public function edit($id)
    {
    	$data = Bank::findOrFail($id);
    	return view('backend.account.bank.edit',compact('data'));
    }

    public function update(Request $request,$id){

            $data = Bank::find($id);
            
            $validatedData = $request->validate([
                'name' => 'required|unique:banks,name',
                
            ]);

            
            $data->name = $request->name;
            $data->sort = $request->sort;
            $data->save();

            $notification = array(
                'message' => 'Bank Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('account.bank.index')->with($notification);
    }

    public function delete($id)
    {
        $data = Bank::find($id);
	    	$data->delete();

	    	$notification = array(
	    		'message' => 'Bank Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('account.bank.index')->with($notification);
    } 
}
