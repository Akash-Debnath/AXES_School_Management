<?php

namespace App\Http\Controllers\Backend\Website\Bot;
// use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bot;

class BotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Bot ::all();

        return view('backend.webinfo.bot.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.webinfo.bot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Bot();
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->email = $request->email;
        $data->detail = $request->detail;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/bot/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/bot'),$filename1);
        $data['image'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'BOT  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('bot.index')->with($notification);

    }


    public function delete($id){
        $data = Bot::find($id);
        $data->delete();

        $notification = array(
            'message' => 'BOT Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('bot.index')->with($notification);
    
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
      $bot=Bot::findOrFail($id);
      return view('backend.webinfo.bot.edit',compact('bot'));
    }

    

public function update(Request $request, $id)
    {
      $data = new Bot();
        $data= Bot::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->detail = $request->detail;
        $data->designation = $request->input('designation');
        $data->image = $request->input('image');
        if ($request->file('image')) {
          $file = $request->file('image');
          @unlink(public_path('upload/bot/'.$data->image));
          $filename1 = date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/bot'),$filename1);
          $data['image'] = $filename1;
        }
        $data->update();
        
        $notification = array(
          'message' => 'BOT  Updated Successfully',
          'alert-type' => 'success'
        );
  
        return redirect()->route('bot.index')->with($notification);
        }
        
    


}
