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

//Route::get('newsletter', function () {
//    $response = \Illuminate\Support\Facades\Http::get(config('services.convertkit.url') . '/v3/forms', [ 'api_key' => config('services.convertkit.key')])->json();
//        ddd($response);
//});

Route::post('subscribe', function () {
    request()->validate([
        'email' => 'required|email'
    ]);

    try {
        $response = \Illuminate\Support\Facades\Http::post(
            config('services.convertkit.url') . '/v3/forms/' . config('services.convertkit.form_id') . '/subscribe',
            [
                'api_key' => config('services.convertkit.key'),
                'email' => request('email'),
                'tag' => ['Blog'],
            ]
        )->json();
    } catch (\Exception $e) {
        \Illuminate\Validation\ValidationException::withMessages(['email' => 'This email is invalid!']);
    };

    return redirect('/')->with('success', 'You are signed up for our newsletter');
})->name('subscribe');

require __DIR__ . '/auth.php';
