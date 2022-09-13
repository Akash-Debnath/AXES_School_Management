<?php

namespace App\Http\Controllers\Backend\Website\Fincom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fincom;

class FincomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Fincom ::all();

        return view('backend.webinfo.fincom.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    // { $data['allData'] = Fincom ::all();
        return view('backend.webinfo.fincom.create');
   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Fincom();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/fincom/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/fincom'),$filename1);
        $data['image'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'Fin_Member  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('fincom.index')->with($notification);

    }


    public function delete($id){
        $data = Fincom::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Fin_Member  Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('fincom.index')->with($notification);
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
        $fincom=Fincom::findOrFail($id);
        return view('backend.webinfo.fincom.edit',compact('fincom'));
    }
    public function update(Request $request, $id)
    {
      $data = new Fincom();
        $data= Fincom::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->detail = $request->input('detail');
        $data->designation = $request->input('designation');
        $data->image = $request->input('image');
        if ($request->file('image')) {
          $file = $request->file('image');
          @unlink(public_path('upload/fincom/'. $data->image));
          $filename1 = date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/fincom'),$filename1);
          $data['image'] = $filename1;
        }
        $data->update();
        $notification = array(
          'message' => 'Fincom  Updated  Successfully',
          'alert-type' => 'success'
        );
        // return redirect()->back()->with('status','FINCOM Updated Successfully');
        return redirect()->route('fincom.index')->with($notification);
        }
        
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
