<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\BIBoardClass;
use App\Models\Subject;
use App\Models\Classes;
class Board extends Model
{
    use HasFactory;
    protected $table = 'BI_BOARDS';
    
}
