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
    public function showAddUserForm()
    {
        return view('add_users');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:user_cities,email',
            'age'        => 'required|integer|min:1',
        ]);

        UserCity::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'age'        => $request->age,
            'is_active'  => false,
        ]);

        return redirect()->route('show_all_users_in_db')->with('success', 'User added successfully!');
    }
}
