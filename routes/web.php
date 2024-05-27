<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $links = config('nav-links');
    $footerLinks = config('footerLogos');
    $footerMidLink = config('footerMidList');
    $footerBot = config('footerBotImg');
    return view('Home', compact('links','footerLinks','footerMidLink','footerBot'));
});
