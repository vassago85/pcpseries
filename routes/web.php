<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/charge', 'charge.mockup')->name('charge');
Route::view('/plenum', 'charge.mockup')->name('plenum');
Route::view('/charge/shooter', 'charge.shooter-profile')->name('charge.shooter');
Route::view('/plenum/shooter', 'charge.shooter-profile')->name('plenum.shooter');
Route::view('/charge/badges', 'charge.badges')->name('charge.badges');
Route::view('/plenum/badges', 'charge.badges')->name('plenum.badges');
Route::view('/proposal', 'charge.proposal')->name('proposal');

Route::redirect('/pcp-series-mockup', '/charge', 301);
