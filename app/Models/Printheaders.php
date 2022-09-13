<?php

namespace App\Models;

use App\helper\HelperClass;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printheaders extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static $data;

    public static function saveData($request,$id=null){
        if($id==null){

            self::$data=new Printheaders();
        }
        else{
            self::$data=Printheaders::find($id);
        }
        self::$data->header_image          =HelperClass::fileupload($request->file('header_image'),'public/admin/systemHeader-images/',isset($id)?Printheaders::find($id)->header_image:null);
        self::$data->message1          =$request->message1;
        self::$data->save();
    }
}
