<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\isAdmin;
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

Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified']);

// Route::get('login', [AuthController::class, 'login']);
// Route::post('login', [AuthController::class, 'authenticate']);
// Route::post('logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('register', [AuthController::class, 'register_form']);
// Route::post('register', [AuthController::class,'register']);

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::post('posts', [PostController::class, 'store']);

Route::delete('posts/{id}', [PostController::class, 'destroy']);
Route::get('posts/{id}/edit', [PostController::class, 'edit']);
Route::patch('posts/{id}', [PostController::class, 'update']);
