<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repairrequest extends Model
{
    protected $table = 'repairrequest';

    protected $primaryKey = 'requestId ';
 
    public $timestamps = false;
    use HasFactory;
}
