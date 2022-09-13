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
use DB;
use PDF;



class StudentRegController extends Controller
{
    public function StudentRegView(){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();

		$data['departments'] = Department::all();
		$data['facultys'] = Faculty::all();

    	$data['year_id'] = StudentYear::orderBy('id','desc')->first()->id;
    	$data['class_id'] = StudentClass::orderBy('id','desc')->first()->id;
		$data['dept_id'] = Department::orderBy('id','desc')->first()->id;
    	//dd($data['year_id']);
    	$data['allData'] = AssignStudent::get();
		$data['search'] ='';
    	return view('backend.student.student_reg.student_view',$data);

    }


    public function StudentClassYearWise(Request $request){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
		$data['departments'] = Department::all();

    	$data['year_id'] = $request->year_id;
    	//$data['class_id'] = $request->class_id;
		$data['dept_id'] =  $request->dept_id;
		$data['search'] =1;
    	 
    	$data['allData'] = AssignStudent::where('year_id',$request->year_id)->where('dept_id',$request->dept_id)->get();
    	return view('backend.student.student_reg.student_view',$data);

    } 


    public function StudentRegAdd(){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
    	$data['groups'] = StudentGroup::all();
    	$data['shifts'] = StudentShift::all();
		$data['departments'] = Department::all();
		$data['facultys'] = Faculty::all();
		$data['student'] = '';
		$data['studentinfo'] = '';
    	return view('backend.student.student_reg.student_add',$data);
    }


    public function StudentRegStore(Request $request){
    	DB::transaction(function() use($request){
    	$checkYear = StudentYear::find($request->year_id)->name;
    	$student = Student::where('usertype','Student')->orderBy('id','DESC')->first();
		$roll= $request->batch_id.'-'.$request->dept_id.'-'. Student::get()->max('id');
		//dd($roll);
    	if ($student == null) {
    		$firstReg = 0;
    		$studentId = $firstReg+1;
    		if ($studentId < 10) {
    			$id_no = '000'.$studentId;
    		}elseif ($studentId < 100) {
    			$id_no = '00'.$studentId;
    		}elseif ($studentId < 1000) {
    			$id_no = '0'.$studentId;
    		}
    	}else{
     $student = Student::where('usertype','Student')->orderBy('id','DESC')->first()->id;
     	$studentId = $student+1;
     	if ($studentId < 10) {
    			$id_no = '000'.$studentId;
    		}elseif ($studentId < 100) {
    			$id_no = '00'.$studentId;
    		}elseif ($studentId < 1000) {
    			$id_no = '0'.$studentId;
    		}

    	} // end else 

    	$final_id_no = $checkYear.$id_no;
    	$student = new Student();
    	$code = rand(0000,9999);
    	$student->id_no = $final_id_no;
    	$student->password = bcrypt($code);
    	$student->usertype = 'Student';
    	$student->code = $code;
    	$student->name = $request->name;
    	$student->fname = $request->fname;
    	$student->mname = $request->mname;
    	$student->mobile = $request->mobile;
		$student->address = $request->address;
    	$student->gender = $request->gender;
    	$student->email = $request->email;
    	$student->caste = $request->caste;
    	$student->discount = $request->discount;
    	$student->blgroup = $request->blgroup;
    	$student->height = $request->height;
    	$student->weight = $request->weight;
    	$student->fphone = $request->fphone;
    	$student->foccupation = $request->foccupation;
    	$student->mphone = $request->mphone;
    	$student->moccupation = $request->moccupation;
    	$student->gname = $request->gname;
    	$student->grelation = $request->grelation;
    	$student->gemail = $request->gemail;
    	$student->gphone = $request->gphone;
    	$student->goccupation = $request->goccupation;
    	$student->gaddress = $request->gaddress;
    	$student->religion = $request->religion;
    	$student->dob = date('Y-m-d',strtotime($request->dob));
        //ssc
		$student->sscexamtitle = $request->sscexamtitle;
    	$student->sscgroup = $request->sscgroup;
    	$student->sscinstitutename = $request->sscinstitutename;
    	$student->sscroll = $request->sscroll;
    	$student->sscregistration = $request->sscregistration;
    	$student->sscboard = $request->sscboard;
		$student->ssclettergrade = $request->ssclettergrade;
		$student->sscgpa = $request->sscgpa;
		$student->sscscale = $request->sscscale;
		$student->sscduration = $request->sscduration;
		$student->sscpassingyear = $request->sscpassingyear;


		//hsc
		$student->hscexamtitle = $request->hscexamtitle;
    	$student->hscgroup = $request->hscgroup;
    	$student->hscinstitutename = $request->hscinstitutename;
    	$student->hscroll = $request->hscroll;
    	$student->hscregistration = $request->hscregistration;
    	$student->hscboard = $request->hscboard;
		$student->hsclettergrade = $request->hsclettergrade;
		$student->hscgpa = $request->hscgpa;
		$student->hscscale = $request->hscscale;
		$student->hscduration = $request->hscduration;
		$student->hscpassingyear = $request->hscpassingyear;

		//bsc
		$student->bscexamtitle = $request->bscexamtitle;
    	$student->bscsubject = $request->bscsubject;
    	$student->bscinstitutename = $request->bscinstitutename;
    	$student->bscroll = $request->bscroll;
		$student->bscgpa = $request->bscgpa;
		$student->bscscale = $request->bscscale;
		$student->bscduration = $request->bscduration;
		$student->bscpassingyear = $request->bscpassingyear;

		

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/student_images'),$filename);
    		$student['image'] = $filename;
    	}
		$student->save();

          $assign_student = new AssignStudent();
          $assign_student->student_id = $student->id;
		  $assign_student->roll = $roll;
          $assign_student->year_id = $request->year_id;
          $assign_student->class_id = $request->class_id;
          $assign_student->group_id = $request->group_id;
          $assign_student->shift_id = $request->shift_id;
		  $assign_student->faculty_id = $request->faculty_id;
          $assign_student->dept_id = $request->dept_id;
          $assign_student->semester = $request->semester;
          $assign_student->batch_id = $request->batch_id;
          $assign_student->save();

          $discount_student = new DiscountStudent();
          $discount_student->assign_student_id = $assign_student->id;
          $discount_student->fee_category_id = '1';
          $discount_student->discount = '1';
          $discount_student->save();

    	});


