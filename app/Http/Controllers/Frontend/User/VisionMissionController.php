<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisionMissionController extends Controller
{
    public function VisionMission(){
        
    	return view('user.vision&mission');

    }
}
