<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employeeleavetype;

class EmployeeleaveTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function ViewEmployeeleavetype(){
    	$data['allData'] = Employeeleavetype::all();
    	return view('backend.employee.leavetype.index',$data);
 
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
    public function EmployeeleavetypeAdd(){

		$data['allData'] = Employeeleavetype::all();
    	return view('backend.employee.leavetype.create',$data);
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
    public function EmployeeleavetypeStore(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:leavetypes,name',
            
        ]);

        $data = new Employeeleavetype();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Employeeleavetype Inserted Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('employee.leavetype.view')->with($notification);

    }



    public function EmployeeleavetypeEdit($id){     
        $editData = Employeeleavetype::find($id);
        return view('backend.employee.leavetype.edit',compact('editData'));
    }


public function EmployeeleavetypeUpdate(Request $request,$id){

    $data = Employeeleavetype::find($id);
    
    $validatedData = $request->validate([
            'name' => 'required|unique:leavetypes,name,'.$data->id
            
        ]);

        
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Employeeleavetype Updated Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('employee.leavetype.view')->with($notification);
}


public function  EmployeeleavetypeDelete($id){
        $user = Employeeleavetype::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Employeeleavetype Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('employee.leavetype.view')->with($notification);

}
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
