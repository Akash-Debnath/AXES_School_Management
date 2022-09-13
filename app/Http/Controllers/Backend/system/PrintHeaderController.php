<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use App\Models\Printheaders;
use Illuminate\Http\Request;

class PrintHeaderController extends Controller
{
    public function printHeader(){
        return view('backend.system.printheader.create-printheader');
    }

    public function newPrintheader(Request $request){
        Printheaders::saveData($request);
        return redirect()->back()->with('message','successfully');
    }
}
