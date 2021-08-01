<?php

use App\Models\Category;
use App\Models\User;
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

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('authors/{author}', function (User $author) {
//    dd($author);
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
})->name('author');
