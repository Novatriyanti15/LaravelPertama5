<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\cobacontroller;
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

Route::get('', [App\Http\Controllers\cobacontroller::class, 'index']);
Route::get('/friends', [App\Http\Controllers\cobacontroller::class, 'index']);
Route::get('/friends/create', [App\Http\Controllers\cobacontroller::class, 'create']);
Route::post('/friends', [App\Http\Controllers\cobacontroller::class, 'store']);
Route::get('/friends/{id}', [App\Http\Controllers\cobacontroller::class, 'show']);
Route::get('/friends/{id}/edit', [App\Http\Controllers\cobacontroller::class, 'edit']);
Route::put('/friends/{id}', [App\Http\Controllers\cobacontroller::class, 'update']);
Route::delete('/friends/{id}', [App\Http\Controllers\cobacontroller::class, 'destroy']);

Route::resources([
    'friends' => App\Http\Controllers\cobacontroller::class,
    'groups' => App\Http\Controllers\GroupsController::class,
]);