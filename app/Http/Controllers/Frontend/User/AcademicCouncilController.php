<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicCouncilController extends Controller
{
    public function AcademicCouncil(){
        
    	return view('user.academiccouncil');

    }
}
