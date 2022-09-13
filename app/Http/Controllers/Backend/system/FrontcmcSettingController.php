<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontcmcSettingController extends Controller
{
    public function frontcmsSetting(){
        return view('backend.system.frontcmcsetting.create-frontcms');
    }
}
