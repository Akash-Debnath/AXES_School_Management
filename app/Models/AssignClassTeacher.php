<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignClassTeacher extends Model
{
    use HasFactory;

    public function department(){
    	return $this->belongsTo(Department::class,'department_id','id');
    }
    public function teacher(){
    	return $this->belongsTo(Teacher::class,'teacher_id','id');
    }
    public function program(){
    	return $this->belongsTo(Program::class,'program_id','id');
    }
    public function class(){
    	return $this->belongsTo(StudentClass::class,'class_id','id');
    }
    public function subject(){
        return $this->belongsTo(SchoolSubject::class,'subject_id','id');
    }

}
