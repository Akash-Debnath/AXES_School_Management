<?php

namespace App\Http\Controllers\Backend\Website\Disciplinarycom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disciplinarycom;

class  DisciplinarycommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Disciplinarycom::all();

        return view('backend.webinfo.disciplinarycommittee.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.webinfo.disciplinarycommittee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Disciplinarycom();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/disciplinarycom/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/disciplinarycom'),$filename1);
        $data['image'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'Disciplinarycom  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('disciplinarycommittee.index')->with($notification);

    }


    public function delete($id){
        $data =Disciplinarycom::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Disciplinarycom Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('disciplinarycommittee.index')->with($notification);
    
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
      $disciplinarycom=Disciplinarycom::findOrFail($id);
      return view('backend.webinfo.disciplinarycommittee.edit',compact('disciplinarycom'));
    }

    

    public function update(Request $request, $id)
    {
        $data = new Disciplinarycom();
        $data= Disciplinarycom::find($id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/disciplinarycom/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/disciplinarycom'),$filename1);
        $data['image'] = $filename1;
      }

      $data->update();



      $notification = array(
        'message' => 'Disciplinarycom  Updated Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('disciplinarycommittee.index')->with($notification);

    }

}


