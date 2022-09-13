<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;
use Validator;
use App\Models\Feesmaster;
use App\Models\Student;
use App\Models\FeesCollection;
use App\Models\FeesCollectionDetail;
use App\Models\Transactionrecord;

class FeesCollectionController extends Controller
{
    public function create(){
        $feesmaster=Feesmaster::all();
        $student=Student::all();
        $col_track = 'COL'.date('dym') . FeesCollection::get()->max('id');
        return view('backend.setup.fees_collection.create',compact('col_track','feesmaster','student'));
    }
    public function index(){
    	$data['allData'] = FeesCollection::get();
    	return view('backend.setup.fees_collection.index',$data);
 
    }
    public function store(Request $request){
        $request->validate([
            'invno'=> 'required',
            'date' => 'required',
            'sid' => 'required'
        ]);
        $user_id=Auth::User()->id;
       
        $insert=DB::table('fees_collections')->insert([
            'invno' =>  $request->invno,
            'sid' =>  $request->sid,
            'tamount' =>  $request->total,
            'tdiscount' =>  $request->tdiscount,
            'date' =>  $request->date,
            'note' =>  $request->note,
            'uid' => $user_id,
        ]);
    
    
        $rules = array(
        'fees_master.*'  => 'required',
        'amount.*'  => 'required'
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            $notification = array(
                'message' => $error->errors()->all(),
                'alert-type' => 'error'
            );
            return redirect()->route('fees.feescollectionvoucher.create')->with($notification);
        }
        $invno = $request->invno;
        $fees_master = $request->fees_master;
        $discount = $request->discount;
        $amount = $request->amount;
        $sid = $request->sid;


        for($count = 0; $count < count($fees_master); $count++)
        {
        $data = array(
            'fees_master'  => $fees_master[$count],
            'invno' =>$invno,
            'sid' =>$sid,
            'amount'  => $amount[$count],
            'discount'  => $discount[$count],
            'uid' => $user_id
            
           
        );
        $insert_data[] = $data; 
        $cashdata = array(
            'credit' => $fees_master[$count],
            'debit'  => 'LE_5',
            'invno' =>$invno,
            'amount'  => $amount[$count],
            'uid' => $user_id,
            'status'=>'COL',
            'date'=>$request->date
            
           
        );
        $insert_cash[] = $cashdata;
       
        }

        FeesCollectionDetail::insert($insert_data);
        Transactionrecord::insert($insert_cash);

        $notification = array(
            'message' => 'Collection Added Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('fees.feescollectionvoucher.create')->with($notification);

    }
    public function delete($id)
    {
            DB::table('fees_collections')->where('invno', $id)->delete();
            DB::table('transactionrecords')->where('invno', $id)->delete();
            DB::table('fees_collection_details')->where('invno', $id)->delete();
            $notification = array(
                'message' => 'Collection Deleted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('fees.feescollectionvoucher.index')->with($notification);
    }
    public function view($id)
    {
            $payment=FeesCollection::where('invno', $id)->first();
            $paymentdetails= FeesCollectionDetail::where('invno', $id)->get();
            return view('backend.setup.fees_collection.view',compact('payment','paymentdetails'));
    }
}
