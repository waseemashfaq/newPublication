<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Board;
use App\Models\Subject;
use App\Models\Classes;
class BIBoardClass extends Model
{
    use HasFactory;
    protected $table = 'BI_Board_Classes';

    public function borad()
    {
       return $this->belongsTo(Board::class,'BI_Board_id');
    }
}
