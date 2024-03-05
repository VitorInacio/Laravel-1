<?php

use App\Http\Controllers\siteController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// cliente.php?id=1
Route::get('/service/{id}', [siteController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);
