<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;
use Validator;
use App\Models\Accountpayment;
use App\Models\Accountpaymentdetail;
use App\Models\Transactionrecord;


class PaymentController extends Controller
{
    public function create(){
        $pay_track = 'PAV'.date('dym') . Accountpayment::get()->max('id');
        return view('backend.account.payment.create',compact('pay_track'));
    }
    public function index(){
    	$data['allData'] = Accountpayment::all();
    	return view('backend.account.payment.index',$data);
 
    }
    public function store(Request $request){
        $request->validate([
            'voucher_no'=> 'required',
            'date' => 'required'
        ]);
        $user_id=Auth::User()->id;
       
        $insert=DB::table('accountpayments')->insert([
            'voucher_no' =>  $request->voucher_no,
            'amount' =>  $request->total,
            'date' =>  $request->date,
            'note' =>  $request->note,
            'uid' => $user_id,
        ]);
    
    
        $rules = array(
        'payment_source.*'  => 'required',
        'payment_to.*'  => 'required',
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
        $payment_source = $request->payment_source;
        $payment_to = $request->payment_to;
        $amount = $request->amount;
        $ref = $request->ref;
        $cheque_no = $request->cheque_no;
        $cheque_date = $request->cheque_date;


        for($count = 0; $count < count($payment_source); $count++)
        {
        $data = array(
            'payment_source' => $payment_source[$count],
            'payment_to'  => $payment_to[$count],
            'payid' =>$voucher_no,
            'cheque_no' => $cheque_no[$count],
            'cheque_date'  => $cheque_date[$count],
            'amount'  => $amount[$count],
            'ref'  => $ref[$count],
            'uid' => $user_id
            
           
        );
        $insert_data[] = $data; 
        $cashdata = array(
            'credit' => $payment_source[$count],
            'debit'  => $payment_to[$count],
            'invno' =>$voucher_no,
            'cheque_no' => $cheque_no[$count],
            'cheque_date'  => $cheque_date[$count],
            'amount'  => $amount[$count],
            'ref'  => $ref[$count],
            'uid' => $user_id,
            'status'=>'PAV',
            'date'=>$request->date
            
           
        );
        $insert_cash[] = $cashdata;
       
        }

        Accountpaymentdetail::insert($insert_data);
        Transactionrecord::insert($insert_cash);

        $notification = array(
            'message' => 'Payment Added Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('account.paymentvoucher.create')->with($notification);

    }
    public function delete($id)
    {
            DB::table('accountpayments')->where('voucher_no', $id)->delete();
            DB::table('transactionrecords')->where('invno', $id)->delete();
            DB::table('accountpaymentdetails')->where('payid', $id)->delete();
            $notification = array(
                'message' => 'Payment Deleted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('account.paymentvoucher.index')->with($notification);
    }
    public function view($id)
    {
            $payment=DB::table('accountpayments')->where('voucher_no', $id)->first();
            $paymentdetails=DB::table('accountpaymentdetails')->where('payid', $id)->get();
            return view('backend.account.payment.view',compact('payment','paymentdetails'));
    }
}
