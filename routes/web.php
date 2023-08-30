<?php

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

Route::middleware('clearcache')->group(function () {
    // Aquí van las rutas que deseas proteger con los middlewares 'auth', 'checkrole' y 'clearcache'

    Route::get('/', function () {
        return view('auth.login');
    })->middleware('guest');

    Auth::routes();

    Route::resource('herramientas', App\Http\Controllers\HerramientaController::class)->middleware('auth');

    Route::resource('camiones', App\Http\Controllers\CamioneController::class)->middleware('auth');

    Route::resource('listas', App\Http\Controllers\ListaController::class)->middleware('auth');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/home', function () {
        return view('home');
    })->name('home')->middleware('auth');

    Route::get('/admin/settings/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::put('/admin/settings/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

/*Route::get('/new', function () {
return "New Page";
});*/
});
