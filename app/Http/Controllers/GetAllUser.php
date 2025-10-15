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

    public function search(Request $request)
    {
        $query = $request->get('q', '');

        $users = UserCity::query()
            ->where('first_name', 'like', "%{$query}%")
            ->orWhere('last_name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->get();

        return view('partials.users_table_body', ['result' => $users]);
    }
}
