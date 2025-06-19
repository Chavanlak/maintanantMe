<?php
namespace App\Repository;
use App\Models\Notirepair;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class NotirepairRepository{
    public static function getAllNotirepaird(){
        return Notirepair::all();
    }
    public static function saveNotiRepair($equipmentId,$datesave,$user){
        // $date = Carbon::parse($date)->format('d-m-Y H:i:s');
        // $formattedDate  = Carbon::parse($date)->format('d/m/Y');
        // $formattedDate = Carbon::parse($datesave)->format('d-m-Y ');
        $notirepair = new Notirepair();
        $notirepair->equipmentId  = $equipmentId ;
        $notirepair->datesave = $datesave;
        $notirepair->user = $user;
        $notirepair->save();

    }
    // public static function saveNotiRepair($equipmentId,$user){
    //     // $date = Carbon::parse($date)->format('d-m-Y H:i:s');
    //     // $formattedDate  = Carbon::parse($date)->format('d/m/Y');
      
    //     $notirepair = new Notirepair();
    //     $notirepair->equipmentId  = $equipmentId ;
     
    //     $notirepair->user = $user;
    //     $notirepair->save();

    // }
    // public static function getequipmentById($equipmentId){
    //     return Notirepair::where('notirepairs.equipmentId', '=', $equipmentId)->first();
    // }
    public static function getNotirepairWithEqiupmentId($equipmentId){
        $notirepair = Notirepair::where('notirepair.equipmentId', '=', $equipmentId)
        ->orderBy('notirepair.date', 'desc')
        ->get();
        return $notirepair;
    }
    public static function getNotirepairWithMessageId($messageId ){
        $notirepair = Notirepair::where('notirepair.messageId','=',$messageId)
        ->orderBy('notirepair.date', 'desc')
        ->get();
        return $notirepair;

    }
    public static function getNotirepairWithBrachId($branchId){
        // $notirepair = Notirepair::join('branch', 'notirepair.branchId', '=', 'branch.branchId')
        // ->select('notirepair.*', 'branch.branchName')
        // ->orderBy('notirepair.date', 'desc')
        // ->get();
        // return $notirepair;

        // $notirepair = Notirepair::where('notirepair.branchId', '=', 'branch.branchId')
        $notirepair = Notirepair::where('notirepair.branchId', '=', $branchId)
        ->orderBy('notirepair.date', 'desc')
        ->get();
        return $notirepair;
    }

}
?>