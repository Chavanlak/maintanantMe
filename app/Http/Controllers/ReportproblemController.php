<?php

namespace App\Http\Controllers;

use App\Repository\ReportproblemRepository;
use Illuminate\Http\Request;

class ReportproblemController extends Controller
{
    public static function ShowallReportProblem()
    {
        $reportProblemList  = ReportproblemRepository::getAllReportProblems();
        return view('testproblem',['reportProblemList'=>$reportProblemList]);
    }
}

