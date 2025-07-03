<?php

use App\Http\Controllers\ExplorerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
