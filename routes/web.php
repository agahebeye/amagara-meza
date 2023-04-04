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

    // Route::get('/patients', fn () => view('pages.hospitals.patients'))->name('hospitals.patients');
    // Route::get('/add-patient', fn () => view('pages.hospitals.add-patient'))->name('hospitals.add_patient');
    // Route::get('/edit-patient', fn () => view('pages.hospitals.edit-patient'))->name('hospitals.edit_patient');
    // Route::get('/patient-profile', fn () => view('pages.hospitals.patient-profile'))->name('hospitals.patient_profile');

    Route::get('/payment-report', fn () => view('pages.hospitals.payment-report'))->name('hospitals.payment_report');
    Route::get('/income-report', fn () => view('pages.hospitals.income-report'))->name('hospitals.income_report');
    Route::get('/sales-report', fn () => view('pages.hospitals.sales-report'))->name('hospitals.sales_report');

    Route::get('/payments', fn () => view('pages.hospitals.payments'))->name('hospitals.payments');
    Route::get('/add-payment', fn () => view('pages.hospitals.add-payment'))->name('hospitals.add_payment');
    Route::get('/patient-invoice', fn () => view('pages.hospitals.patient-invoice'))->name('hospitals.patient_invoice');
});
