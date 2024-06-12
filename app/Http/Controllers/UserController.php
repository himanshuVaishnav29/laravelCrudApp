<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function displayUsers(){
        return "<h1>ALL USERS</h1>";
    }
    public function displayValidUsers(){
        return "<h1>VALID USERS</h1>";
    }
    public function searchUser(string $id){
        return "<h1>User ".$id."</h1>";
    }

}
