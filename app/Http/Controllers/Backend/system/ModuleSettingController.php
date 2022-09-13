<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleSettingController extends Controller
{
    public function modulesSetting(){
        return view('backend.system.modulesetting.create-module');
    }
}
