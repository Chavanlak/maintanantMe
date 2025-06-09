<?php

namespace App\Http\Controllers;
use App\Repository\WorkDetailRepository;
use Illuminate\Http\Request;

class WorkdetailController extends Controller
{
    public static function getallWorkdetail(){
        $work = WorkDetailRepository::showallWorkDetail();
        dd($work);
        return view('layout.workdetail', ['work' => $work]);
    }
    public static function getWorkDetailById($workDetailId){
        $workDetail = WorkDetailRepository::getWorkDetailById($workDetailId);
       return view('workdeialId',compact('workDetail'));
    }
}
