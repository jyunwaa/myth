<?php

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

Route::get('/test', function () {

});

Route::prefix('role')->group(function () {
    Route::get('register', [\App\Http\Controllers\Role\RegisterController::class, 'index']);
    Route::post('register/store', [\App\Http\Controllers\Role\RegisterController::class, 'store']);
});
