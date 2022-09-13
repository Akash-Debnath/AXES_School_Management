<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employeedepartment;

class EmployeeDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function ViewEmployeeDepartment(){
    	$data['allData'] = Employeedepartment::all();
    	return view('backend.employee.department.index',$data);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function EmployeeDepartmentAdd(){

		$data['allData'] = Employeedepartment::all();
    	return view('backend.employee.department.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function EmployeeDepartmentStore(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:departments,name',
            
        ]);

        $data = new Employeedepartment();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Employeedepartment Inserted Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('employee.department.view')->with($notification);

    }



    public function EmployeeDepartmentEdit($id){     
        $editData = Employeedepartment::find($id);
        return view('backend.setup.department.edit',compact('editData'));
    }


public function EmployeeDepartmentUpdate(Request $request,$id){

    $data = Employeedepartment::find($id);
    
    $validatedData = $request->validate([
            'name' => 'required|unique:departments,name,'.$data->id
            
        ]);

        
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Employeedepartment Updated Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('employee.department.view')->with($notification);
}


public function  EmployeeDepartmentDelete($id){
        $user = Employeedepartment::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Employeedepartment Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('employee.department.view')->with($notification);

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
