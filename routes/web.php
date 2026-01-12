<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Home Page
Route::get('/', function () {
    return view('mainpage');
})->name('mainpage');

// Appointment Page
Route::get('/appointment', [AppointmentController::class, 'create'])->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// Confirmation Page
Route::get('/appointment/confirmation/{id}', [AppointmentController::class, 'confirmation'])->name('confirmation');

Route::get('/profile', [AppointmentController::class, 'profile'])
    ->name('profile')
    ->middleware('auth'); // Only logged-in users can access

// Edit / Update / Delete / Complete routes
Route::get('/appointment/{id}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');
Route::put('/appointment/{id}/complete', [AppointmentController::class, 'markComplete'])->name('appointments.complete');

// Services & Details Pages
Route::view('/services', 'services')->name('services');
Route::view('/facialDetails', 'facialDetails')->name('facialDetails');
Route::view('/acneDetails', 'acneDetails')->name('acneDetails');
Route::view('/antiagingDetails', 'antiagingDetails')->name('antiagingDetails');
Route::view('/brighteningDetails', 'brighteningDetails')->name('brighteningDetails');
Route::view('/hydratingDetails', 'hydratingDetails')->name('hydratingDetails');
Route::view('/pigmentationDetails', 'pigmentationDetails')->name('pigmentationDetails');

// Contact & About Pages
Route::get('/contact', [ReviewController::class, 'index'])->name('contact');
Route::post('/contact', [ReviewController::class, 'store'])->name('reviews.store');
Route::view('/about', 'about')->name('about');

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    $appointment = \App\Models\Appointment::all();
    return view('admin', compact('appointment'));
})->name('admin.dashboard');

Route::put('/appointment/{id}/complete', [AppointmentController::class, 'markComplete'])->name('appointments.complete');
