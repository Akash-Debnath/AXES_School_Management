<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemFieldsController extends Controller
{
    public function systemFields(){
        return view('backend.system.systemfield.create-system');
    }
}
