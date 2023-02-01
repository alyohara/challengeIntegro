<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProvinciaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function() {
    /**
     * Partidos Routes
     */
    Route::get('/partido/index', [ProvinciaController::class, 'index'])->name('partido.index');
    Route::get('/partido/show/{id}', [ProvinciaController::class, 'show'])->name('partido.show');
    Route::post('/partido/update', [ProvinciaController::class, 'update'])->name('partido.update');
});
