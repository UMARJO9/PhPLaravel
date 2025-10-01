<?php

namespace App\Http\Controllers;

use App\Models\UserCity;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function GetAllUserInDb()
    {
        $result = UserCity::all();
        return view("AllUsersInDb",compact("result"));
    }
    function Likes()
    {
        $result = UserCity::where("age",">",10)->get();
        return view("Likes",compact("result"));

    }
}
