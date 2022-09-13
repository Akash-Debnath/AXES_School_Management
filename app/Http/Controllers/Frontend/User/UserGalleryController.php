<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class UserGalleryController extends Controller
{
    public function Gallery(){

        $data['allData'] = Gallery::where('type','All')->get();
        $data['classes'] = Gallery::where('type','Classes')->get();
        $data['partys'] = Gallery::where('type','Party')->get();
        $data['events'] = Gallery::where('type','Event')->get();
        $data['sports'] = Gallery::where('type','Sports')->get();
        $data['contests'] = Gallery::where('type','Contest')->get();
        
    	return view('user.gallery',$data);


    }
}
