<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'index'])->name('homePage');

Route::get('/about_us',[HomeController::class , 'about_us'])->name('about_us');

Route::get('/services',[HomeController::class , 'services'])->name('services');

Route::get('/work_with_us',[HomeController::class , 'work_with_us'])->name('work_with_us');

Route::get('/contact_us',[HomeController::class , 'contact_us'])->name('contact_us');

Route::get('/join_us',[HomeController::class , 'join_us'])->name('join_us');

Route::get('/service_page/{service}' , [ServiceController::class,'service'])->name('service_page');

Route::get('/pay',[ServiceController::class , 'pay'])->name('pay');

Route::get('/search/{service}' , [ServiceController::class , 'search'])->name('search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
