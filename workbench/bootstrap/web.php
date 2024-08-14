<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return 'workbench::dashboard';
})->middleware(['auth'])->name('dashboard');
