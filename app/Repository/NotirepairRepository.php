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
    public static function saveNotiRepair($equipmentId,$date,$user){
        // $date = Carbon::parse($date)->format('d-m-Y H:i:s');
        // $formattedDate  = Carbon::parse($date)->format('d/m/Y');
        $formattedDate = Carbon::parse($date)->format('d-m-Y ');
        $notirepair = new Notirepair();
        $notirepair->equipmentId  = $equipmentId ;
        $notirepair->date = $formattedDate ;
        $notirepair->user = $user;
        $notirepair->save();

    }
    // public static function getequipmentById($equipmentId){
    //     return Notirepair::where('notirepairs.equipmentId', '=', $equipmentId)->first();
    // }
    public static function getNotirepairWithEqiupmentId($equipmentId){
        $notirepair = Notirepair::where('notirepair.equipmentId', '=', $equipmentId)
        ->orderBy('notirepair.date', 'desc')
        ->get();
        return $notirepair;
    }
    

}
?>