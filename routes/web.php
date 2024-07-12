<?php

use App\Http\Controllers\AuthController;
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
Route::post('posts', [PostController::class, 'store'])->name('create-post')->middleware('auth');
Route::delete('posts/{post}', [PostController::class, 'delete'])->name('delete-post')->middleware('auth');;
Route::get('posts/edit/{post}', [PostController::class, 'edit'])->name('edit-post')->middleware('auth');;
Route::put('posts/update/{post}', [PostController::class, 'update'])->name('update-post')->middleware('auth');;

Route::post('posts/{post}/comments' , [CommentController::class , 'store'])->name('create-comment')->middleware('auth');

Route::get('users/{user}', [AuthController::class , 'index'])->name('get-user');

Route::get('register' , [AuthController::class, 'register'])->name('register');
Route::post('register' , [AuthController::class, 'store'])->name('create-user');

Route::get('login' , [AuthController::class, 'login'])->name('login');
Route::post('login' , [AuthController::class , 'authenticate'])->name('auth-user');

Route::post('logout' , [AuthController::class , 'logout'])->name('logout')->middleware('auth');




