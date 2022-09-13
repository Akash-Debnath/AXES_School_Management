<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;
use Validator;
use App\Models\Expense;
use App\Models\Expensedetail;
use App\Models\Accountledger;
use App\Models\Transactionrecord;

class ExpenseVoucherController extends Controller
{
    public function create(){
        $ledger=Accountledger::whereIn('grp_id', ['12', '13'])->get();
        $exp_track = 'EXP'.date('dym') . Expense::get()->max('id');
        return view('backend.account.expense.create',compact('exp_track','ledger'));
    }
    public function index(){
    	$data['allData'] = Expense::all();
    	return view('backend.account.expense.index',$data);
 
    }
    public function store(Request $request){
        $request->validate([
            'voucher_no'=> 'required',
            'date' => 'required'
        ]);
        $user_id=Auth::User()->id;
       
        $insert=DB::table('expenses')->insert([
            'voucher_no' =>  $request->voucher_no,
            'amount' =>  $request->total,
            'date' =>  $request->date,
            'note' =>  $request->note,
            'uid' => $user_id,
        ]);
    
    
        $rules = array(
        'exp_for.*'  => 'required',
        'amount.*'  => 'required'
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            $notification = array(
                'message' => $error->errors()->all(),
                'alert-type' => 'error'
            );
            return redirect()->route('account.expensevoucher.create')->with($notification);
        }
        $voucher_no = $request->voucher_no;
        $exp_for = $request->exp_for;;
        $amount = $request->amount;
        $ref = $request->ref;


        for($count = 0; $count < count($exp_for); $count++)
        {
        $data = array(
            'exp_for'  => $exp_for[$count],
            'expid' =>$voucher_no,
            'amount'  => $amount[$count],
            'ref'  => $ref[$count],
            'uid' => $user_id
            
           
        );
        $insert_data[] = $data; 
        $cashdata = array(
            'credit' => 'LE_5',
            'debit'  => $exp_for[$count],
            'invno' =>$voucher_no,
            'amount'  => $amount[$count],
            'ref'  => $ref[$count],
            'uid' => $user_id,
            'status'=>'EXP',
            'date'=>$request->date
            
           
        );
        $insert_cash[] = $cashdata;
       
        }

        Expensedetail::insert($insert_data);
        Transactionrecord::insert($insert_cash);

        $notification = array(
            'message' => 'Expense Added Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('account.expensevoucher.create')->with($notification);

    }
    public function delete($id)
    {
            DB::table('expenses')->where('voucher_no', $id)->delete();
            DB::table('transactionrecords')->where('invno', $id)->delete();
            DB::table('expensedetails')->where('expid', $id)->delete();
            $notification = array(
                'message' => 'Expense Deleted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('account.expensevoucher.index')->with($notification);
    }
}
