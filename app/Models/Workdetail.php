<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workdetail extends Model
{
    protected $table = 'workdetail';
    public $timestamps = false;
    protected $primaryKey = 'workdetailId';
    
    use HasFactory;
}
