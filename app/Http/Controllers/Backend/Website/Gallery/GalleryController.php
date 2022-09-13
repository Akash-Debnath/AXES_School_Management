<?php

namespace App\Http\Controllers\Backend\Website\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

use Image;


class GalleryController extends Controller
{
    public function index(){
        $data['allData'] = Gallery ::all();

      return view('backend.webinfo.gallery.index',$data);
    }

    public function create(){

      return view('backend.webinfo.gallery.create');
    }

    public function store(Request $request){


        $data = new Gallery();
        $data->title = $request->title;
        $data->type = $request->type;
        $data->description = $request->description;
        
        $data->link = $request->link;
      if ($request->file('image')) {
        $file1 = $request->file('image');
                $filename1 = date('YmdHi').$file1->getClientOriginalName();
                $data['image'] = $filename1;

				$destinationPath = public_path('upload/gallery');
				$img = Image::make($file1->getRealPath());
				$img->fit(400, 400, function ($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath.'/'.$filename1);
      }

      $data->save();



      $notification = array(
        'message' => 'Gallery  Added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('gallery.index')->with($notification);

    }

    public function delete($id){
        $data = Gallery::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Gallery  Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('gallery.index')->with($notification);
    
}
}


