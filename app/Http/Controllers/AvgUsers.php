<?php

namespace App\Http\Controllers;

use App\Models\UserCity;
use Illuminate\Http\Request;

class AvgUsers extends Controller
{
    function AvgName(){
        $result = UserCity::avg("age");
        return view("avg_users",compact("result"));

    }
}
