<?php

namespace App\Http\Controllers\Backend\Notice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticeboard;
use Auth;

class NoticeboardController extends Controller
{
   
    public function Noticeview(){
    	$data = Noticeboard::all();
    	
    	return view('user.noticeboard.noticelist',compact('data'));

    }

    public function view($id){
    	$data = Noticeboard::where('id','=',$id)->first();
    	
    	return view('user.noticeboard.view',compact('data'));

    }
    public function Noticeviewlist(){
    	$data['allData'] = Noticeboard::all();
    	
    	return view('backend.notice.index',$data);

    }

    public function Noticecreate(){
    	// $allData = User::all();
    	
    	return view('backend.notice.create');

    }

    public function noticestore(Request $request){
  
        $noticedata = new Noticeboard();
        
        
        $noticedata->title = $request->title;
        $noticedata->description = $request->description;
        if ($request->file('image')) {
    		$file1 = $request->file('image');
    		$filename1 = date('YmdHi').$file1->getClientOriginalName();
    		$file1->move(public_path('upload/notice'),$filename1);
    		$noticedata['image'] = $filename1;
    	}
        if ($request->file('file')) {
    		$file = $request->file('file');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/notice'),$filename);
    		$noticedata['file'] = $filename;
    	}

    
        //$noticedata->uid = Auth::user('id');
       
        $noticedata->save();
        
         $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('notice.create')->with($notification);
    }

    public function noticeDelete($id){
        $user = Noticeboard::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Notice Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('notice.viewlist')->with($notification);

}
}
