<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentProfileSettingController extends Controller
{
    public function studentProfile(){
        return view('backend.system.studentProfile.create-studentprofile');
    }
}
