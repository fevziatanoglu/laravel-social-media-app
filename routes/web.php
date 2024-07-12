<?php

use App\Http\Controllers\CommentController;
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
Route::get('posts/{post}', [PostController::class, 'index'])->name('get-post');
Route::post('posts', [PostController::class, 'store'])->name('create-post');
Route::delete('posts/{post}', [PostController::class, 'delete'])->name('delete-post');
Route::get('posts/edit/{post}', [PostController::class, 'edit'])->name('edit-post');
Route::put('posts/update/{post}', [PostController::class, 'update'])->name('update-post');

Route::post('posts/{post}/comments' , [CommentController::class , 'store'])->name('create-comment');



