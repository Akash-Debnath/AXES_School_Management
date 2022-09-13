<?php

namespace App\Http\Controllers\Backend\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

use App\Models\TeacherGroup;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Faculty;

use App\Models\AssignStudent;
use App\Models\Student;
use App\Models\DiscountStudent;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;


use DB;
use PDF;



class TeacherRegController extends Controller
{
    public function TeacherRegView(){
    	
		$data['departments'] = Department::all();
		$data['facultys'] = Faculty::all();

    	$data['allData'] = Teacher::orderBy('id','desc')->get();
    	//dd($data['year_id']);
		$data['search'] ='';
    	return view('backend.teacher.teacher_view',$data);

    }


    public function StudentClassYearWise(Request $request){
    	// $data['years'] = StudentYear::all();
    	// $data['classes'] = StudentClass::all();
		$data['departments'] = Department::all();

    	$data['year_id'] = $request->year_id;
    	//$data['class_id'] = $request->class_id;
		$data['dept_id'] =  $request->dept_id;
		$data['search'] =1;
    	 
    	$data['allData'] = Teacher::where('dept_id',$request->dept_id)->get();
    	return view('backend.teacher.teacher_view',$data);

    } 


    public function TeacherRegAdd(){
    	// $data['years'] = StudentYear::all();
    	// $data['classes'] = StudentClass::all();
    	// $data['groups'] = StudentGroup::all();
		$data['departments'] = Department::all();
		$data['facultys'] = Faculty::all();
    	return view('backend.teacher.teacher_add',$data);
    }


    public function TeacherRegStore(Request $request){
    
    		$firstReg = 0;
    		$teacherId = $firstReg+1;
    		if ($teacherId < 10) {
    			$id_no = '000'.$teacherId;
    		}elseif ($teacherId < 100) {
    			$id_no = '00'.$teacherId;
    		}elseif ($teacherId < 1000) {
    			$id_no = '0'.$teacherId;
    		}
    

    	$final_id_no = date('Y').$id_no;
    	$teacher = new Teacher();
    	$code = rand(0000,9999);
    	$teacher->id_no = $final_id_no;
    	$teacher->password = bcrypt($code);
    	$teacher->code = $code;
    	$teacher->name = $request->name;
    	$teacher->fname = $request->fname;
    	$teacher->mname = $request->mname;
    	$teacher->mobile = $request->mobile;
		$teacher->address = $request->address;
    	$teacher->gender = $request->gender;
    	$teacher->email = $request->email;
    // 	$teacher->caste = $request->caste;
    // 	$teacher->discount = $request->discount;
    	$teacher->blgroup = $request->blgroup;
    	$teacher->height = $request->height;
    	$teacher->weight = $request->weight;
    	$teacher->fphone = $request->fphone;
    	$teacher->foccupation = $request->foccupation;
    	$teacher->mphone = $request->mphone;
    	$teacher->moccupation = $request->moccupation;
    	$teacher->gname = $request->gname;
    	$teacher->grelation = $request->grelation;
    	$teacher->gemail = $request->gemail;
    	$teacher->gphone = $request->gphone;
    	$teacher->goccupation = $request->goccupation;
    	$teacher->gaddress = $request->gaddress;
    	$teacher->religion = $request->religion;
    	$teacher->dob = date('Y-m-d',strtotime($request->dob));

		

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/teacher_images'),$filename);
    		$teacher['image'] = $filename;
    	}
		$teacher->ssc_exam = $request->ssc_exam;
        $teacher->sscsub = $request->sscsub;
        $teacher->sscinstitutename = $request->sscinstitutename;
        $teacher->sscboard = $request->sscboard;
        $teacher->ssclettergrade = $request->ssclettergrade;
        $teacher->sscgpa = $request->sscgpa;
        $teacher->sscscale = $request->sscscale;
        $teacher->sscpassingyear = $request->sscpassingyear;
        $teacher->sscduration = $request->sscduration;

		$teacher->hsc_exam = $request->hsc_exam;
        $teacher->hscsub = $request->hscsub;
        $teacher->hscinstitutename = $request->hscinstitutename;
        $teacher->hscboard = $request->hscboard;
        $teacher->hsclettergrade = $request->hsclettergrade;
        $teacher->hscgpa = $request->hscgpa;
        $teacher->hscscale = $request->hscscale;
        $teacher->hscpassingyear = $request->hscpassingyear;
        $teacher->hscduration = $request->hscduration;

