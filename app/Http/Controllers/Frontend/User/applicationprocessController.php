<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class applicationprocessController extends Controller
{
    public function applicationprocess(){
        
    	return view('user.applicationprocess');

    }
}
