<?php

namespace App\Http\Controllers;

use App\Models\UserCity;

class OldUsers extends Controller
{
    function OldUsers()
    {
        $result = UserCity::where("age",">=",30)->count();
        return view("old_users",compact("result"));

    }
}
