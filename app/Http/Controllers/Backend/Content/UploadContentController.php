<?php

namespace App\Http\Controllers\Backend\Content;

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
use App\Models\Program;
use App\Models\UploadContent;
use DB;
use PDF;

class UploadContentController extends Controller
{
    public function index(){
        $data['allData'] = UploadContent::all();
        

      return view('backend.uploadcontent.index',$data);
    }

    public function syllabus(){
      $data['allData'] = UploadContent::where('type','Syllabus')->get();
    return view('backend.uploadcontent.syllabus',$data);
  }

  public function assignment(){
    $data['allData'] = UploadContent::where('type','Assignment')->get();
    return view('backend.uploadcontent.assignment',$data);
  }

 public function others(){
  $data['allData'] = UploadContent::where('type','Others')->get();
  return view('backend.uploadcontent.others',$data);
  }

    public function create(){
    	$data['classes'] = StudentClass::all();
		$data['departments'] = Department::all();
		$data['programs'] = Program::all();

      return view('backend.uploadcontent.create',$data);
    }

    public function store(Request $request){
        //dd( $request->all());

        $request->validate([
            'title'=> 'required',
            'type' => 'required',
			'date'=> 'required',
			'content' => 'required',
        ]);


        $data = new UploadContent();
        $data->title = $request->title;
        $data->type = $request->type;
        $data->available_for = $request->available_for;
        $data->date = $request->date;
        $data->class_id = $request->class_id;
        $data->dept_id = $request->dept_id;
        $data->program_id = $request->program_id;
        $data->description = $request->description;
      if ($request->file('content')) {
        $file = $request->file('content');
        @unlink(public_path('upload/uploadcontent/'.$data->content));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/uploadcontent'),$filename1);
        $data['content'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'Upload Content Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('uploadcontent.index')->with($notification);

    }

    public function delete($id){
        $data = UploadContent::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Upload Content Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('uploadcontent.index')->with($notification);

}
    
}
