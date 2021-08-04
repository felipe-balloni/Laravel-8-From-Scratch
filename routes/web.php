<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show'])
    ->where('post', '[A-z_\-0-9]+')
    ->name('post');

Route::post('posts/{post:slug}/comments', [CommentController::class, 'store'])
    ->name('comment.store')->middleware('auth');

Route::post('subscribe', NewsletterController::class)->name('subscribe');

require __DIR__ . '/auth.php';
