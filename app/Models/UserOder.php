<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOder extends Model
{

    public $timestamps = false;
    use HasFactory;
    protected $table = 'tbl_Publication_PurchaseOrderMaster';

}
