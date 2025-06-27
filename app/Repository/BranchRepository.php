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
    // public static function selectbranch(){
    //     //    $branches = DB::table('fujipos.mastbranchinfo')
    //     $branches = Mastbranchinfo::select(['fujipos.mastbranchinfo'])
    //     //    ->select('mbranchinfo_code','location')
    //        ->select('location')
    //        ->where('dbtype', 'fuji')
    //        ->whereNotIn('mbranchinfo_code',['HO'])
    //        ->where('branch_active',1)
    //        ->where(function ($query) {
    //         $query->whereNull('closed')
    //               ->orWhere('closed', 0);
    //     })
    //     ->get();
    //     return view('surveyform',compact('branches'));
    //     }
}
?>