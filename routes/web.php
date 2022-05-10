<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'confirm' => false,
    'login' => true,
    'logout' => true,
    'register' => false,
    'reset' => false,
    'verify' => false
]);
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('messages/index', [MessageController::class, 'index'])->name('messages.index');
    Route::get('messages/show/{message}',[MessageController::class,'show'])->name('message.show');
    Route::delete('messages/delete/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('office',App\Http\Controllers\OfficeController::class);
    Route::resource('solution',App\Http\Controllers\SolutionController::class);
    Route::resource('category',App\Http\Controllers\CategoryController::class);
    Route::resource('product',App\Http\Controllers\ProductController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
