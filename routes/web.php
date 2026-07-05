<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/',function(){
    return view('welcome');
});

Route::resource('/student',StudentController::class);



Route::get('notification', [NotificationController::class, 'index']);
Route::get('notification/{type}', [NotificationController::class, 'notification'])->name("notification");

Route::resource('/product',ProductController::class);

Route::resource('district', DistrictController::class);