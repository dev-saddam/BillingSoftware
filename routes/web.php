<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\DashboardController;



Route::get('/', [DashboardController::class,'index']);

Route::get('/add-vendor',[VendorController::class,'create']);
