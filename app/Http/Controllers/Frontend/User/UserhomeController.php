<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Noticeboard;
use App\Models\Slider;
use App\Models\Department;
use App\Models\Program;
use App\Models\Faculty;
use App\Models\Visitorsay;
use App\Models\Newsevent;
use App\Models\Gallery;
use App\Models\Student;
use App\Models\Socialgroup;
use App\Models\UploadContent;
use App\Models\Course;



class UserhomeController extends Controller
{
    public function Userhome(){

        $data['notices'] = Noticeboard::all();
        $data['sliders'] = Slider::all();
        $data['visitorsay'] = Visitorsay::all();
        $data['program'] = Program::all();
        $data['faculty'] = Faculty::all();
        $data['department'] = Department::all();
        $data['newsevent'] = Newsevent::all();
        $data['gallery'] = Gallery::all();

        $data['total_dept']= Department::count();
        $data['total_student']= Student::count();
        $data['facebook']= Socialgroup::Where('type','Facebook')->first();
        $data['youtube']= Socialgroup::Where('type','Youtube')->first();
        
    	return view('user.userhome',$data);


    }

    public function Allnews(){

        $data['data'] = Newsevent::all();
    	return view('user.allnews',$data);


    }
    public function Newsdetails($id){

        $data['item'] = Newsevent::where('id',$id)->first();
    	return view('user.newsdetails',$data);


    }

    public function Allnotice(){

        $data['data'] = Noticeboard::all();
    	return view('user.allnotice',$data);


    }
    public function Noticedetails($id){

        $data['item'] = Noticeboard::where('id',$id)->first();
    	return view('user.noticedetails',$data);


    }


    public function Alldepartment(){

        $data['data'] = Department::all();
    	return view('user.alldepartment',$data);


    }
    public function Departmentdetails($id){

        $data['item'] = Department::where('id',$id)->first();
    	return view('user.departmentdetails',$data);


    }

    public function Allfaculty(){

        $data['data'] = Faculty::all();
    	return view('user.allfaculty',$data);


    }
    public function Facultydetails($id){

        $data['item'] = Faculty::where('id',$id)->first();
    	return view('user.facultydetails',$data);


    }
    
     public function circular(){

        $data['content'] = UploadContent::get();
        return view('user.circullar',$data);


    }
    public function journals(){

        return view('user.journals');


    }
    public function conference(){

        return view('user.conference');


    }
    public function convocation(){

        return view('user.convocation');


    }
    public function research(){

        return view('user.research');


    }

    public function invoice(){

        return view('user.invoice');

   
    }
    public function Allcourse(){

        $data['data'] = Course::all();
    	return view('user.allcourse',$data);


    }
    public function Coursedetails($id){

        $data['item'] = Course::where('id',$id)->first();
    	return view('user.coursedetails',$data);


    }
    
}

