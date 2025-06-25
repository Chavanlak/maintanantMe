<?php

namespace App\Http\Controllers;

use App\Repository\MessageRepository;
use App\Repository\ReportproblemRepository;
use Illuminate\Http\Request;

class ReportproblemController extends Controller
{
    public static function ShowallReportProblem()
    {
        $reportProblemList  = ReportproblemRepository::getAllReportProblems();
        return view('testproblem',['reportProblemList'=>$reportProblemList]);
    }
    public static function getAllRProblem(){
        $problemList = ReportproblemRepository::getAllReportProblems();
        return view ('showtest',compact('problemList'));
    }
}
  

