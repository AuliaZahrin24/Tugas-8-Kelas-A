<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KoleksiMajalahController;

Route::get('/', [KoleksiMajalahController::class, 'index']);
Route::resource('majalah', KoleksiMajalahController::class);
