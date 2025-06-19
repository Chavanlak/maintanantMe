<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportproblem extends Model
{
    protected $table ='reportproblem';
    protected $primaryKey = 'reportProblemId';
    public $timestamps = false;
    use HasFactory;
}
