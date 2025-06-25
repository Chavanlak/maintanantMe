<?php
namespace App\Repository;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class MessageRepository{
public static function getMessageId($messageId){
    return Message::where('message.messageId', '=', $messageId);
}
public static function getMessageWithReportProblemId($reportProblemId){
    return Message::where('message.reportProblemId','=',$reportProblemId)
    ->orderBy('message.messageId', 'desc')
    ->get();
 
}
public static function getAllMesaage(){
    return Message::all();
}
public static function gettilteWithproblem(){
    $message = Message::first();
    if(!$message){
        return redirect()->back()->with('error','ไม่พบข้อมูล ');
    }
    if($message->reportproblem == 1){
        return redirect()->route('เเจ้งทั่วไป');
    }
    elseif($message->reportproblem == 2){
        return redirect()->route('เเจ้งซ่อมอุปกรณ์ไอที');
    }
    elseif($message->reportproblem == 3){
        return redirect()->route('เเจ้งสั่งซื้ออุปกรณ์');
    }
}

    public static function savemessage($title,$detailcomment){
        $message = new Message();
        // $message->reportProblemId = $reportProblemId;
        $message->title = $title;
        $message->detailcomment = $detailcomment;
        return $message->save();
    }
}



?>