<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountGroup extends Model
{
    use HasFactory;
    protected $table = 'accountgroups';
    public function class(){
    	return $this->belongsTo(Accountclass::class,'clid','id');
    }
}
