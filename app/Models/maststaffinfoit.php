<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maststaffinfoit extends Model
{
    protected $table = 'maststaffinfoit';
    
    protected $primaryKey = 'MaststaffinfoITID';
    public $timestamps = false;
    public $connection = 'secondary';
    use HasFactory;
}
