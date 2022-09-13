<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvailableprogramsController extends Controller
{
    public function Availableprograms(){

       return view('user.availableprograms');

    }
}

