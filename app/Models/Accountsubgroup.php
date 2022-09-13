<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accountsubgroup extends Model
{
    use HasFactory;
    protected $table = 'accountsubgroups';
    public function group(){
        return $this->belongsTo(AccountGroup::class,'grp_id','id');
    }
}
