<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('pages.index'));



Route::prefix('hospital')->group(function () {
    Route::get('/', fn () => view('pages.hospitals.index'))->name('hospitals.index');

    Route::get('/inbox', fn () => view('pages.hospitals.inbox'))->name('hospitals.inbox');
    Route::get('/inbox-detail', fn () => view('pages.hospitals.inbox-detail'))->name('hospitals.inbox_detail');
    Route::get('/compose', fn () => view('pages.hospitals.compose'))->name('hospitals.compose');

    Route::get('/doctor-schedule', fn () => view('pages.hospitals.doctor-schedule'))->name('hospitals.doctor_schedule');
    Route::get('/make-appointment', fn () => view('pages.hospitals.book-appointment'))->name('hospitals.make_appointment');


    Route::get('/doctors', fn () => view('pages.hospitals.doctors'))->name('hospitals.doctors');
    Route::get('/add-doctor', fn () => view('pages.hospitals.add-doctor'))->name('hospitals.add_doctor');
    Route::get('/edit-doctor', fn () => view('pages.hospitals.edit-doctor'))->name('hospitals.edit_doctor');
    Route::get('/doctor-profile', fn () => view('pages.hospitals.doctor-profile'))->name('hospitals.doctor_profile');
});
