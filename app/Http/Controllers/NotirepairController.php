<?php

namespace App\Http\Controllers;
use App\Repository\EquipmentRepository;
use App\Repository\NotirepairRepository;
use Illuminate\Http\Request;
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
    $date = $request->date;
    // $date = $request->date ? $request->date : now()->format('d-m-Y H:i:s'); // Use current date if not provided
    $user = $request->user;

    NotirepairRepository::saveNotiRepair($equipmentId , $date, $user);

    return redirect()->back()->with('success', 'แจ้งซ่อมสำเร็จแล้ว');
}
public static function geteqipmentInNoti($equipmentId){
    $eqp = EquipmentRepository::getAllEquipments();
    $notirepairList = NotirepairRepository::getNotirepairWithEqiupmentId($equipmentId);
    // return view ('showrepair', ['eqp' => $eqp, 'notirepairList' => $notirepairList]);
    return view('notirepair',compact('eqp', 'notirepairList'));

}

}

