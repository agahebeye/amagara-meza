<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('index'));



Route::prefix('hospital')->group(function () {
    Route::get('/', fn () => view('hospitals.index'))->name('hospitals.index');
    Route::get('/inbox', fn () => view('hospitals.mailbox.inbox'))->name('hospitals.inbox');
    Route::get('/inbox-detail', fn () => view('hospitals.mailbox.inbox-detail'))->name('hospitals.inbox_detail');
    Route::get('/compose', fn () => view('hospitals.mailbox.compose'))->name('hospitals.compose');
});
