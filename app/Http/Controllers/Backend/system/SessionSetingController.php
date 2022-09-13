<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use App\Models\Sessionsettings;
use Illuminate\Http\Request;

class SessionSetingController extends Controller
{
    public function sessionSetting(){
        return view('backend.system.session.create-session',[
            'sessions'=>Sessionsettings::all(),
        ]);
    }

    public function newSessionsetting(Request $request){
//        return $request;
        $data=new Sessionsettings();
        $data->session_name=$request->session_name;
        $data->save();
        return redirect()->back()->with('message','successfully');
    }
}
