<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AppController::class,'home']);

Route::get('/add-party',[AppController::class,'addParty'])->name('add_party');
Route::post('/create-party',[AppController::class,'createParty'])->name('create_party');

Route::get('/gst-bill',[AppController::class,'gstBill'])->name('gstBill');
Route::get('/create-gst-bill',[AppController::class,'CreategstBill'])->name('create_gstBill');