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


    Route::get('/doctors', fn () => view('pages.doctors'))->name('doctors');
    Route::get('/patients', fn () => view('pages.patients'))->name('patients');
    Route::get('/consultations', fn () => view('pages.consultations'))->name('consultations');
    Route::get('/cashbox', fn () => view('pages.cashbox'))->name('cashbox');
    Route::get('/drug-store', fn () => view('pages.drug-store'))->name('drug_store');

    Route::get('/payment-report', fn () => view('pages.hospitals.payment-report'))->name('hospitals.payment_report');
    Route::get('/income-report', fn () => view('pages.hospitals.income-report'))->name('hospitals.income_report');
    Route::get('/sales-report', fn () => view('pages.hospitals.sales-report'))->name('hospitals.sales_report');

    Route::get('/payments', fn () => view('pages.hospitals.payments'))->name('hospitals.payments');
    Route::get('/add-payment', fn () => view('pages.hospitals.add-payment'))->name('hospitals.add_payment');
    Route::get('/patient-invoice', fn () => view('pages.hospitals.patient-invoice'))->name('hospitals.patient_invoice');
});
