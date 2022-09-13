<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaiverpolicyController extends Controller
{
    public function Waiverpolicy( )
    {
       return view('user.waiverpolicy');
    }
}
