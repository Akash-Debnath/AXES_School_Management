<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feesmaster extends Model
{
    use HasFactory;
    protected $table = 'feesmasters';

    public function feetype(){
        return $this->belongsTo(FeesType::class,'feetype_id','id');
    }
    public function feegroup(){
        return $this->belongsTo(FeesGroup::class,'feegroup_id','id');
    }
}
