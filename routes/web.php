<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return 'welcome';
});

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
