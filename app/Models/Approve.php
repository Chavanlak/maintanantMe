<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
    protected $table = 'approve';

    protected $primaryKey = 'approveId';
 
    public $timestamps = false;
    use HasFactory;
}
