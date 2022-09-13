<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserSettingController extends Controller
{
    public function userSetting(){
        return view('backend.system.usersetting.create-usersetting');
    }
}
