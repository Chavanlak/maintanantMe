<?php
namespace App\Repository;
use App\Models\Equipment;
use App\Models\Repairrequest;
use App\Models\Approve;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EquipmentRepository
{
    public static function getIdEquipment($equipmentId)
    {
        return Equipment::where('equipmentId', $equipmentId)->first();
    }
    public static function getAllEquipment()
    {
        return Equipment::all();
    }
}
?>