<?php

use App\Http\Controllers\ExplorerController;
use Illuminate\Support\Facades\Route;


Route::get('/explorers', [ExplorerController::class, 'index'])->name('explorers.index');
Route::get('/explorers/create', [ExplorerController::class, 'create'])->name('explorers.create');
Route::post('/explorers', [ExplorerController::class, 'store'])->name('explorers.store');
Route::put('/explorers/{id}', [ExplorerController::class, 'update'])->name('explorers.update');
Route::get('/explorers/{id}/edit', [ExplorerController::class, 'edit'])->name('explorers.edit');
Route::get('/', function () {
    return view('welcome');
});
