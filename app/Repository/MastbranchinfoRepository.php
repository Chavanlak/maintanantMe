<?php
namespace App\Repository;
use App\Models\Mastbranchinfo;
class MastbranchinfoRepository{
    public static function selectbranch(){
        $branch = Mastbranchinfo::select(['fujipos.mastbranchinfo'])
        ->select('MBranchInfo_Code','Location')
        ->select('Location')
        ->where('dbtype','fuji')
        ->whereNotIn('mbranchinfo_code',['HO'])
        ->where('branch_active',1)
        ->where(function($query){
            $query->whereNull('closed')
            ->orWhere('closed',0);
        })->get();
        return view('',compact('branch'));
       
    }
}
?>