<?php

namespace App\Http\Controllers;

use App\Repository\BranchRepository;
use Illuminate\Http\Request;

class BranchController extends Controller
{
  public static function ShowallBranch(){
    $branchList = BranchRepository::getAllBranch();
    return view('showallbranch',['branchList' => $branchList]);
  }
  public static function getBranchbyId($branchId){
    $branchId = BranchRepository::getBranchId($branchId);
    if($branchId == null){
      return redirect()->back()->with('error','ไม่พบสาขา');
    }
    else
    {
      return view('testproblem',compact('branchId'));
    }
  }
}
