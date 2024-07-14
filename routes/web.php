<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\BlogController;

// harus login
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth']], function () {

    // Dashboard
    Route::get('/', function () {
        return view('dashboard');
    })->name('index');

    // User
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('create', [UserController::class, 'create'])->name('user.create');
    });
});


// harus login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Merk
Route::group(['prefix' => 'merk'], function () {
    Route::get('/', [MerkController::class, 'index'])->name('merk.index');
});

// Blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
});

Route::get('/', [HomeController::class, 'index']);

require __DIR__ . '/auth.php';
