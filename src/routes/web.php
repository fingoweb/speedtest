<?php

use Illuminate\Support\Facades\Route;

Route::get('/speedtest', function () {
    return view('speedtest::index');
})->name('speedtest.index');
