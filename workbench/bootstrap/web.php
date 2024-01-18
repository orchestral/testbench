<?php

use Illuminate\Support\Facades\Route;

use function Illuminate\Filesystem\join_paths;
use function Orchestra\Testbench\workbench_path;

Route::get('/dashboard', function () {
    return 'workbench::dashboard';
})->middleware(['auth'])->name('dashboard');

require workbench_path(join_paths('routes', 'web.php'));
