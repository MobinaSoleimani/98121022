<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalController;
use App\Http\Controllers\CustomAuthController;

Route::get('index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('digitalgoods');
});

Route::get('digitalgoods',[DigitalController::class,'list']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');