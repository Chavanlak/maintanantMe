<?php

namespace App\Http\Controllers;

use App\Repository\EquipmentRepository;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public static function getEquipment()
    {
        $equipment = EquipmentRepository::getAllEquipment();
        return view('layout.request', ['equipment' => $equipment]);
    }
}
