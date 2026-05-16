<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/pcp-series-mockup', 'pcp-series.mockup')->name('pcp-series.mockup');
