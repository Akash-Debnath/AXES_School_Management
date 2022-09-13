<?php

namespace App\Http\Controllers\Backend\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Websiteinfo;

class WebsiteinfoController extends Controller
{
    public function Websiteinfo(){
        $data = Websiteinfo::where('id','=','1')->first();
       // dd($data);

      return view('backend.webinfo.website.websiteinfo',compact('data'));
    }

    public function WebsiteinfoUpdate(Request $request,$id){


    	$user = Websiteinfo::where('id',$id)->first();    	 
    	$user->name = $request->name;
    	$user->mobile = $request->mobile;
    	$user->address = $request->address;
    	$user->email = $request->email;
    	$user->phone = $request->phone;
        $user->description = $request->description;
        $user->marqmessage = $request->marqmessage;
    	if ($request->file('logo')) {
    		$file = $request->file('logo');
    		@unlink(public_path('upload/website/'.$user->logo));
    		$filename1 = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/website'),$filename1);
    		$user['logo'] = $filename1;
    	}
        if ($request->file('icon')) {
    		$file = $request->file('icon');
    		@unlink(public_path('upload/website/'.$user->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/website'),$filename);
    		$user['icon'] = $filename;
    	}
 	    $user->save();



    	$notification = array(
    		'message' => 'Website Information Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('Websiteinfo.view')->with($notification);

    } 
}
