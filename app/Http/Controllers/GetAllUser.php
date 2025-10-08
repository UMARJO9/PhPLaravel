<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCity;

class GetAllUser extends Controller
{
    function GetAllUsers()
    {
        $result = UserCity::all();
        return view("show_all_users_in_db", compact("result"));
    }
}
