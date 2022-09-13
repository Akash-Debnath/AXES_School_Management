<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    
    public function department(){
    	return $this->belongsTo(Department::class,'dept_id','id');
    }
    public function faculty(){
    	return $this->belongsTo(Department::class,'faculty_id','id');
    }

}
