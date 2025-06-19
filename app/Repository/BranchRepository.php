<?php
namespace App\Repository;
use App\Models\Branch;
class BranchRepository{
    public static function getBranchId($branchId){
        return Branch::where('branch.branchId','=',$branchId)
        ->first();
    }
    public static function getAllBranch(){
        return Branch::all();
    }
}
?>