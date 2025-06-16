<?php

namespace App\Repository;
use App\Models\Eqipment;
use Illuminate\Support\Facades\DB;

class EquipmentRepository{
    public static function getAllEquipments(){
        return Eqipment::all();
    }
  public static function getEquipmentById($equipmentId){
        Eqipment::where('eqipment.equipmentId','=',$equipmentId)->first();
  }
}
?>