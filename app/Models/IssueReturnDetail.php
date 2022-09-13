<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueReturnDetail extends Model
{
    use HasFactory;
    protected $table = 'issue_return_details';
    public function book(){
    	return $this->belongsTo(Book::class,'book_id','id');
    }
}
