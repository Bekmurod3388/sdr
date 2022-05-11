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
    return view('home');
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
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('students', App\Http\Controllers\StudentController::class);
    Route::resource('rooms', App\Http\Controllers\RoomController::class);
    Route::resource('floors', App\Http\Controllers\FloorController::class);
    Route::resource('binos', App\Http\Controllers\BinoController::class);
    Route::resource('student_info', App\Http\Controllers\StudentInfoController::class);
    Route::resource('facultets', App\Http\Controllers\FacultetController::class);
    Route::resource('attendances', \App\Http\Controllers\AttendanceController::class);
});

Route::post('/autoroom', [\App\Http\Controllers\AutoSearchController::class, 'room'])->name('roomauto');
Route::post('/autostudent',[\App\Http\Controllers\AutoSearchController::class, 'student'])->name('studentauto');
