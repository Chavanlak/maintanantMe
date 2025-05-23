<?php
namespace App\Repository;
use App\Models\Branch;
class BranchRepository
{
    public static function getAllBranches()
    {
        return Branch::all();
    }
    public static function getBranchById($branchId)
    {
    // return Branch::where('branchId', $branchId)->first();    
    return Branch::where('branch.branchId',$branchId)->first();
    }
    // return Branch::where('branch.branchId', $branchId)
    //     ->leftJoin('repairrequest', 'repairrequest.branchId', '=', 'branch.branchId')
    //     ->leftJoin('approve', 'approve.approveId', '=', 'repairrequest.approveId')
    //     ->leftJoin('equipment', 'equipment.equipmentId', '=', 'repairrequest.equipmentId')
    //     ->select('branch.*', 'repairrequest.*', 'approve.*', 'equipment.*')
    //     ->first();
}
?>