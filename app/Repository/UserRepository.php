<?php
namespace App\Repository;
use App\Models\User;
class UserRepository{
    public static function getalluser(){
        return User::all();
    }
}
?>