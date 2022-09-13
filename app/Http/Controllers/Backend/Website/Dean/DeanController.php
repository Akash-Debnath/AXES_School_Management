<?php

namespace App\Http\Controllers\Backend\Website\Dean;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dean;

class DeanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Dean ::all();

        return view('backend.webinfo.dean.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.webinfo.dean.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Dean();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
        if ($request->file('image')) {
          $file = $request->file('image');
          @unlink(public_path('upload/dean/'.$data->image));
          $filename1 = date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/dean'),$filename1);
          $data['image'] = $filename1;
        }
       

      $data->save();



      $notification = array(
        'message' => 'Dean  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('dean.index')->with($notification);

    }


    public function delete($id){
        $data =Dean::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Dean Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('dean.index')->with($notification);
    
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
    public function edit($id)
    {
      $dean=Dean::findOrFail($id);
      return view('backend.webinfo.dean.edit',compact('dean'));
    }

  
    
    public function update(Request $request, $id)
    {
      $data = new Dean();
        $data= Dean::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->detail = $request->detail;
        $data->designation = $request->input('designation');
        $data->image = $request->input('image');
        if ($request->file('image')) {
          $file = $request->file('image');
          @unlink(public_path('upload/dean/'.$data->image));
          $filename1 = date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/dean'),$filename1);
          $data['image'] = $filename1;
        }
        $data->update();
        
        $notification = array(
          'message' => 'Dean Updated  Successfully',
          'alert-type' => 'danger'
      );
        return redirect()->route('dean.index')->with($notification);
        }
        
}