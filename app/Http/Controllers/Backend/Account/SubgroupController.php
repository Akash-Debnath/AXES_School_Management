<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubgroupController extends Controller
{
    

    public function create(){
        return view('backend.account.subgroup.create');
    }
    public function index(){
        return view('backend.account.subgroup.index');

    }
    public function edit(){

    }
}
