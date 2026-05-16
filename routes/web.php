<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/charge', 'charge.mockup')->name('charge');
Route::view('/plenum', 'charge.mockup')->name('plenum');

Route::redirect('/pcp-series-mockup', '/charge', 301);
