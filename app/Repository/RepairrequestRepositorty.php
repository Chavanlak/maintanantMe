<?php
namespace App\Repository;
use App\Models\Repairrequest;
use App\Models\Approve;
class RepairrequestRepositorty{
    public static function getIdRepairrequest($repairrequestId)
    {
        return Repairrequest::where('repairrequestId', $repairrequestId)->get();
    }
    public static function getAllRepairrequest()
    {
        return Repairrequest::all();
    }
    public static function updateRepairrequest($repairrequestId, $data)
    {
        return Repairrequest::where('repairrequestId', $repairrequestId)->update($data);
    }
    public static function getBranchcode(){
        return Repairrequest::select('branchcode')->leftJoin('branch','branch.branchId','=','repairrequest.branchId')->get();
    }
    public static function findbrandcode($branchId)
    {
       return Repairrequest::where('branch.branchId','=',$branchId);
    }
    public static function getRepairrequestByBranchId($branchId)
    {
        return Repairrequest::where('branchId', $branchId)
            ->leftJoin('approve', 'approve.approveId', '=', 'repairrequest.approveId')
            ->leftJoin('equipment', 'equipment.equipmentId', '=', 'repairrequest.equipmentId')
            ->select('repairrequest.*', 'approve.*', 'equipment.*')
            ->get();
    }
    public static function getStatusRequest($repairrequestId,$status,$branchId,$userId){
        $Repairrequest = new Repairrequest();
        $Repairrequest->repairrequestId = $repairrequestId;
        $Repairrequest->status = $status;
        $Repairrequest->branchId = $branchId;
        $Repairrequest->userId = $userId;
        $Repairrequest->save();
    }
    public static function checkstatus(){
       
    }
    public static function getstatusEnum(){
        $status = new Repairrequest();
        $status->status = Repairrequest::select('status')->distinct()->get();
        $status->status = ['ปิดงานเรียบร้อย','กำลังดำเนินการ','รอการอนุมัติ','รอการตรวจสอบ'];
    
        return $status->status;
}
    public static function getworkdetailId(){
        return Repairrequest::select('workdetail.workdetailId','workdetail.statusName')->leftJoin('workdetail','workdetail.workdetailId','=','repairrequest.workdetailId')
            ->get();
    } 
    //check 
    public static function getworkdetailIdch() {
        return Repairrequest::select('workdetail.workdetailId')->get();
    }
    

}
?>