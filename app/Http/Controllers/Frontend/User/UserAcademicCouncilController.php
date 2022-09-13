<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Academiccouncil;

class UserAcademicCouncilController extends Controller
{
    public function UserAcademicCouncil(){

        $data['allData'] = Academiccouncil::all();
        
    	return view('user.academiccouncil',$data);

    }
}
