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
}
?>