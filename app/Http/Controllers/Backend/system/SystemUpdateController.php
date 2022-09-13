<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemUpdateController extends Controller
{
    public function systemUpdate(){
        return view('backend.system.systemupdate.create-systemupdate');
    }
}
