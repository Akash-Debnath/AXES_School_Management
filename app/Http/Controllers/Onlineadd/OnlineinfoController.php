<?php

namespace App\Http\Controllers\Onlineadd;

use DB;
use Auth;
use Redirect;
use App\Models\studentbasicinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\AssignStudent;
use App\Models\Student;
use App\Models\DiscountStudent;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\Department;
use App\Models\Faculty;
class OnlineinfoController extends Controller
{
    public function OnlineapplicationView(){


    	$data = DB::table('studentbasicinfos')->get();
    	return view('backend.onlineadd.onlineapplist',compact('data'));

    }

    public function Approve($id){
        $status=2;
        $student = studentbasicinfo::find($id);
    	$student->status = $status;
        $student->save();
        $notification = array(
            'message' => 'Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('onlineapplication.viewlist')->with($notification);

    }

    public function Reject($id){
        $status=3;
        $student = studentbasicinfo::find($id);
        $student->status = $status;
        $student->save();
        $notification = array(
            'message' => 'Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('onlineapplication.viewlist')->with($notification);

    }
    public function Enroll($id){
        $status=4;
        //dd($id);
        $student = studentbasicinfo::find($id);
        $sid=$student->sid;
        $data['student'] = studentbasicinfo::find($id);
    
        $data['studentinfo'] = DB::table('studentbasicinfos')
        ->where('studentbasicinfos.sid',$sid)
        ->first();
       
        $student->status = $status;
        $student->save();
        $notification = array(
            'message' => 'Updated Successfully',
            'alert-type' => 'success'
        );

        $data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
    	$data['groups'] = StudentGroup::all();
    	$data['shifts'] = StudentShift::all();
		$data['departments'] = Department::all();
		$data['facultys'] = Faculty::all();
        //dd($data['studentinfo']);
    	return view('backend.student.student_reg.student_add',$data);

    }


     public function details($id){
         $data = DB::table('studentbasicinfos')
        ->where('studentbasicinfos.sid',$id)
        ->first();
        $student = studentbasicinfo::find($id);

         	return view('backend.onlineadd.onlineappdetails',compact('data'));

    }


}
