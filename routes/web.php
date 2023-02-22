<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("index");
});


Route::get('/RegistroTurista', [RegistroController::class, 'create']);
Route::get('/login', [LoginController::class, 'index']);

Route::post('validar', 'LoginController@validar');

Route::post('Registro', [RegistroController::class, 'store']);
Route::post('Registro/filtrar', [RegistroController::class, 'filtrar']);

Route::middleware(['auth'])->group(function () {
    Route::get('inicio', [HomeController::class, 'index']);

});

Route::get('migrate', function() {
    Artisan::call('storage:link');
    Artisan::call('migrate');
});

Route::get('logout', function() {
    Auth::logout();
    return view('login');
});
