<?php
namespace App\Repository;
use App\Models\Approve;
class ApproveRepository
{
    public static function getIdApprove($approveId)
    {
        return Approve::where('approveId', $approveId)->first();
    }
    
}
?>