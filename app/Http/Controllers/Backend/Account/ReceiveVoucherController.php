<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;
use Validator;
use App\Models\Accountreceive;
use App\Models\Accountreceivedetail;
use App\Models\Transactionrecord;

class ReceiveVoucherController extends Controller
{
    public function create(){
        $rev_track = 'REV'.date('dym') . Accountreceive::get()->max('id');
        return view('backend.account.receive.create',compact('rev_track'));
    }
    public function index(){
    	$data['allData'] = Accountreceive::all();
    	return view('backend.account.receive.index',$data);
 
    }
    public function store(Request $request){
        $request->validate([
            'voucher_no'=> 'required',
            'date' => 'required'
        ]);
        $user_id=Auth::User()->id;
       
        $insert=DB::table('accountreceives')->insert([
            'voucher_no' =>  $request->voucher_no,
            'amount' =>  $request->total,
            'date' =>  $request->date,
            'note' =>  $request->note,
            'uid' => $user_id,
        ]);
    
    
        $rules = array(
        'receive_to.*'  => 'required',
        'receive_from.*'  => 'required',
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
        $receive_from = $request->receive_from;
        $receive_to = $request->receive_to;
        $amount = $request->amount;
        $ref = $request->ref;
        $cheque_no = $request->cheque_no;
        $cheque_date = $request->cheque_date;


        for($count = 0; $count < count($receive_to); $count++)
        {
        $data = array(
            'receive_to' => $receive_to[$count],
            'receive_from'  => $receive_from[$count],
            'revid' =>$voucher_no,
            'cheque_no' => $cheque_no[$count],
            'cheque_date'  => $cheque_date[$count],
            'amount'  => $amount[$count],
            'ref'  => $ref[$count],
            'uid' => $user_id
            
           
        );
        $insert_data[] = $data; 
        $cashdata = array(
            'credit' => $receive_from[$count],
            'debit'  => $receive_to[$count],
            'invno' =>$voucher_no,
            'cheque_no' => $cheque_no[$count],
            'cheque_date'  => $cheque_date[$count],
            'amount'  => $amount[$count],
            'ref'  => $ref[$count],
            'uid' => $user_id,
            'status'=>'REV',
            'date'=>$request->date
            
           
        );
        $insert_cash[] = $cashdata;
       
        }

        Accountreceivedetail::insert($insert_data);
        Transactionrecord::insert($insert_cash);

        $notification = array(
            'message' => 'Receive Added Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('account.receivevoucher.create')->with($notification);

    }
    public function delete($id)
    {
            DB::table('accountreceives')->where('voucher_no', $id)->delete();
            DB::table('transactionrecords')->where('invno', $id)->delete();
            DB::table('accountreceivedetails')->where('revid', $id)->delete();
            $notification = array(
                'message' => 'Receive Deleted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('account.receivevoucher.index')->with($notification);
    }
     public function view($id)
    {
            $receive=DB::table('accountreceives')->where('voucher_no', $id)->first();
            $receivedetails=DB::table('accountreceivedetails')->where('revid', $id)->get();
            return view('backend.account.receive.view',compact('receive','receivedetails'));
    }
}
