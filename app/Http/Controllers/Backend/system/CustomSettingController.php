<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomSettingController extends Controller
{
    public function customFields(){
        return view('backend.system.customsetting.create_custom');
    }
}
