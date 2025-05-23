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
        
    }
    public static function getBarnch()
    {
        $branchList = RepairrequestRepositorty::getBranchcode();
        return view('layout.request', ['branchList' => $branchList]);
    }
    
}
