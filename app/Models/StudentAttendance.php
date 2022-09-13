<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    use HasFactory;

    protected $table='studentattendances';

    public function student_class(){
    	return $this->belongsTo(StudentClass::class,'class_id','id');
    }


    public function student_year(){
    	return $this->belongsTo(StudentYear::class,'year_id','id');
    }

    public function department(){
    	return $this->belongsTo(Department::class,'dept_id','id');
    }



     public function shift(){
    	return $this->belongsTo(StudentShift::class,'shift_id','id');
    }
}
