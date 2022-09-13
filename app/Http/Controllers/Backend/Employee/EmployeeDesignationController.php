<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employeedesignation; 

class EmployeeDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }
    public function EmployeeViewDesignation(){
    	$data['allData'] = Employeedesignation::all();
    	return view('backend.employee.designation.view_designation',$data);
 
    }
    public function EmployeeDesignationAdd(){
    	return view('backend.employee.designation.add_designation');
    }


public function EmployeeDesignationStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:designations,name',
	    		
	    	]);

	    	$data = new Employeedesignation();
	    	$data->name = $request->name;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Employee Designation Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    return redirect()->route('employee.designation.view')->with($notification);

	    }



public function EmployeeDesignationEdit($id){
	    	$editData = Employeedesignation::find($id);
	    	return view('backend.employee.designation.edit_designation',compact('editData'));
	    }


 public function EmployeeDesignationUpdate(Request $request,$id){

	 $data = Employeedesignation::find($id);
     
     $validatedData = $request->validate([
    		'name' => 'required|unique:designations,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Employee Designation Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('designation.view')->with($notification);
    }


public function EmployeeDesignationDelete($id){
	    	$user = Employeedesignation::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Employee Designation Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	   return redirect()->route('designation.view')->with($notification);

	    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
