<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use App\Models\systememail;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{
    public function emailSetting(){

        return view('backend.system.email.create-email');
    }
    public function newEmail(Request $request){

        $email=new systememail();
        $email->email_type=$request->email_type;
        $email->smtp_username=$request->smtp_username;
        $email->smtp_password=$request->smtp_password;
        $email->smtp_server=$request->smtp_server;
        $email->smtp_port=$request->smtp_port;
        $email->smtp_security=$request->smtp_security;
        $email->smtp_auth=$request->smtp_auth;
        $email->save();
        return redirect()->back()->with('message','successfully');
    }
}
