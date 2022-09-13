<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SyndicateController extends Controller
{
    public function Syndicate(){
        
    	return view('user.syndicate');

    }
}
