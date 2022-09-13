<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentbasicinfo extends Model
{
    use HasFactory;
    protected $table = 'studentbasicinfos';

    public function program(){
    	return $this->belongsTo(Program::class,'program','id');
    }
}
