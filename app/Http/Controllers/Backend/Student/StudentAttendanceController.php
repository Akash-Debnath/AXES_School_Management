<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AssignStudent;
use App\Models\Student;
use App\Models\DiscountStudent;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\StudentAttendance;
use App\Models\StudentAttendanceDetail;

use DB;
use PDF;

use Auth;

use Validator;


class StudentAttendanceController extends Controller
{

	public function index(){
		$allData['years'] = StudentYear::all();
    	$allData['classes'] = StudentClass::all();
		$allData['shifts'] = StudentShift::all();

		$allData['departments'] = Department::all();
		$allData['facultys'] = Faculty::all();
    	$allData['attendance'] = StudentAttendance::all();
    

    	return view('backend.student.attendance.index',$allData);

    }
    public function create(){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
		$data['shifts'] = StudentShift::all();

		$data['departments'] = Department::all();
		$data['facultys'] = Faculty::all();

    	$data['year_id'] = StudentYear::orderBy('id','desc')->first()->id;
    	$data['class_id'] = StudentClass::orderBy('id','desc')->first()->id;
		$data['dept_id'] = Department::orderBy('id','desc')->first()->id;
    	//dd($data['year_id']);
    	$data['allData'] = AssignStudent::get();
		$data['search'] ='';
    	return view('backend.student.attendance.create',$data);

    }


    public function createattendance(Request $request){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
		$data['departments'] = Department::all();
		$data['shifts'] = StudentShift::all();

    	$data['year_id'] = $request->year_id;
    	$data['batch_id'] = $request->batch_id;
		$data['shift_id'] = $request->shift_id;
		$data['dept_id'] =  $request->dept_id;
		$data['attend_track'] = 'ATN'.date('dym') . StudentAttendance::get()->max('id');
		$data['search'] =1;
    	 
    	$data['allData'] = AssignStudent::where('year_id',$request->year_id)->where('dept_id',$request->dept_id)->get();
    	return view('backend.student.attendance.create',$data);

    } 

	public function store(Request $request){

		//dd( $request->all());
        $request->validate([
            'year_id'=> 'required',
            'batch_id' => 'required',
			'shift_id'=> 'required',
            'dept_id' => 'required',
			'attend_id' => 'required',
			'date' => 'required',
        ]);
        $user_id=Auth::User()->id;
       
        $insert=DB::table('studentattendances')->insert([
            'attend_id' =>  $request->attend_id,
			'dept_id' =>  $request->dept_id,
            'batch_id' =>  $request->batch_id,
            'date' =>  $request->date,
            'shift_id' =>  $request->note,
            'year_id' => $user_id,
        ]);
    
    
        $rules = array(
        'roll.*'  => 'required',
        'sid.*'  => 'required',
        'name.*'  => 'required',
		'status.*'  => 'required',
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            $notification = array(
                'message' => $error->errors()->all(),
                'alert-type' => 'error'
            );
            return redirect()->route('student.attendance.create')->with($notification);
        }
        $attend_id = $request->attend_id;
        $sid = $request->sid;
        $name = $request->name;
        $roll = $request->roll;
        $status = $request->status;


        for($count = 0; $count<count($status); $count++)
        {
			$data = array(
				'sid' => $sid[$count],
				'name'  => $name[$count],
				'attend_id' =>$attend_id,
				'roll' => $roll[$count],
				'status'  => $status[$count],
				
			
			);
	
            $insert_data[] = $data; 
	    }
       

        StudentAttendanceDetail::insert($insert_data);

        $notification = array(
            'message' => 'Attendance Added Successfully',
            'alert-type' => 'success'
        );

      return redirect()->route('student.attendance.index')->with($notification);

    }
}
