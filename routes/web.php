<?php

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
Route::get('/indexAlt', function () {
    return view('indexAlt');
});

Route::get('/componet', function () {
    return view('index');
});

/*-------------------------------------------------------------------------*/
Route::get('/', function () {
    return view('wip');
});

Route::get('/wip', function () {
    return view('wip');
});
Route::get('/welcome', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
