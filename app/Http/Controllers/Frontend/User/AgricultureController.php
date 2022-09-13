<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgricultureController extends Controller
{
    public function Agriculture(){
        
    	return view('user.agriculture');

    }
}
