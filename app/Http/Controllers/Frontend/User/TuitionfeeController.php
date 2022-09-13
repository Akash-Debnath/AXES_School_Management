<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TuitionfeeController extends Controller
{
    public function Tuitionfee(){
        
    	return view('user.tuitionfee');
}

}
