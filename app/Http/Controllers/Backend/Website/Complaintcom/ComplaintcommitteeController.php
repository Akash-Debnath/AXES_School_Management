<?php

namespace App\Http\Controllers\Backend\Website\Complaintcom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaintcom;

class ComplaintcommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Complaintcom::all();

        return view('backend.webinfo.complaintcom.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.webinfo.complaintcom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Complaintcom();

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/complaintcom/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/complaintcom'),$filename1);
        $data['image'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'Complaintcom  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('complaintcom.index')->with($notification);

    }


    public function delete($id){
        $data =Complaintcom::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Complaintcom Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('complaintcom.index')->with($notification);
    
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
      $complaintcom=Complaintcom::findOrFail($id);
      return view('backend.webinfo.complaintcom.edit',compact('complaintcom'));
    }

    

    public function update(Request $request,$id)
    {
        $data = new Complaintcom();
        $data= Complaintcom::find($id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/complaintcom/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/complaintcom'),$filename1);
        $data['image'] = $filename1;
      }

      $data->update();



      $notification = array(
        'message' => 'Complaintcom  Updated Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('complaintcom.index')->with($notification);

    }

}