<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('pages.index'));



Route::prefix('hospital')->group(function () {
    Route::get('/', fn () => view('pages.hospitals.index'))->name('hospitals.index');
    Route::get('/inbox', fn () => view('pages.hospitals.mailbox.inbox'))->name('hospitals.inbox');
    Route::get('/inbox-detail', fn () => view('pages.hospitals.mailbox.inbox-detail'))->name('hospitals.inbox_detail');
    Route::get('/compose', fn () => view('pages.hospitals.mailbox.compose'))->name('hospitals.compose');
});
