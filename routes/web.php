<?php

use App\Http\Controllers\siteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ViacepController;
use App\Http\Controllers\BattleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/service/{id}', [SiteController::class, 'index']);

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index')->middleware(['auth']);
route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientController::class,'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');

Route::get('/features', [FeatureController::class, 'index'])->name('features.index');

Route::get('/viacep', [ViacepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViacepController::class, 'index'])->name('viacep.search');

Route::get('/battle', [BattleController::class, 'index'])->name('battle.index');
Route::post('/battle', [BattleController::class, 'search'])->name('battle.search');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', function(){
    Auth::logout();
    return view('home');
});

Route::get('/', function() {
    return view('welcome');
});

// Desafio: Alterar a barra de navegação de todas as páginas e verificar se está ou não logado

