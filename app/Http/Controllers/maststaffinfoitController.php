<?php

namespace App\Http\Controllers;
use App\Repository\maststaffinfoitRepository;
use Illuminate\Http\Request;

class maststaffinfoitController extends Controller
{
    public static function showallUser(){
        $userList = maststaffinfoitRepository::getalluser();
        return view('showallstaffinfo',compact('userList'));
    }
}
