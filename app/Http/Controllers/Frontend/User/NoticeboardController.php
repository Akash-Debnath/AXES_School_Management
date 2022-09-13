<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticeboard;

class NoticeboardController extends Controller
{
   
    public function Noticeview(){
    	$data = noticeboard::all();
    	
    	return view('user.noticeboard.view',compact('data'));

    }

    public function Noticecreate(){
    	// $allData = User::all();
    	
    	return view('backend.notice.create');

    }

    public function noticestore(Request $request){
        $noticedata = new Noticeboard();
        
        $noticedata->title = $request->title;
        $noticedata->Description = $request->description;
       
        $noticedata->save();
        
         $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('notice.create')->with($notification);
    }
}
