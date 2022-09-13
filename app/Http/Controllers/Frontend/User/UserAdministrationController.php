<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administration;

class UserAdministrationController extends Controller
{
    public function Administration(){

        $data['allData'] = Administration::all();
        
    	return view('user.administration',$data);

    }
}