		$teacher->bsc_exam = $request->bsc_exam;
        $teacher->bscsub = $request->bscsub;
        $teacher->bscinstitutename = $request->bscinstitutename;
        $teacher->bscboard = $request->bscboard;
        $teacher->bsclettergrade = $request->bsclettergrade;
        $teacher->bscgpa = $request->bscgpa;
        $teacher->bscscale = $request->bscscale;
        $teacher->bscpassingyear = $request->bscpassingyear;
        $teacher->bscduration = $request->bscduration;

		$teacher->msc_exam = $request->msc_exam;
        $teacher->mscsub = $request->mscsub;
        $teacher->mscinstitutename = $request->mscinstitutename;
        $teacher->mscboard = $request->mscboard;
        $teacher->msclettergrade = $request->msclettergrade;
        $teacher->mscgpa = $request->mscgpa;
        $teacher->mscscale = $request->mscscale;
        $teacher->mscpassingyear = $request->mscpassingyear;
        $teacher->mscduration = $request->mscduration;

		$teacher->save();

         


    	$notification = array(
    		'message' => 'Teacher  Info Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('teacher.registration.view')->with($notification);

    } // End Method 


 
    public function TeacherRegEdit($teacher_id){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
    	$data['groups'] = StudentGroup::all();
    	

    	//$data['editData'] = AssignStudent::with(['student','discount'])->where('student_id',$teacher_id)->first();
    	// dd($data['editData']->toArray());
    	return view('backend.teacher.teacher_edit',$data);

    }




 public function TeacherRegUpdate(Request $request,$teacher_id){
    	DB::transaction(function() use($request,$teacher_id){
    	
		
		
		$teacher = Teacher::where('id',$teacher_id)->first();    	 
    	$teacher->name = $request->name;
    	$teacher->fname = $request->fname;
    	$teacher->mname = $request->mname;
    	$teacher->mobile = $request->mobile;
    	$teacher->address = $request->address;
    	$teacher->gender = $request->gender;
    	$teacher->email = $request->email;  	
    	$teacher->blgroup = $request->blgroup;
    	$teacher->height = $request->height;
    	$teacher->weight = $request->weight;
    	$teacher->fphone = $request->fphone;
    	$teacher->foccupation = $request->foccupation;
    	$teacher->mphone = $request->mphone;
    	$teacher->moccupation = $request->moccupation;
    	$teacher->gname = $request->gname;
    	$teacher->grelation = $request->grelation;
    	$teacher->gemail = $request->gemail;
    	$teacher->gphone = $request->gphone;
    	$teacher->goccupation = $request->goccupation;
    	$teacher->gaddress = $request->gaddress;
    	$teacher->religion = $request->religion;
    	$teacher->dob = date('Y-m-d',strtotime($request->dob));

    	if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/teacher_images/'.$teacher->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/teacher_images'),$filename);
    		$teacher['image'] = $filename;
    	}

		$teacher->ssc_exam = $request->ssc_exam;
        $teacher->sscsub = $request->sscsub;
        $teacher->sscinstitutename = $request->sscinstitutename;
        $teacher->sscboard = $request->sscboard;
        $teacher->ssclettergrade = $request->ssclettergrade;
        $teacher->sscgpa = $request->sscgpa;
        $teacher->sscoptionsubject = $request->sscoptionsubject;
        $teacher->sscscale = $request->sscscale;
        $teacher->sscpassingyear = $request->sscpassingyear;
        $teacher->sscduration = $request->sscduration;

		$teacher->hsc_exam = $request->hsc_exam;
        $teacher->hscsub = $request->hscsub;
        $teacher->hscinstitutename = $request->hscinstitutename;
        $teacher->hscboard = $request->hscboard;
        $teacher->hsclettergrade = $request->hsclettergrade;
        $teacher->hscgpa = $request->hscgpa;
        $teacher->hscoptionsubject = $request->hscoptionsubject;
        $teacher->hscscale = $request->hscscale;
        $teacher->hscpassingyear = $request->hscpassingyear;
        $teacher->hscduration = $request->hscduration;

