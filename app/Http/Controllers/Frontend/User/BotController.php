<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class BotController extends Controller
{
    public function Bot(){

        $data['allData'] = Student::get();
    	return view('user.bot',$data);

    }
}
