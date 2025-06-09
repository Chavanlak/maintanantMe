<?php
namespace App\Repository;
use App\Models\WorkDetail;

class WorkDetailRepository{
    public static function showallWorkDetail(){
        return WorkDetail::all();
    }
    public static function getWorkDetailById($workDetailId){
        return WorkDetail::where('workDetailId', $workDetailId)->first();
    }
}

?>