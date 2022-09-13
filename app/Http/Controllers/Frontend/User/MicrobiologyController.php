<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MicrobiologyController extends Controller
{
    public function Microbiology(){
        
    	return view('user.microbiology');

    }
}
