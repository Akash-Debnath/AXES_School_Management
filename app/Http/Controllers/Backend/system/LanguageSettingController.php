<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageSettingController extends Controller
{
    public function languageSetting(){
        return view('backend.system.languagesetting.create_language');
    }
}
