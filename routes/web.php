<?php

use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\UserController;
use App\Models\Kategori;
use App\Models\Rekomendasi;
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

Route::get('/', [UserController::class, 'login']);
Route::post('/auth', [UserController::class, 'authentikasi']);
Route::middleware('status_login')->group(function(){
    Route::get('/home', [UserController::class, 'home']);
    // Route::get('/home', [UserController::class, 'adm']);
    Route::get('/game', [UserController::class, 'game']);
    Route::get('/robot', [UserController::class, 'robot']);
    Route::get('/harta', [UserController::class, 'harta']);
    Route::get('/talking', [UserController::class, 'talking']);
    Route::get('/about', [UserController::class, 'about']);
    Route::get('/super', [UserController::class, 'super']);
    Route::get('/gameanak', [UserController::class, 'gameanak']);
    Route::get('/gamedewasa', [UserController::class, 'gamedewasa']);
    Route::get('/rekomendasi', [UserController::class, 'rekomendasi']);
    Route::get('/logout', [UserController::class, 'logout']);


    Route::get('/user', [UserController::class, 'show']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/create', [UserController::class, 'add']);
    Route::post('/user/edit/{id}',[UserController::class, 'update']);
    Route::get('/user/edit/{id}',[UserController::class, 'edit']);


    Route::get('/dashboard', [RekomendasiController::class, 'show']);
    Route::get('/dashboard/create', [RekomendasiController::class, 'create']);
    Route::post('/dashboard/create', [RekomendasiController::class, 'add']);
    Route::get('/dashboard/delete/{id}', [RekomendasiController::class, 'delete']);
    Route::post('/dashboard/search', [RekomendasiController::class, 'search']);
    Route::get('/dashboard/update/{id}', [RekomendasiController::class, 'edit']);
    Route::post('/dashboard/update/{id}', [RekomendasiController::class, 'update']);


    Route::get('/kategori',[Kategori::class, 'tampil']);
});
