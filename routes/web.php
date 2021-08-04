<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [\App\Http\Controllers\PostController::class, 'show'])
    ->where('post', '[A-z_\-0-9]+')
    ->name('post');

Route::post('posts/{post:slug}/comments', [\App\Http\Controllers\CommentController::class, 'store'])
    ->name('comment.store')->middleware('auth');

require __DIR__ . '/auth.php';
