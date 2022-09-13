<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessAdministrationController extends Controller
{
    public function BusinessAdministration(){
        
    	return view('user.businessadministration');

    }
}
