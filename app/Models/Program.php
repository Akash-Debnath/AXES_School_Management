<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public function faculty(){
        return $this->belongsTo(Faculty::class,'fid','id');
    }
    public function department(){
        return $this->belongsTo(Department::class,'did','id');
    }
}