		$teacher->bsc_exam = $request->bsc_exam;
        $teacher->bscsub = $request->bscsub;
        $teacher->bscinstitutename = $request->bscinstitutename;
        $teacher->bscboard = $request->bscboard;
        $teacher->bsclettergrade = $request->bsclettergrade;
        $teacher->bscgpa = $request->bscgpa;
        $teacher->bscoptionsubject = $request->bscoptionsubject;
        $teacher->bscscale = $request->bscscale;
        $teacher->bscpassingyear = $request->bscpassingyear;
        $teacher->bscduration = $request->bscduration;

		$teacher->msc_exam = $request->msc_exam;
        $teacher->mscsub = $request->mscsub;
        $teacher->mscinstitutename = $request->mscinstitutename;
        $teacher->mscboard = $request->mscboard;
        $teacher->msclettergrade = $request->msclettergrade;
        $teacher->mscgpa = $request->mscgpa;
        $teacher->mscoptionsubject = $request->mscoptionsubject;
        $teacher->mscscale = $request->mscscale;
        $teacher->mscpassingyear = $request->mscpassingyear;
        $teacher->mscduration = $request->mscduration;



 	    $teacher->save();

         

    	});


    	$notification = array(
    		'message' => 'Teacher Registration Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('teacher.registration.view')->with($notification);

    } // End Method 


    // public function StudentRegPromotion($teacher_id){
    // 	$data['years'] = StudentYear::all();
    // 	$data['classes'] = StudentClass::all();
    // 	$data['groups'] = StudentGroup::all();
    // 	$data['shifts'] = StudentShift::all();

    // 	$data['editData'] = AssignStudent::with(['student','discount'])->where('student_id',$teacher_id)->first();
    	 
    // 	return view('backend.student.student_reg.student_promotion',$data);

    // }




 //public function StudentUpdatePromotion(Request $request,$teacher_id){
    //	DB::transaction(function() use($request,$teacher_id){
    	 

    	 
	//	$teacher = Student::where('id',$teacher_id)->first();    	 
    //	$teacher->name = $request->name;
    //	$teacher->fname = $request->fname;
    //	$teacher->mname = $request->mname;
    //	$teacher->mobile = $request->mobile;
    //	$teacher->address = $request->address;
    //	$teacher->gender = $request->gender;
    //	$teacher->religion = $request->religion;
    	//$teacher->dob = date('Y-m-d',strtotime($request->dob));

    	//if ($request->file('image')) {
    	//	$file = $request->file('image');
    	//	@unlink(public_path('upload/student_images/'.$teacher->image));
    	//	$filename = date('YmdHi').$file->getClientOriginalName();
    	//	$file->move(public_path('upload/student_images'),$filename);
    	//	$teacher['image'] = $filename;
    //	}
 	  //  $teacher->save();

        //  $assign_student = new AssignStudent();
          
       //   $assign_student->student_id = $teacher_id;
       //   $assign_student->year_id = $request->year_id;
        //  $assign_student->class_id = $request->class_id;
        //  $assign_student->group_id = $request->group_id;
         // $assign_student->shift_id = $request->shift_id;
        //  $assign_student->save();

       //   $discount_student = new DiscountStudent();

        //  $discount_student->assign_student_id = $assign_student->id;
        //  $discount_student->fee_category_id = '1';
        //  $discount_student->discount = $request->discount;
        //  $discount_student->save();

    	//});//


    	//$notification = array(
    	//	'message' => 'Student Promotion Updated Successfully',
    	//	'alert-type' => 'success'
    	//);

    	//return redirect()->route('student.registration.view')->with($notification);

   // } // End Method 



    public function teacherRegDetails($teacher_id){
     $data['details'] = Teacher::where('id',$teacher_id)->first();

    $pdf = PDF::loadView('backend.teacher.teacher_details_pdf', $data);
	$pdf->SetProtection(['copy', 'print'], '', 'pass');
	return $pdf->stream('document.pdf');

    }
    
      public function TeacherRegDelete($id){
	    	$user = Teacher::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Teacher Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	        return redirect()->route('teacher.registration.view')->with($notification);

	}
  




} 
