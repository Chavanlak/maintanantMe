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
}
