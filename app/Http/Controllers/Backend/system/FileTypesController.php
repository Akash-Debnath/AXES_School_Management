<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileTypesController extends Controller
{
    public function fileTypes(){
        return view('backend.system.filetype.create-filetype');
    }
}
