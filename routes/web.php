<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Actor;
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
    return view('welcome');
});

Route::get('/actors', [ActorController::class, 'index']);
Route::get('/actors/add', [ActorController::class, 'add']);
Route::post('/actors', [ActorController::class, 'store']);
Route::get('/actors/{actor}/edit', [ActorController::class, 'edit']);
Route::put('/actors/{actor}', [ActorController::class, 'update']);
Route::delete('/actors/{actor}', [ActorController::class, 'destroy']);
Route::get('/actors/{actor}', [ActorController::class, 'destroy']);

