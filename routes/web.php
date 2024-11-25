<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/booking-status', function () {
    return view('bookingStatus'); 
})->name('booking.status');


use App\Http\Controllers\AppointmentController;

Route::post('/book-appointment', [AppointmentController::class, 'store'])->name('appointments.store');

