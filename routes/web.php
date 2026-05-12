<?php

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

require __DIR__.'/auth.php';