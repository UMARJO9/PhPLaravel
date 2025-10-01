<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCity;

class GetAllUser extends Controller
{
    function GetAllUsers()
    {
        $result = UserCity::select("id", "first_name")->get();
        return view("show_all_users", compact("result"));
    }
}
