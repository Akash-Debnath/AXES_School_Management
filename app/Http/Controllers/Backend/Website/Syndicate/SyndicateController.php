<?php

namespace App\Http\Controllers\Backend\Website\Syndicate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Syndicate;

class SyndicateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Syndicate::all();

        return view('backend.webinfo.syndicate.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.webinfo.syndicate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Syndicate();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/syndicate/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/syndicate'),$filename1);
        $data['image'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'Syndicate  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('syndicate.index')->with($notification);

    }


    public function delete($id){
        $data =Syndicate::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Syndicate Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('syndicate.index')->with($notification);
    
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
      $syndicate=Syndicate::findOrFail($id);
      return view('backend.webinfo.syndicate.edit',compact('syndicate'));
    }

    


    public function update(Request $request,$id)
    {
        $data = new Syndicate();
        $data= Syndicate::find($id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/syndicate/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/syndicate'),$filename1);
        $data['image'] = $filename1;
      }

       $data->update();



      $notification = array(
        'message' => 'Syndicate  Updated  Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('syndicate.index')->with($notification);

    }
   
}

