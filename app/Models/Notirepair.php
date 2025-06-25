<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notirepair extends Model
{
    protected $table = 'notirepair';
    
    protected $primaryKey = 'NotirepairId';
    public $timestamps = false;
    // protected $fillable = ['messageId', 'branchId', 'equipmentId', 'user', 'datesave'];

    // public $timestamps = true;
    use HasFactory;
}
