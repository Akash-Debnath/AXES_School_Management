<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bankaccount;
use App\Models\Bank;

class BankaccountController extends Controller
{
    public function create()
    {
        $data=Bank::all();
    	return view('backend.account.bankaccount.create',compact('data'));
    }
    public function index()
    {
        $data['allData'] = Bankaccount::all();
    	return view('backend.account.bankaccount.index',$data);
    }

    public function store(Request $request){
        //dd($request->all());
    	
        $validatedData = $request->validate([
            'acc_no' => 'required|unique:bankaccounts,acc_no',
            
        ]);

        $data = new Bankaccount();
        $data->acc_no = $request->acc_no;
         $data->acc_title = $request->acc_title;
          $data->bbrname = $request->bbrname;
           $data->bid = $request->bid;
        $data->bbrcode = $request->bbrcode;
        $data->bbrlocation = $request->bbrlocation;
        $data->save();

        $notification = array(
            'message' => 'Bankaccount Inserted Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('account.bankaccount.index')->with($notification);
    }
    public function edit($id)
    {
    	$data = Bankaccount::findOrFail($id);
    	return view('backend.account.bankaccount.edit',compact('data'));
    }

    public function update(Request $request,$id){

            $data = Bankaccount::find($id);
            
            $validatedData = $request->validate([
                'acc_no' => 'required|unique:bankaccounts,acc_no',
                
            ]);

            
            $data->name = $request->name;
            $data->sort = $request->sort;
            $data->save();

            $notification = array(
                'message' => 'Bankaccount Updated Successfully',
                'alert-type' => 'success'
            );

    	return redirect()->route('account.bankaccount.index')->with($notification);
    }

    public function delete($id)
    {
        $data = Bankaccount::find($id);
	    	$data->delete();

	    	$notification = array(
	    		'message' => 'Bankaccount Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('account.bankaccount.index')->with($notification);
    } 
}
