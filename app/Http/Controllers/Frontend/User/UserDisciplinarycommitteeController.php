<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disciplinarycom;

class UserDisciplinarycommitteeController extends Controller
{
    public function Disciplinarycommittee(){

        $data['allData'] = Disciplinarycom::get();
    	return view('user.disciplinarycommittee',$data);

    }
}
