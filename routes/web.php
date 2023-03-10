<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AxieController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class,'verification']);
Route::get('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'role:user|admin']], function () {
    Route::get('/dashboard', function() {
        return view('/dashboard');
    });
    Route::get('/axie', [AxieController::class, 'index']);
    Route::get('/edit/{axie}', [AxieController::class, 'edit']);
});
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    
    Route::get('/delete/{axie}', [AxieController::class, 'destroy']);
    Route::get('/logs', [SiteController::class, 'logs']);
  
});

