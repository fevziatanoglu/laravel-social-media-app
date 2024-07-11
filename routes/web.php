<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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
    return view('app');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('post/{post_id}', [PostController::class, 'index'])->name('get-post');
Route::post('post', [PostController::class, 'store'])->name('create-post');
Route::delete('post/{post_id}', [PostController::class, 'delete'])->name('delete-post');

