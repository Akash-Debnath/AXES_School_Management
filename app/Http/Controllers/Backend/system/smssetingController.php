<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class smssetingController extends Controller
{
    public function smsSetting(){
        return view('backend.system.smsSystem.create-sms');
    }
}
