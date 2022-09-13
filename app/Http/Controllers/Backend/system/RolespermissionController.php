<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolespermissionController extends Controller
{
    public function rolespermission(){
        return view('backend.system.rolespermission.create-rolepermission');
    }
}
