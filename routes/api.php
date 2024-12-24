<?php

use App\Http\Controllers\API\AuthenticatedSessionConstroller;
use App\Http\Controllers\API\BookingController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\RegisteredUserConstroller;
use App\Http\Controllers\API\ReviewControlle;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\UserController;

use Illuminate\Auth\TokenGuard;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/register', [RegisteredUserConstroller::class, 'store']);
Route::post('/login', [AuthenticatedSessionConstroller::class, 'login']);
Route::post('/logout', [AuthenticatedSessionConstroller::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
// User API routes
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

// Services API routes
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{id}', [ServiceController::class, 'show']);
Route::post('/add_service', [ServiceController::class, 'store']);

// Bookings API routes
Route::post('/add_booking', [BookingController::class, 'store']);
Route::get('/bookings', [BookingController::class, 'index']);
Route::get('/bookings/{id}', [BookingController::class, 'show']);


// Payments API routes
Route::post('/add_payment', [PaymentController::class, 'store']);
Route::get('/get_payments', [PaymentController::class, 'index']);
Route::get('/get_payments/{id}', [PaymentController::class, 'show']);


// Reviews API routes
Route::post('/add_review', [ReviewControlle::class, 'store']);
Route::get('/get_reviews', [ReviewControlle::class, 'index']);
Route::get('/get_reviews/{id}', [ReviewControlle::class, 'show']);

});



Route::get('/test', function () {
    dd('Test Api');
});

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/bookings', [BookingController::class, 'index']);
