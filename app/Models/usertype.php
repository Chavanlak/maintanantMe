<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usertype extends Model
{
    protected $table ='usertype';
    protected $primaryKey = 'usertypeId';
    public $timestamps = false;
    use HasFactory;
}
