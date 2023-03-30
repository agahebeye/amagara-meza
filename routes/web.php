<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('index'));



Route::prefix('hospital')->group(function () {
    Route::get('/', fn () => view('hospitals.index'));
});
