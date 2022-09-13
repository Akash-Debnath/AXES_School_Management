<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CseController extends Controller
{
    public function Cse(){
        
    	return view('user.cse');

    }
}
