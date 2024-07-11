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
Route::get('post/{post}', [PostController::class, 'index'])->name('get-post');
Route::post('post', [PostController::class, 'store'])->name('create-post');
Route::delete('post/{post}', [PostController::class, 'delete'])->name('delete-post');
Route::get('post/edit/{post}', [PostController::class, 'edit'])->name('edit-post');
Route::put('post/update/{post_id}', [PostController::class, 'update'])->name('update-post');



