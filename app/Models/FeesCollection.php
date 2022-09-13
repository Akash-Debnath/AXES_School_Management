<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class FeesCollection extends Model
{
    use HasFactory;
    protected $table = 'fees_collections';
    
    public function student(){
    	return $this->belongsTo(Student::class,'sid','id');
    }
}