    	$notification = array(
    		'message' => 'Student Registration Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('student.registration.view')->with($notification);

    } // End Method 


 
    public function StudentRegEdit($student_id){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
    	$data['groups'] = StudentGroup::all();
    	$data['shifts'] = StudentShift::all();

    	$data['editData'] = AssignStudent::with(['student','discount'])->where('student_id',$student_id)->first();
    	// dd($data['editData']->toArray());
    	return view('backend.student.student_reg.student_edit',$data);

    }




 public function StudentRegUpdate(Request $request,$student_id){
    	DB::transaction(function() use($request,$student_id){
    	
		
		
		$student = Student::where('id',$student_id)->first();    	 
    	$student->name = $request->name;
    	$student->fname = $request->fname;
    	$student->mname = $request->mname;
    	$student->mobile = $request->mobile;
    	$student->address = $request->address;
    	$student->gender = $request->gender;
    	$student->email = $request->email;
    	$student->caste = $request->caste;
    	$student->discount = $request->discount;
    	$student->blgroup = $request->blgroup;
    	$student->height = $request->height;
    	$student->weight = $request->weight;
    	$student->fphone = $request->fphone;
    	$student->foccupation = $request->foccupation;
    	$student->mphone = $request->mphone;
    	$student->moccupation = $request->moccupation;
    	$student->gname = $request->gname;
    	$student->grelation = $request->grelation;
    	$student->gemail = $request->gemail;
    	$student->gphone = $request->gphone;
    	$student->goccupation = $request->goccupation;
    	$student->gaddress = $request->gaddress;
    	$student->religion = $request->religion;
    	$student->dob = date('Y-m-d',strtotime($request->dob));

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/student_images/'.$student->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/student_images'),$filename);
    		$student['image'] = $filename;
    	}
 	    $student->save();

          $assign_student = AssignStudent::where('id',$request->id)->where('student_id',$student_id)->first();
           
          $assign_student->year_id = $request->year_id;
          $assign_student->class_id = $request->class_id;
          $assign_student->group_id = $request->group_id;
          $assign_student->shift_id = $request->shift_id;
          $assign_student->save();

          $discount_student = DiscountStudent::where('assign_student_id',$request->id)->first();
         
          $discount_student->discount = $request->discount;
          $discount_student->save();

    	});


    	$notification = array(
    		'message' => 'Student Registration Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('student.registration.view')->with($notification);

    } // End Method 


    public function StudentRegPromotion($student_id){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
    	$data['groups'] = StudentGroup::all();
    	$data['shifts'] = StudentShift::all();

    	$data['editData'] = AssignStudent::with(['student','discount'])->where('student_id',$student_id)->first();
    	 
    	return view('backend.student.student_reg.student_promotion',$data);

    }




 public function StudentUpdatePromotion(Request $request,$student_id){
    	DB::transaction(function() use($request,$student_id){
    	 

    	 
		$student = Student::where('id',$student_id)->first();    	 
    	$student->name = $request->name;
    	$student->fname = $request->fname;
    	$student->mname = $request->mname;
    	$student->mobile = $request->mobile;
    	$student->address = $request->address;
    	$student->gender = $request->gender;
    	$student->religion = $request->religion;
    	$student->dob = date('Y-m-d',strtotime($request->dob));

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/student_images/'.$student->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/student_images'),$filename);
    		$student['image'] = $filename;
    	}
 	    $student->save();

          $assign_student = new AssignStudent();
          
          $assign_student->student_id = $student_id;
          $assign_student->year_id = $request->year_id;
          $assign_student->class_id = $request->class_id;
          $assign_student->group_id = $request->group_id;
          $assign_student->shift_id = $request->shift_id;
          $assign_student->save();

          $discount_student = new DiscountStudent();

          $discount_student->assign_student_id = $assign_student->id;
          $discount_student->fee_category_id = '1';
          $discount_student->discount = $request->discount;
          $discount_student->save();

    	});


    	$notification = array(
    		'message' => 'Student Promotion Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('student.registration.view')->with($notification);

    } // End Method 



    public function StudentRegDetails($student_id){
     $data['details'] = AssignStudent::with(['student','discount'])->where('student_id',$student_id)->first();

    $pdf = PDF::loadView('backend.student.student_reg.student_details_pdf', $data);
	$pdf->SetProtection(['copy', 'print'], '', 'pass');
	return $pdf->stream('document.pdf');

    }
	public function StudentRegProfile($student_id){
		$data['details'] = AssignStudent::with(['student','discount'])->where('student_id',$student_id)->first();
   
		return view('backend.student.student_reg.view_profile',$data);
	   }
	   
	   
	    public function StudentRegDelete($student_id){

		DB::table('assign_students')->where('student_id', $student_id)->delete();
		DB::table('students')->where('id', $student_id)->delete();
		$notification = array(
			'message' => 'Students Deleted Successfully',
			'alert-type' => 'success'
		);
		return redirect()->route('student.registration.view')->with($notification);
	   }
  




} 
