<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('failed', fn () => throw new RuntimeException('Bad route!'));

Route::get('/', fn () => view('welcome'))->name('welcome');

Route::view('/testbench', 'workbench::testbench')->name('testbench');
Route::text('/hello-world', 'Hello world');
