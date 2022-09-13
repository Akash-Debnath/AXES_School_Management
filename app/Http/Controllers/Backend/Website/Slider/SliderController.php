<?php

namespace App\Http\Controllers\Backend\Website\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index(){
        $data['allData'] = Slider::all();

      return view('backend.webinfo.slider.index',$data);
    }

    public function create(){

      return view('backend.webinfo.slider.create');
    }

    public function store (Request $request){


        $data = new Slider();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->link = $request->link;
      if ($request->file('image')) {
        $file = $request->file('image');
        @unlink(public_path('upload/slider/'.$data->image));
        $filename1 = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/slider'),$filename1);
        $data['image'] = $filename1;
      }

      $data->save();



      $notification = array(
        'message' => 'Slider Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('slider.index')->with($notification);

    }

    public function delete($id){
        $data = Slider::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('slider.index')->with($notification);

}

public function Edit($id){

  $sliders=Slider::findOrFail($id);
  $sliders = Slider::find($id);
  
 

  return view('backend.webinfo.slider.edit', compact('sliders'));

  // $notification = array(
  //     'message' => 'Slider Edited Successfully',
  //     'alert-type' => 'info'
  // );

  // return redirect()->route('slider.edit')->with($notification);

}
 
public function update (Request $request, $id){


  $data = new Slider();
  $data=Slider::find($id);
  $data->title = $request->title;
  $data->description = $request->description;
  $data->link = $request->link;
if ($request->file('image')) {
  $file = $request->file('image');
  @unlink(public_path('upload/slider/'.$data->image));
  $filename1 = date('YmdHi').$file->getClientOriginalName();
  $file->move(public_path('upload/slider'),$filename1);
  $data['image'] = $filename1;
}

 $data->update();



 $notification = array(
  'message' => 'Slider Updated Successfully',
  'alert-type' => 'danger'
);

return redirect()->route('slider.index')->with($notification);



}


}
