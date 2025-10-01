<?php

namespace App\Http\Controllers;

use App\Models\UserCity;
use Illuminate\Http\Request;

class YoungUsers extends Controller
{
    function YoungUserse()
    {
        $result=UserCity::select("id","first_name","age")->where("age","<=",30)->limit(5)->get();
        return view("young_users",compact("result"));

    }
    function UserNameA()
    {
        $result = UserCity::where('first_name', 'like', 'u%')->get();
        return view('name_usersa', compact('result'));

    }

    public function sumAges()
    {
        $totalAge = UserCity::sum('age');
        return view('sum_ages', compact('totalAge'));
    }

}
