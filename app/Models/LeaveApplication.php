<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;
    
    protected $fillable = ['emp_id','l_id','apply_date','start_date','end_date','status','reason','note','created_by'];
    public $timestamps = false;
}
