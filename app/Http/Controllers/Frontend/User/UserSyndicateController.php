<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Syndicate;

class UserSyndicateController extends Controller
{
    public function Syndicate(){

        $data['allData'] = Syndicate::get();
    	return view('user.syndicate',$data);

    }
}
