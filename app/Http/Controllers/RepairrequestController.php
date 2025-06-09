<?php

namespace App\Http\Controllers;
use App\Repository\RepairrequestRepositorty;
use App\Repository\ApproveRepository;
use App\Repository\EquipmentRepository;

use Illuminate\Http\Request;

class RepairrequestController extends Controller
{
    public static function getAllequipment()
    {
        $equipment = EquipmentRepository::getAllEquipment();
        return view('layout.request', ['equipment' => $equipment]);
    }

    public static function getAllRepairRequests()
    {
        $status = RepairrequestRepositorty::getAllRepairrequest();
        return view('layout.request',['status'=>$status]);
    }
    public static function getBarnch()
    {
        $branchList = RepairrequestRepositorty::getBranchcode();
        return view('layout.request', ['branchList' => $branchList]);
    }
    public static function showallstatus(){
        return view('layout.status');
    }
    public static function saveStatus(Request $request)
    {
    //   $requestId = $request->input('requestId');
    $requestId = $request->requestId;
    $status = $request->status;
        // $approve = ApproveRepository::getApproveByRequestId($requestId);
        
        // if ($approve) {
        //     $approve->status = $status;
        //     $approve->save();
        //     return response()->json(['message' => 'Status updated successfully']);
        // } else {
        //     return response()->json(['message' => 'Request not found'], 404);
        // }
    $branchId = $request->branchId;
    
    $userId = $request->userId;

    }
    public static function getstatus(){
        
    }
    // public static function getworkdetail(){
    //     $workdetail = RepairrequestRepositorty::getworkdetailId();
    //     return view('workdeialId',['workdetail'=>$workdetail]);
    // }
    //check
    public static function getworkdetailch(){
        $workdetail = RepairrequestRepositorty::getworkdetailIdch();
        dd($workdetail);
        return view('workdeialId',['workdetail'=>$workdetail]);
    }
      public static function ch(){
        $wk = RepairrequestRepositorty::getworkdetailId();
        dd($wk);
        return view('workdeialId',['workdetail'=>$wk]);

      }
    
}
