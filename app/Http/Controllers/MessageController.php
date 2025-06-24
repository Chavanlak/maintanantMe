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
       return view('showallproblem',['message' => $message]);
    }
 
}
