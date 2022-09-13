<?php

namespace App\Http\Controllers\user\others;

use App\Http\Controllers\Controller;
use App\Models\studentadmitCards;
use Illuminate\Http\Request;

class AdmitCardController extends Controller
{
    public function admitCard(){
        return view('user.others.admit-card');
    }

    public function saveAdmitCard(Request $request){
        $admit=new studentadmitCards();
        $admit->student_id =$request->student_id;
        $admit->st_department=$request->st_department;
        $admit->student_name=$request->student_name;
        $admit->student_email=$request->student_email;
        $admit->student_mobile=$request->student_mobile;
        $admit->save();
        return redirect()->back()->with('message','data save successfully');

    }
    
     public function admitcardForms(){
        return view('backend.forms.admitcard',[
            'admitcards'=>studentadmitCards::all(),
        ]);
    }
    
}
