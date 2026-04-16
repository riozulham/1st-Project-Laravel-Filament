<?php

use Illuminate\Support\Facades\Route;
use App\Models\LandingPage;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = LandingPage::first();
    return view('landing', compact('data'));
});
