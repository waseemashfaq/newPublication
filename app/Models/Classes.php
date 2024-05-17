<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Board;
use App\Models\BIBoardClass;
use App\Models\Subject;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'BI_Classes';
    public function board()
    {
       return $this->$this->belongsToMany(Board::class,'BI_Board_Classes');
    }
    public function subject()
    {
       return $this->hasMany(Subject::class,'BI_Class_id');
    }
}
