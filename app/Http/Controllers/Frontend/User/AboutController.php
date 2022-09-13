<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
class AboutController extends Controller
{
   public function About(){
        $data['allData'] = Teacher::all();
    	return view('user.about',$data);

    }

   
    
    
    
    
}
