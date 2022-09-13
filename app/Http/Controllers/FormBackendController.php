<?php

namespace App\Http\Controllers;

use App\Models\courseaddordrop;
use App\Models\departmentchanges;
use App\Models\improvementexams;
use App\Models\registerslip;
use App\Models\studentadmitCards;
use App\Models\studentPermission;
use Illuminate\Http\Request;

class FormBackendController extends Controller
{

    public function admitcardForms(){
        return view('backend.forms.admitcard',[
            'admitcards'=>studentadmitCards::all(),
        ]);
    }

    public function courseAddform(){
        return view('backend.forms.courseadd',[
            'courseadd'=>courseaddordrop::all(),
        ]);
    }

    public function departmentChange(){
        return view('backend.forms.department-change',[
            'departmentchange'=>departmentchanges::all(),
        ]);
    }
    public function permissionList(){
        return view('backend.forms.permission',[
            'permissions'=>studentPermission::all(),
        ]);
    }
    public function registerSlip(){
        return view('backend.forms.register-slip',[
            'registers'=>registerslip::all(),
        ]);
    }
    public function improvementExamlist(){
        return view('backend.forms.improvement-examlist',[
            'improvments'=>improvementexams::all(),
        ]);
    }
}
