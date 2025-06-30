<?php
namespace App\Repository;
use App\Models\maststaffinfo;
use Illuminate\Support\Facades\DB;
class maststaffinfoRepository{
    public static function getAllStaffinfo(){
        return maststaffinfo::all();
    }
}
?> 