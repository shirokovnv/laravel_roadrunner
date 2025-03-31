<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_memory_leaks', [TestController::class, 'testMemoryLeaks']);
Route::get('/test_heavy_logic', [TestController::class, 'testHeavyLogic']);
