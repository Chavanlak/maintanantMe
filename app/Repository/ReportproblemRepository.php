<?php
namespace App\Repository;
use App\Models\Reportproblem;

class ReportproblemRepository{
    public static function getReportProblemId($reportProblemId){
        return Reportproblem::where('reportproblem.reportProblemId', '=', $reportProblemId)
            ->first();
    }
    public static function getAllReportProblems(){
        return Reportproblem::all();
    }
}
?>