<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AssignStudent;
use App\Models\Department;
use App\Models\Events;
use App\Models\Faculty;
use App\Models\StudentClass;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function manageAlumni(){
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();

        $data['departments'] = Department::all();
        $data['facultys'] = Faculty::all();

        $data['year_id'] = StudentYear::orderBy('id','desc')->first()->id;
//        $data['class_id'] = StudentClass::orderBy('id','desc')->first()->id;
        $data['dept_id'] = Department::orderBy('id','desc')->first()->id;
        //dd($data['year_id']);
        $data['allData'] = AssignStudent::get();
        $data['search'] ='';
        return view('backend.alumni.alumni.create-alumni',$data);
    }

    public function alumniView(Request $request){
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['departments'] = Department::all();

//        $data['year_id'] = $request->year_id;
        //$data['class_id'] = $request->class_id;
//        $data['dept_id'] =  $request->dept_id;
        $data['search'] ='1';
        $data['allData'] = AssignStudent::where('year_id',$request->year_id)->where('dept_id',$request->dept_id)->get();
        return view('backend.alumni.alumni.create-alumni',$data);
    }


    public function manageEvents(){
        return view('backend.alumni.event.create-event',[
            'departments'=>Department::all(),
            'events'=>Events::all(),
        ]);
    }
    public function newEvent(Request $request){
        $data=new Events();
        $data->title=$request->title;
        $data->dept_name=$request->dept_name;
        $data->date=$request->date;
        $data->start_time=$request->start_time;
        $data->end_time=$request->end_time;
        $data->save();
        return view('backend.alumni.event.create-event',[
            'departments'=>Department::all(),
            'events'=>Events::all(),
        ]);
    }

    public function deleteEvent($id){
        $event = Events::find($id);
        $event->delete();

        $notification = array(
            'message' => 'Event Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage_events')->with($notification);

    }

}
