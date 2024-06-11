<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController; // Tambahkan UserController jika belum ada

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index'); // Ganti rute dashboard menjadi user.index
    Route::get('/user/info', [UserController::class, 'info'])->name('user.info');

    Route::get('/info', function () {
        return view('info');
    })->name('info');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin', function () {
            return redirect()->route('students.index');
        })->name('admin.dashboard');

        Route::resource('students', StudentController::class);
    });
    
});
