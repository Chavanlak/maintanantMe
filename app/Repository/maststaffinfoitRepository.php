<?php
namespace App\Repository;

use App\Models\maststaffinfo;
use App\Models\maststaffinfoit;
class MaststaffinfoitRepository{
    public static function getalluser(){
        return maststaffinfoit::all();
    }
    public static function getItUserLogin(){
        return maststaffinfo::all();
    }
}
?>