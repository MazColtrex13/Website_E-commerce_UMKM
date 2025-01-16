<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RajaOngkirController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories',[CategoryController::class,'index']);

Route::get('/provinces', [RajaOngkirController::class, 'getProvince']);
Route::get('/cities/{provinceId}', [RajaOngkirController::class, 'getCity']);
Route::get('/ongkir', [RajaOngkirController::class, 'getCost']);


