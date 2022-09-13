<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaintcom;

class UserComplaintcommitteeController extends Controller
{
    public function Complaintcommittee(){
       $data['allData'] =Complaintcom::get();
        
    	return view('user.complaintcommittee',$data);

    }
}
