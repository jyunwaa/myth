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
    $password = '456';
    $password_hash = \Illuminate\Support\Facades\Hash::make($password);
    dump($password_hash);
    dump(strlen($password_hash));
    $check = \Illuminate\Support\Facades\Hash::check($password . '2', $password_hash);
    dump($check);
});
