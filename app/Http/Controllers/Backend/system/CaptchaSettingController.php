<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaptchaSettingController extends Controller
{
    public function captchaSetting(){
        return view('backend.system.capchasetting.create_capcha');
    }
}
