<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fincom;

class FinanceCommitteeController extends Controller
{
    public function FinanceCommittee(){

        $data['allData'] = Fincom::all();
    	return view('user.fincom',$data);

    }
}
