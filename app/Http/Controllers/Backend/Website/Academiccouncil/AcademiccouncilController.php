<?php

namespace App\Http\Controllers\Backend\Website\Academiccouncil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Academiccouncil;

class AcademiccouncilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['allData'] = Academiccouncil::all();

      return view('backend.webinfo.academiccouncil.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.webinfo.academiccouncil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Academiccouncil();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/academiccouncil/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/academiccouncil'),$filename1);
        $data['image'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'Academiccouncil  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('academiccouncil.index')->with($notification);

    }


    public function delete($id){
        $data = Academiccouncil::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Academiccouncil Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('academiccouncil.index')->with($notification);
    
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
      $academiccouncil=Academiccouncil::findOrFail($id);
      return view('backend.webinfo.academiccouncil.edit',compact('academiccouncil'));
    }


    public function update(Request $request,$id)
    {
        $data = new Academiccouncil();
        $data =  Academiccouncil::find($id);

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/academiccouncil/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/academiccouncil'),$filename1);
        $data['image'] = $filename1;
      }

      $data->update();



      $notification = array(
        'message' => 'Academiccouncil  Updated Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('academiccouncil.index')->with($notification);

    }
 
} 
    
