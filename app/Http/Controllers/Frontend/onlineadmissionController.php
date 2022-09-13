<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Mail\OnlineapplyMail;
use App\Models\studentbasicinfo;
use App\Models\studentbscinfo;
use App\Models\studentdiplomainfo;
use App\Models\studenthscinfo;
use App\Models\studentmscinfo;
use App\Models\studentsinfo;
use App\Models\studentsscinfo;
use App\Models\FeeCategoryAmount;
use App\Models\Program;
use App\Models\Department;
use Illuminate\Http\Request;

use Mail;

class onlineadmissionController extends Controller
{

    public function onlineadd(){

        $data['programs'] = Program::all();
		$data['departments'] = Department::all();
    	return view('frontend/onlineadmission',$data);
    }
    

    public function confirmmess(){
       
        
    	return view('user/confirmapplication');
    }

     public function applyaddmission(){
        $data['programs'] = Program::all();
		$data['departments'] = Department::all();
       return view('user.applyaddmission',$data);
    }

    public function infostore(Request $request){
      

		$addfee = FeeCategoryAmount::where('fee_category_id','=','1')
        ->where('class_id','=',$request->program)->first();

        $lbfee = FeeCategoryAmount::where('fee_category_id','=','2')
        ->where('class_id','=',$request->program)->first();
        $addffee = FeeCategoryAmount::where('fee_category_id','=','3')
        ->where('class_id','=',$request->program)->first();
        $ipfee = FeeCategoryAmount::where('fee_category_id','=','4')
        ->where('class_id','=',$request->program)->first();

        
       if($addfee){
			$total=$addfee->amount;

			if($total < 0){
				$notification = array(
					'message' => 'Applicantion Fee not Define',
					'alert-type' => 'warning'
				);
				return redirect()->back()->with($notification);
			}
		

	   }else{
			$notification = array(
				'message' => 'Something is Wrong. Please contact office.',
				'alert-type' => 'warning'
			);
			return redirect()->back()->with($notification);


	   }
	   
       $student_id = date('ymd').'00' . studentbasicinfo::get()->max('id');
       //dd($request->all());
    	$student = new studentbasicinfo();
        $student->sid = $student_id;
    	$student->program = $request->program;
        $student->password = bcrypt($request->password);
    	$student->usertype = 'Student';
    	$student->applicantion_for = $request->applicantion_for;
    	$student->degree = $request->degree;
    	$student->campus = $request->campus;
        $student->firstname = $request->name;
		$student->fname = $request->fname;
    	$student->fmobile = $request->fmobile;
    	$student->mname = $request->mname;
    	$student->mmobile = $request->mmobile;
    	$student->dob = date('Y-m-d',strtotime($request->dob));;
    	$student->gender = $request->gender;
    	$student->phone = $request->mobile;
    	$student->email = $request->email;
    	$student->bloodgroup = $request->bloodgroup;
    	$student->lgurdian = $request->lgurdian;
    	$student->lgurdian_mobile = $request->lgurdian_mobile;
    	$student->reference = $request->reference;
    	$student->pre_house = $request->pre_house;
    	$student->pre_road = $request->pre_road;
    	$student->pre_post_office = $request->pre_post_office;
    	$student->pre_police_station = $request->pre_police_station;
    	$student->pre_district = $request->pre_district;
        //ssc
		$student->per_house = $request->per_house;
    	$student->per_road = $request->per_road;
    	$student->per_post_office = $request->per_post_office;
    	$student->per_police_station = $request->per_police_station;
    	$student->per_district = $request->per_district;
    	$student->sscpassyear = $request->sscpassyear;
		$student->sscroll = $request->sscroll;
		$student->sscregno = $request->sscregno;
		$student->sscgrade = $request->sscgrade;
		$student->sscboard = $request->sscboard;


		//hsc
		$student->hscpassyear = $request->hscpassyear;
    	$student->hscroll = $request->hscroll;
    	$student->hscregno = $request->hscregno;
    	$student->hscgrade = $request->hscgrade;
    	$student->hscboard = $request->hscboard;
    	

		//bsc
		$student->bachelor_degree_name = $request->bachelor_degree_name;
    	$student->bachelor_degree_institute = $request->bachelor_degree_institute;
    	$student->bachelor_degree_result = $request->bachelor_degree_result;
    	$student->bachelor_degree_roll = $request->bachelor_degree_roll;
		$student->bachelor_degree_passyear = $request->bachelor_degree_passyear;
		//msc
		$student->masters_degree_name = $request->masters_degree_name;
    	$student->masters_degree_institute = $request->masters_degree_institute;
    	$student->masters_degree_result = $request->masters_degree_result;
    	$student->masters_degree_roll = $request->masters_degree_roll;
		$student->masters_degree_passyear = $request->masters_degree_passyear;
		
		

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/student_images'),$filename);
    		$student['image'] = $filename;
    	}
		$student->save();
      

        //Email
         $email=$request->email;
        $data = array('name'=>$request->email,
                        'student_id'=>$student_id);
        Mail::send(['text'=>'mails.onlineapply-mail'], $data, function($message) use($email) {
            $message->to($email, 'Axesgl University')->subject
              ('Application Confirmation');
            $message->from('addmission@rajtrims.com','Axesgl University');
        });

        //end email

        //sms
       
        // $phone=$request->phone;
        // $msg = 'Your Application ID:'.$student_id .'Thanks For Your Application';
        // $url = 'https://msg.elitbuzz-bd.com/smsapi?api_key=C2008126619dd558b893c8.&type=text&contacts='.$phone.'&senderid=8809612436613&msg='.$msg;
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => $url,
        //     CURLOPT_RETURNTRANSFER =>true,
        //     CURLOPT_POST => true,
        //     CURLOPT_POSTFIELDS => $phone,
        // ));

        // curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
        // curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);

        // $output = curl_exec($curl);

        // if(curl_errno($curl)){

        //     echo 'error :'. curl_error($curl);

        // }
        // curl_close($curl);
        

      //end sms

       

        $students = studentbasicinfo::where('sid','=',$student_id)->first();
    	return view('user/confirmapplication', compact('students','addfee','lbfee','addffee','ipfee','total'));


    } // end Method

    public function studentbasicinfodetails(){
        // $data['allData'] = EmployeeAttendance::select('date')->groupBy('date')->orderBy('id','DESC')->get();
    	// $studen = studentbscinfo::orderBy('id','DESC')->get();
        $students = studentbscinfo::all();
        return view('Frontend.student_basic_info_details', compact('students') );
    	// return view('Frontend.student_basic_info_details',$studen);

    	// $data = studentbscinfo::where('date',$date)->get();
    	// return view('backend.employee.employee_attendance.employee_attendance_details',$data);

    }

    
}
