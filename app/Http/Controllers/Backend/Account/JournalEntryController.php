<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountGroup;
use App\Models\Accountsubgroup;
use App\Models\Accountjournal;
use App\Models\Accountjournaldetail;
use App\Models\Transactionrecord;
use Redirect;
use Auth;
use DB;
use Validator;

class JournalEntryController extends Controller
{
    public function create(){
        $subgroups = Accountsubgroup::all();
        $jour_track = 'JOU'.date('dym') . Accountjournal::get()->max('id');
        return view('backend.account.journal.create',compact('jour_track','subgroups'));
    }
    public function index(){
    	$data['allData'] = Accountjournal::all();
    	return view('backend.account.journal.index',$data);
 
    }
    public function store(Request $request){
        $request->validate([
            'voucher_no'=> 'required',
            'date' => 'required'
        ]);
        $user_id=Auth::User()->id;
       
        $insert=DB::table('accountjournals')->insert([
            'voucher_no' =>  $request->voucher_no,
            'amount' =>  $request->total,
            'date' =>  $request->date,
            'note' =>  $request->note,
            'uid' => $user_id,
        ]);
    
    
        $rules = array(
        'debit_ledger_id.*'  => 'required',
        'credit_ledger_id.*'  => 'required',
        'amount.*'  => 'required'
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            $notification = array(
                'message' => $error->errors()->all(),
                'alert-type' => 'error'
            );
            return redirect()->route('account.paymentvoucher.create')->with($notification);
        }
        $voucher_no = $request->voucher_no;
        $credit_ledger_id = $request->credit_ledger_id;
        $credit_sub_group_id = $request->credit_sub_group_id;
        $debit_sub_group_id = $request->debit_sub_group_id;
        $debit_ledger_id = $request->debit_ledger_id;
        $amount = $request->amount;
        $ref = $request->ref;
        $cheque_no = $request->cheque_no;
        $cheque_date = $request->cheque_date;


        for($count = 0; $count < count($credit_ledger_id); $count++)
        {
        $data = array(
            'credit_ledger_id' => $credit_ledger_id[$count],
            'credit_sub_group_id'  => $credit_sub_group_id[$count],
            'debit_sub_group_id' => $debit_sub_group_id[$count],
            'debit_ledger_id'  => $debit_ledger_id[$count],
            'jid' =>$voucher_no,
            'cheque_no' => $cheque_no[$count],
            'cheque_date'  => $cheque_date[$count],
            'debit_amount'  => $amount[$count],
            'credit_amount'  => $amount[$count],
            'ref'  => $ref[$count],
            'uid' => $user_id
            
           
        );
        $insert_data[] = $data; 
        $cashdata = array(
            'credit' => $credit_ledger_id[$count],
            'debit'  => $debit_ledger_id[$count],
            'invno' =>$voucher_no,
            'cheque_no' => $cheque_no[$count],
            'cheque_date'  => $cheque_date[$count],
            'amount'  => $amount[$count],
            'ref'  => $ref[$count],
            'uid' => $user_id,
            'status'=>'JOU',
            'date'=>$request->date
            
           
        );
        $insert_cash[] = $cashdata;
       
        }

        Accountjournaldetail::insert($insert_data);
        Transactionrecord::insert($insert_cash);

        $notification = array(
            'message' => 'Journal Added Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('account.journal.create')->with($notification);

    }
    public function delete($id)
    {
            DB::table('accountjournals')->where('voucher_no', $id)->delete();
            DB::table('transactionrecords')->where('invno', $id)->delete();
            DB::table('accountjournaldetails')->where('payid', $id)->delete();
            $notification = array(
                'message' => 'Journal Deleted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('account.journal.index')->with($notification);
    }
    public function view($id)
    {
            $journal=DB::table('accountjournals')->where('voucher_no', $id)->first();
            $journaldetails=DB::table('accountjournaldetails')->where('jid', $id)->get();
            return view('backend.account.journal.view',compact('journal','journaldetails'));
    }
}
