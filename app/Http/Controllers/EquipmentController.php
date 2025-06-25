<?php

namespace App\Http\Controllers;
use App\Repository\EquipmentRepository;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public static function showallEquipment(){
        $eqp = EquipmentRepository::getAllEquipments();

        return view('notirepair',['eqp'=>$eqp]);

    }
}

