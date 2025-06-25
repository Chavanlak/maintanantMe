<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Reportproblem;
use App\Repository\BranchRepository;
use App\Repository\EquipmentRepository;
use App\Repository\MessageRepository;
use App\Repository\NotirepairRepository;
use App\Repository\ReportproblemRepository;
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
// public static function addNotirepair(Request $request){
//     $messageId = $request->messageId;
//     $branchId = $request->branchId;
//     $equipmentId  = $request->equipmentId ;
//     $datesave = $request->datesave;
//     try{
//         $formatteDate = Carbon::createFromFormat('d/m/Y', $datesave)->format('Y/m/d');

//     }
//     catch(\Exception $e){
//         return redirect()->back()->with('error', 'not correct date format');
//     }
//     $datesave = Carbon::now()->format('Y-m-d ');
//     $user = $request->user;
//     $title = $request->title;
//     $detailcomment = $request->detailcomment;
//     NotirepairRepository::saveNotiRepairWithmessage($messageId,$branchId,$equipmentId,$formatteDate,$user,$title,$detailcomment);
//     return redirect()->back()->with('success', 'บันทึกสำเร็จ');

// }
public static function addNotirepair(Request $request)
{
    $messageId = $request->messageId;          
    $branchId = $request->branchId;
    $equipmentId = $request->equipmentId;
    // $datesave = $request->datesave;
    $user = $request->user;
    $notirepair= NotirepairRepository::saveNotiRepairWithmessage(
        $messageId,
        $branchId,
        $equipmentId,
        
        $user
    );

    // try {
    //     $formatteDate = Carbon::createFromFormat('d/m/Y', $datesave)->format('Y-m-d');
    // } catch (\Exception $e) {
    //     return redirect()->back()->with('error', 'รูปแบบวันที่ไม่ถูกต้อง');
    // }

 

    // if(NotirepairRepository::getNotirepairWithMessageId($messageId)->isEmpty()){
    //     return redirect()->back()->with('error','ไม่พบข้อมูลเเจ้งซ่อม');
    // }
    if($notirepair == Null){
        return redirect()->back()->with('error','not see');
    }
    else{
        return redirect()->back()->with('success', 'บันทึกสำเร็จ');
    }
    // NotirepairRepository::saveNotiRepairWithmessage(
    //     $messageId,
    //     $branchId,
    //     $equipmentId,
    //     $formatteDate,
    //     $user
    // );

   
}
public static function addNotirepairtestNull(Request $request)
{
    $messageId = $request->messageId;
    $user = $request->user;

    $notirepair = NotirepairRepository::saveNotiRepairWithmessage($messageId, $user);

    if ($notirepair == null) {
        return redirect()->back()->with('error', 'ไม่สามารถบันทึกข้อมูล');
    } else {
        return redirect()->back()->with('success', 'บันทึกสำเร็จ');
    }
}

    public static function getNotirepairWithMessageId($messageId,$reportProblemId){
        $message = MessageRepository::getMessageId($messageId);
        // $problemList = ReportproblemRepository::getReportProblemId($reportProblemId);
        $messageList = MessageRepository::getMessageWithReportProblemId($reportProblemId);
        return view('testproblem', compact('message', 'messageList'));

    }
    public static function checkreportId($reportProblemId){
        $messageList = MessageRepository::getMessageWithReportProblemId($reportProblemId);
        return view('testsave', compact('messageList'));
    }
    
}


