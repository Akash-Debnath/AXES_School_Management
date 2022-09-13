<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagefromfounderController extends Controller
{
    public function Messagefromfounder(){
        
    	return view('user.messagefromfounder');

  }
}