<?php
namespace App\Repository;
use App\Models\Repairrequest;
use App\Models\Approve;
class RepairrequestRepositorty{
    public static function getIdRepairrequest($repairrequestId)
    {
        return Repairrequest::where('repairrequestId', $repairrequestId)->get();
    }
    public static function getAllRepairrequest()
    {
        return Repairrequest::all();
    }
    public static function updateRepairrequest($repairrequestId, $data)
    {
        return Repairrequest::where('repairrequestId', $repairrequestId)->update($data);
    }
    public static function getBranchcode(){
        return Repairrequest::select('branchcode')->leftJoin('branch','branch.branchId','=','repairrequest.branchId')->get();
    }
    public static function findbrandcode($branchId)
    {
       return Repairrequest::where('branch.branchId','=',$branchId);
    }
}

?>