<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accountledger extends Model
{
    use HasFactory;
    protected $table = 'accountledgers';
    public function group(){
        return $this->belongsTo(AccountGroup::class,'grp_id','id');
    }
    public function subgroup(){
        return $this->belongsTo(Accountsubgroup::class,'sub_grp_id','id');
    }
}
