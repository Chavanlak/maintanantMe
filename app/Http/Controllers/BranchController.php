<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repository\BranchRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Branch;
class BranchController extends Controller
{
    // public static function getallbranches()
    // {
    //     $branchList = BranchRepository::getAllBranches();
    //     return view ('branch', ['branchList' => $branchList]);
    // }
    public function getallbranches()
    {
        $branchList = BranchRepository::getAllBranches();
        return response()->json($branchList);
    }
    public function store(Request $request)
    {
        $request->validate([
            'branchCode' => 'required|string|max:255',
            'branchName' => 'required|string',
        ]);
    
        $branch = Branch::create([
            'branchCode' => $request->branchCode,
            'branchName' => $request->branchName,
        ]);
    
        return response()->json([
            'message' => 'Branch created successfully',
            'branch' => $branch,
        ], 201);
    }
    public static function getBranchById($branchId)
    {
        $branch = BranchRepository::getBranchById($branchId);
        return response()->json($branch);
    }
    

    
}
