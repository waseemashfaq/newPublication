<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Board;
use App\Models\BIBoardClass;
use App\Models\Classes;
class Subject extends Model
{
    use HasFactory;
    // protected $table = 'BI_Subjects';
    protected $table = 'BI_Items';
    
    public function classes()
    {
       return $this->belongsTo(Classes::class,'BI_Class_id');
    }
    
}
