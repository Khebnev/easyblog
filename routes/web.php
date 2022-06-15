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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('main');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::middleware("auth")->(function (){
    Route::get('/logout',[\App\Http\Controllers\AuthController::class, 'showLogoutForm'])->name('logout'); //showlogoutForm метод 
});

Route::middleware("guest")->(function (){
    Route::get('/login',[\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login'); //showLoginForm метод логина
    Route::post('/login_process',[\App\Http\Controllers\AuthController::class, 'login'])->name('login_process'); 

    Route::get('/register',[\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register'); //showRegisterForm метод регистрации
    Route::post('/register_process',[\App\Http\Controllers\AuthController::class, 'register'])->name('register_process'); //showRegisterForm метод регистрации
});



