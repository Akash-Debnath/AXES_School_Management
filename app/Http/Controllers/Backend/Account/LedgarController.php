<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LedgarController extends Controller
{
    public function create(){
        return view('backend.account.ledgar.create');
    }
    public function index(){
        return view('backend.account.ledgar.index');

    }
    public function edit(){

    }
}
