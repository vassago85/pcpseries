<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/charge', 'charge.mockup')->name('charge');
Route::view('/plenum', 'charge.mockup')->name('plenum');
Route::view('/charge/shooter', 'charge.shooter-profile')->name('charge.shooter');
Route::view('/plenum/shooter', 'charge.shooter-profile')->name('plenum.shooter');

Route::redirect('/pcp-series-mockup', '/charge', 301);
