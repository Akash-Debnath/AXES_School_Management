<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueReturn extends Model
{
    use HasFactory;
    protected $table = 'issue_returns';

    public function addstudent(){
    	return $this->belongsTo(AddStudent::class,'sid','id');
    }
}
