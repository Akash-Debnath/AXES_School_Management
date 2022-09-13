<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dean;

class UserDeanofthefacultiesController extends Controller
{
    public function Deanofthefaculties(){

        $data['allData'] = Dean::get();
    	return view('user.deans',$data);

    }

    public function facultyMembers(){

      
        $data['allData'] = Dean::get();
        //dd($data);
    	return view('user.facultis.faculty_member',$data);

    }

    public function profileView($id){
      
        $data['deans'] = Dean::where('id',$id)->first();
    	return view('user.facultis.teacher_view',$data);

    }
}
