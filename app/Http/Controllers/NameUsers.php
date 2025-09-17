<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCity;

class NameUsers extends Controller
{
    function UserName()
    {
        $result = UserCity::select("first_name")->get();
        return view("name_users",compact("result"));
    }
}
