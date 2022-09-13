<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintcommitteeController extends Controller
{
    public function Complaintcommittee(){
        
    	return view('user.complaintcommittee');

    }
}
