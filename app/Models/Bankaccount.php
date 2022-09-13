<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankaccount extends Model
{
    use HasFactory;
    public function bank(){
        return $this->belongsTo(Bank::class,'bid','id');
    }
    protected $table = 'bankaccounts';
}
