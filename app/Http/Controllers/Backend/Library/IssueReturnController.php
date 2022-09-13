<?php

namespace App\Http\Controllers\Backend\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IssueReturn;
use Redirect;
use Auth;
use DB;
use App\Models\AddStudent;
use Validator;
use App\Models\Book;
use App\Models\IssueReturnDetail;
use App\Models\Transactionrecord;

class IssueReturnController extends Controller
{

	
	public function create(){
        $books=Book::get();
        $student=AddStudent::get();
		//dd($books);
        $lb_track = 'LB'.date('dym') . IssueReturn::get()->max('id');
        return view('backend.library.issuereturn.create',compact('lb_track','books','student'));
    }
    public function index(){
    	$data['allData'] = IssueReturn::all();
    	return view('backend.library.issuereturn.index',$data);
 
    }
    public function store(Request $request){
        $request->validate([
			'invno' => 'required|unique:issue_returns,invno',
            'date' => 'required',
            'sid' => 'required'
        ]);
        $user_id=Auth::User()->id;
       
        $insert=DB::table('issue_returns')->insert([
            'invno' =>  $request->invno,
            'sid' =>  $request->sid,
            'date' =>  $request->date,
			'rdate' =>  $request->rdate,
            'note' =>  $request->note,
			'status' =>  $request->note,
            'user_id' => $user_id,
        ]);
    
    
        $rules = array(
        'book_id.*'  => 'required'
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            $notification = array(
                'message' => $error->errors()->all(),
                'alert-type' => 'error'
            );
            return redirect()->route('library.issuereturn.create')->with($notification);
        }
        $invno = $request->invno;
        $book_id = $request->book_id;
        $redate = $request->rdate;
		$sid = $request->sid;


        for($count = 0; $count < count($book_id); $count++)
        {
        $data = array(
            'book_id'  => $book_id[$count],
            'invno' =>$invno,
            'sid' =>$sid,
            'status'  => 1,
            'redate'  => $redate,
            
           
        );
        $insert_data[] = $data; 
       
        }

        IssueReturnDetail::insert($insert_data);

        $notification = array(
            'message' => 'Issue Added Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('library.issuereturn.create')->with($notification);

    }
    public function delete($id)
    {
            DB::table('issue_returns')->where('invno', $id)->delete();
            DB::table('issue_return_details')->where('invno', $id)->delete();
            $notification = array(
                'message' => 'Issue Deleted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('library.issuereturn.index')->with($notification);
    }

	public function view($id)
    {
            $data=IssueReturn::where('invno', $id)->first();
            $details=IssueReturnDetail::where('invno', $id)->get();
            return view('backend.library.issuereturn.view',compact('data','details'));
    }
}
