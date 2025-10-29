<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCity;

class GetAllUser extends Controller
{
    
     public function GetAllUsers(Request $request)
    {
        $query = $request->get('q', '');

        $result = UserCity::query()
            ->when($query, function ($qBuilder) use ($query) {
                $qBuilder->where('first_name', 'like', "%{$query}%")
                         ->orWhere('last_name', 'like', "%{$query}%")
                         ->orWhere('email', 'like', "%{$query}%");
            })
            ->paginate(5)
            ->withQueryString();

        return view('show_all_users_in_db', compact('result', 'query'));
    }
}

?>
