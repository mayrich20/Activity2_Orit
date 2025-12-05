<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-dashboard', function () {
    return 'welcome admin!';
})->middleware('checkrole'); // must match Kernel alias exactly