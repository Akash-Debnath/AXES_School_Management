<?php

namespace App\Http\Controllers\Backend\Website\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administration;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Administration::all();

        return view('backend.webinfo.administration.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.webinfo.administration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Administration();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/administration/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/administration'),$filename1);
        $data['image'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'Administration  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('administration.index')->with($notification);

    }


    public function delete($id){
        $data =Administration::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Administration Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('administration.index')->with($notification);
    
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
      $administration= Administration::findOrFail($id);
      return view('backend.webinfo.administration.edit',compact('administration'));
    }

    

    public function update(Request $request,$id)
    {
        $data = new Administration();
        $data=Administration::find($id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/administration/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/administration'),$filename1);
        $data['image'] = $filename1;
      }

      $data->update();



      $notification = array(
        'message' => 'Administration  Updated Successfully',
        'alert-type' => 'success'
      );
      

      return redirect()->route('administration.index')->with($notification);
      // return redirect()->route('administration.index')->with($notification);

    }
  
}