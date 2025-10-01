<?php

namespace App\Http\Controllers;

use App\Models\UserCity;
use Illuminate\Http\Request;

class EmailUsers extends Controller
{
    function EmailUsers()
    {
        $result = UserCity::select("first_name","email")->where("email","like","%@gmail.com")->get();
        return view("user_email",compact("result"));
    }
}
