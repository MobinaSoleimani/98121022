<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalController;

Route::get('index', function () {
    return view('index');
});

Route::get('DigitalGoods',[DigitalController::class,'list']);