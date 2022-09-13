<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bot;

class UserBotController extends Controller
{
    public function Bot(){

        $data['allData'] = Bot::get();
    	return view('user.bot',$data);

    }
}
