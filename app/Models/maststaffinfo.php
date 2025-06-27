<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maststaffinfo extends Model
{
    protected $table = 'maststaffinfo';
    
    protected $primaryKey = 'MStaffInfo_Code';
    public $timestamps = false;
    public $connection = 'secondary';

    use HasFactory;
}
