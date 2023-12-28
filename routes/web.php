<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::prefix('admin')->middleware('checkuser')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('about', [AdminController::class, 'about']);
    Route::get('contact', [AdminController::class, 'contact']);
    Route::get('footer', [AdminController::class, 'footer']);
    Route::get('social-media', [AdminController::class, 'social_media']);
    Route::put('social-media/{id}', [SocialMediaController::class, 'update'])->name('socialMedia.update');
    Route::get('registration', [AdminController::class, 'registration']);
    Route::get('registration/{id}', [RegistrationController::class, 'registrationDelete']);
    Route::get('history', [AdminController::class, 'history']);
    Route::get('data-order', [AdminController::class, 'dataOrder']);
    Route::get('accept/{id}', [AdminController::class, 'accept']);
});

Route::prefix('user')->middleware('checkuser')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}/pdf', [RegistrationController::class, 'createPDF']);
    Route::get('payment', [UserController::class, 'payment']);
    Route::get('order', [UserController::class, 'order']);
    Route::post('order', [OrderController::class, 'store']);
    Route::get('data-order', [OrderController::class, 'dataOrder']);
    Route::get('confirmation-payment/{id}', [OrderController::class, 'confirmationPayment']);
    Route::post('confirmation-payment', [OrderController::class, 'confirmationPaymentStore']);
});

Route::post('/registration', [RegistrationController::class, 'processForm']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

