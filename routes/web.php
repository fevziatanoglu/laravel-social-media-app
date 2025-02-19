<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


// prefix for url name   ->    post/{post}
// as for name()              post.get
// withoutMiddleware for if group have middleware , these are exception  ,  ['auth'] write this way !!
Route::group(['prefix' => 'post/' , 'as' => 'post.' , 'middleware' => ['auth']] , function (){
    Route::get('{post}', [PostController::class, 'index'])->name('get')->withoutMiddleware(['auth']);
    Route::post('', [PostController::class, 'store'])->name('store');
    Route::delete('{post}', [PostController::class, 'delete'])->name('delete');
    Route::get('edit/{post}', [PostController::class, 'edit'])->name('edit');
    Route::put('update/{post}', [PostController::class, 'update'])->name('update');
});



Route::post('posts/{post}/comments' , [CommentController::class , 'store'])->name('create-comment')->middleware('auth');

Route::get('users/{user}', [UserController::class , 'index'])->name('get-user');

Route::post('users/{user}/follow', [FollowerController::class , 'follow'])->name('follow-user')->middleware('auth');
Route::delete('users/{user}/unfollow', [FollowerController::class , 'unfollow'])->name('unfollow-user')->middleware('auth');

Route::post('posts/{post}/like', [PostLikeController::class , 'like'])->name('like-post')->middleware('auth');
Route::delete('post/{post}/unlike', [PostLikeController::class , 'unlike'])->name('unlike-post')->middleware('auth');

Route::get('register' , [AuthController::class, 'register'])->name('register');
Route::post('register' , [AuthController::class, 'store'])->name('create-user');

Route::get('login' , [AuthController::class, 'login'])->name('login');
Route::post('login' , [AuthController::class , 'authenticate'])->name('auth-user');

Route::post('logout' , [AuthController::class , 'logout'])->name('logout')->middleware('auth');




