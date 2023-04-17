<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/getAllUsers',[App\Http\Controllers\UserController::class, 'getAllUsers'])->name('getAllusers');
Route::Post('/getUserById',[App\Http\Controllers\UserController::class, 'getUserById'])->name('getUserById');
Route::Post('/createUser',[App\Http\Controllers\UserController::class, 'createUser'])->name('createUser');
Route::Post('/updateUser',[App\Http\Controllers\UserController::class, 'updateUser'])->name('updateUser');
Route::Post('/updateUserPassword',[App\Http\Controllers\UserController::class, 'updateUserPassword'])->name('updateUserPassword');
Route::Post('/deleteUser',[App\Http\Controllers\UserController::class, 'deleteUser'])->name('deleteUser');