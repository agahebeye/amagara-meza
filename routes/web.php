<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('pages.index'));



Route::prefix('hospital')->group(function () {
    Route::get('/', fn () => view('pages.dashboard'))->name('hospitals.index');

    Route::get('/patients', fn () => view('pages.patients'))->name('patients');
    Route::get('/orientations', fn () => view('pages.consultations'))->name('orientations');
    Route::get('/consultations', fn () => view('pages.consultations'))->name('consultations');
    Route::get('/cashbox', fn () => view('pages.cashbox'))->name('cashbox');
    Route::get('/drug-store', fn () => view('pages.drug-store'))->name('drug_store');
});

Route::get('/medical-consultation', fn () => view('medical-consultation'));
