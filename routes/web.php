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

Route::get('/', [App\Http\Controllers\admin\AdminController::class, 'dashboard']);
// Post route
Route::get('show', [App\Http\Controllers\admin\PostController::class, 'show']);
// create route
Route::get('post/create',[App\Http\Controllers\admin\PostController::class, 'create']);
// sotore route
Route::post('post/store',[App\Http\Controllers\admin\PostController::class, 'store']);
// delete route
Route::get('post/delete/{id}',[App\Http\Controllers\admin\PostController::class, 'destroy']);
// edit route
Route::get('edit/{id}',[App\Http\Controllers\admin\PostController::class, 'edit']);
// update route
Route::post('update/{id}',[App\Http\Controllers\admin\PostController::class, 'update']);
