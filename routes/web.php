<?php

use App\Http\Controllers\CansiController;
use App\Http\Controllers\HomeController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// routes/web.php

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('cansi', [HomeController::class, 'cansi'])->name('cansi');
Route::get('contato', [HomeController::class, 'contact'])->name('contact');
Route::get('sobre', [HomeController::class, 'about'])->name('about');
Route::get('robotica', [HomeController::class, 'robotics'])->name('robotics');
Route::get('documentacao', [HomeController::class, 'documentation'])->name('documentation');

// Aulas

Route::get('/logic', [CansiController::class, 'logic'])->name('logic');

