<?php

use App\Http\Controllers\Api\ApplianceController;
// use App\Http\Controllers\ApplianceApiController;
use App\Models\Appliance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/appliances', [ApplianceApiController::class, 'index']);
// Route::post('/appliances/create', [ApplianceApiController::class, 'store']);
// Route::get('/appliances/{id}', [ApplianceApiController::class, 'show']);
// Route::resource('appliances', ApplianceApiController::class);

Route::resource('/appliances', ApplianceController::class);
