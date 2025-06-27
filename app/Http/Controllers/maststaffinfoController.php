<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use App\Repository\maststaffinfoRepository;
class maststaffinfoController extends Controller
{
    public static function Showallstaffinfo()
    {
       $staffinfo = maststaffinfoRepository::getAllStaffinfo();
       return view('showallstaffinfo', ['staffinfo' => $staffinfo]);
    }
}
