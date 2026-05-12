<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Landing');
});


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    });

});

Route::middleware(['auth', 'role:teacher'])->group(function () {

    Route::get('/teacher/dashboard', function () {
        return Inertia::render('Teacher/Dashboard');
    });

});

Route::middleware(['auth', 'role:student'])->group(function () {

    Route::get('/student/dashboard', function () {
        return Inertia::render('Student/Dashboard');
    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
