<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EligibilityController extends Controller
{
    public function  Eligibility (){
        
    	return view('user.eligibility');

    }
}
