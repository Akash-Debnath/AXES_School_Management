<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accountclass;

class AccountclassController extends Controller
{
    public function create(){
        return view('backend.account.class.create');
    }
    public function index(){
            $data['allData'] = Accountclass::all();
        return view('backend.account.class.index',$data);

    }
    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:accountclasses,name',
            
        ]);

        $data = new Accountclass();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'Class Added Successfully',
            'alert-type' => 'success'
        );

    return redirect()->route('account.class.index')->with($notification);

    }

    public function edit($id){     
        $editData = Accountclass::find($id);
        return view('backend.account.class.edit',compact('editData'));
    }


    public function update(Request $request,$id){

        $data = Accountclass::find($id);
        
        $validatedData = $request->validate([
                'name' => 'required|unique:accountclasses,name,'.$data->id
                
            ]);

            
            $data->name = $request->name;
            $data->description = $request->description;
            $data->save();

            $notification = array(
                'message' => 'Class Updated Successfully',
                'alert-type' => 'success'
            );

        return redirect()->route('account.class.index')->with($notification);
    }


    public function delete($id){
            $user = Accountclass::find($id);
            $user->delete();

            $notification = array(
                'message' => 'Class Deleted Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('account.class.index')->with($notification);

    }
}
