<?php

namespace App\Http\Controllers;

use App\Repository\MessageRepository;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // public static function ShowallMessage()
    // {
    //    $message = MessageRepository::getAllMesaage();
    //    return view('showallproblem',['message' => $message]);
    // }
    public static function ShowallMessage()
    {
       $message = MessageRepository::getAllMesaage();
       return view('showtest',['message' => $message]);
    }
    public static function getAllmessage(){
        $messageList = MessageRepository::getAllMesaage();
        return view('showtest', compact('messageList'));
    }
    public static function gettitleFromReport(){

    }

    public static function addmessage(Request $request){
        // dd($request->reportProblemId);
        $reportProblemId = $request->reportProblemId;
        // dd($reportProblemId);
        $title = $request->title;
        $detailcomment = $request->detailcomment;
        $result = MessageRepository::savemessage($reportProblemId, $title, $detailcomment);
        // // $result = MessageRepository::savemessage( $title, $detailcomment);
        $reportProblemId = MessageRepository::getMessageId($reportProblemId)->first()->reportProblemId;
        if($result){
            return redirect()->back()->with('success', 'บันทึกข้อมูลสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'ไม่สามารถบันทึกข้อมูลได้');
        }
    }

    public static function show(){
        return view('showtest');
    }

}


