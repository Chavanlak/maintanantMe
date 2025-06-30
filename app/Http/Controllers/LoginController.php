<?php

namespace App\Http\Controllers;

use App\Repository\MaststaffinfoitRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public static function login(){
        return view('showlogin');
    }
    public static function loginPost(Request $req){
        // $userList = MaststaffinfoitRepository::getItUserLogin();
        // return view('',compact('$userList'));
        // $credetials = [];
            $req->validate([
            'Username' => $req->Username,
            'Password' => $req->Password
            ]);
            if(Auth::attempt(['Username'=>$req->Username,'Password'=>$req->Password]))
            {
                $req->session()->regenerate();
                return redirect()->intended('/');
            }
            return back()->withErrors([
                'password' => 'Wrong username or password',
            ]);
        // return redirect('/login');
    }
    public static function logintoMessage(){
        return redirect();
    }
    public static function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerate();
        return redirect('/');
    }
    
}
