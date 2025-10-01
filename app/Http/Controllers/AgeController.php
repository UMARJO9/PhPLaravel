<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCity;
class AgeController extends Controller
{
    function AgeController(){
        $result = UserCity::where("age",">",25)->get(["id","first_name","last_name","age"]);
        return view("ageshow", compact("result"));
    }
}
