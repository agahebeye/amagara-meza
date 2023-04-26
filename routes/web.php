<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('pages.index'));



Route::prefix('hospital')->group(function () {
    Route::get('/', fn () => view('pages.dashboard'))->name('hospitals.index');
    Route::get('/drug-store', fn () => view('pages.drug-store'))->name('drug_store');
});
