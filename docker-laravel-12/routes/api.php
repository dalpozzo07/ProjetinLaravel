<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TradeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExplorerController;
use App\Http\Controllers\ItemController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('explorers', ExplorerController::class);
Route::apiResource('items', ItemController::class);
Route::apiResource('inventories', InventoryController::class);
Route::apiResource('trades', TradeController::class);
