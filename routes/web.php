<?php

use App\Http\Controllers\AvgUsers;
use App\Http\Controllers\EmailUsers;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NameUsers;
use App\Http\Controllers\OldUsers;
use App\Http\Controllers\YoungUsers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\GetAllUser;
use App\Http\Controllers\AgeController;

Route::get('/mypage', function () {
    return "MyPage";
});

Route::get('/about', function () {
    return 'about';
});

Route::get('/contact', function () {
    return 'contact';
});

Route::get('/login', function () {
    return 'login';
});

Route::get('/calc', function () {
    $a = 5;
    $b = 10;
    $result = $a * $b;
    return response()->json([
            'a' => $a,
            'b' => $b,
            'result' => $result]
    );
});


Route::get("/contest",[MyController::class,'index']);
Route::get("all_users",[GetAllUser::class,'GetAllUsers']);
Route::get("show_age",[AgeController::class,'AgeController']);
Route::get("name_users",[NameUsers::class,'UserName']);
Route::get("user_email",[EmailUsers::class,'EmailUsers']);
Route::get("old_users",[OldUsers::class,'OldUsers']);
Route::get("avg_users",[AvgUsers::class,'AvgName']);
Route::get("young_users",[YoungUsers::class,'YoungUserse']);
Route::get("users_a",[YoungUsers::class,'UserNameA']);
Route::get("suma_user",[YoungUsers::class,'sumAges']);
Route::get("all_user_in_db",[MainController::class,'GetAllUserInDb']);
Route::get("likes",[MainController::class,'Likes']);

Route::get('/', [GetAllUser::class, 'GetAllUsers'])->name('all_users');
Route::get('name_user', [NameUsers::class, 'UserName'])->name('name_user');
Route::get('old_user', [OldUsers::class, 'OldUsers'])->name('old_user');
