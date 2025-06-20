<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Reportproblem;
use App\Repository\BranchRepository;
use App\Repository\EquipmentRepository;
use App\Repository\NotirepairRepository;
use Exception;
use Illuminate\Http\Request;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;
use SplStack;

class NotirepairController extends Controller
{
    public static function shownotirepair(){
        return view('notirepair');
    }
// public static function addEquipment(Request $request)
// {
//     $equipmentId = $request->eqipmentId;
//     $date = $request->date;
//     $user = $request->user;
//     NotirepairRepository::saveNotiRepair($equipmentId, $date, $user);
//     return redirect()->back()->with('success', 'Notirepair added successfully');
// }
public static function getequipmentByIdWithNotirepair(){
    $NotirpairList = NotirepairRepository::getAllNotirepaird();
    $equipment = EquipmentRepository::getAllEquipments();
    return redirect()->back()->with('NotirpairList', $NotirpairList)->with('equipment', $equipment); 
}
// public static function getequipmentById($equipmentId){
//     $eqp = EquipmentRepository::getEquipmentById($equipmentId);
//     $notirepair = NotirepairRepository::getequipmentById($equipmentId);
//     return view('showrepair', ['eqp' => $eqp, 'notirepair' => $notirepair]);

// }
public function addEquipment(Request $request)
{
    $equipmentId  = $request->equipmentId ;
    //SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect date value: '17/06/2025'
    //laravel confuse the culum datesave which one is DATE or DATETIME imnMYSQL cause the format in MYSQL is YYYY_MM_DD
    $datesave = $request->datesave;
    try{
        $formattedDate = Carbon::createFromFormat('d/m/Y',$datesave)->format('Y-m-d');
    }
    catch(\Exception $e){
        return redirect()->back()->with('error','not correct date format')  ;
    }
    // $date = $request->date ? $request->date : now()->format('d-m-Y H:i:s'); // Use current date if not provided
    $user = $request->user;
    NotirepairRepository::saveNotiRepair($equipmentId , $formattedDate,$user);
    // NotirepairRepository::saveNotiRepair($equipmentId , $date, $user);

    return redirect()->back()->with('success', 'แจ้งซ่อมสำเร็จแล้ว');
}
public static function geteqipmentInNoti($equipmentId){
    $eqp = EquipmentRepository::getAllEquipments();
    $notirepairList = NotirepairRepository::getNotirepairWithEqiupmentId($equipmentId);
    // return view ('showrepair', ['eqp' => $eqp, 'notirepairList' => $notirepairList]);
    return view('notirepair',compact('eqp', 'notirepairList'));

}
public static function addProblemReport(Request $request){
    
}
public static function getbyIdReportProblem(){

}
public static function getNotirepairWithbranchId($branchId){
    $branch = BranchRepository::getBranchId($branchId);
    $notirepair = NotirepairRepository::getNotirepairWithBrachId($branchId);
    return view('notirepair', compact('branch', 'notirepair'));
}
public static function addNotirepair(Request $request){
    $messageId = $request->messageId;
    $branchId = $request->branchId;
    $equipmentId  = $request->equipmentId ;
    $datesave = $request->datesave;
    try{
        $formatteDate = Carbon::createFromFormat('d/m/Y', $datesave)->format('Y/m/d');

    }
    catch(\Exception $e){
        return redirect()->back()->with('error', 'not correct date format');
    }
    $datesave = Carbon::now()->format('Y-m-d H:i:s');
    $user = $request->user;
    NotirepairRepository::saveNotiRepairWithmessage($messageId,$branchId,$equipmentId,$formatteDate,$user);

}

}

