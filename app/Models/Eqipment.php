<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eqipment extends Model

{
    protected $table = 'eqipment';
    protected $primaryKey = 'equipmentId';
    public $timestamps = false;
    use HasFactory;
}
