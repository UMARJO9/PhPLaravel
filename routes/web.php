<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});

Route::get('/mypage',function (){
    return "MyPage";
});

Route::get('/about',function (){
    return 'about';
});

Route::get('/contact',function (){
    return 'contact';
});

Route::get('/login',function (){
    return 'login';
});
