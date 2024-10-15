<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/index', [UserController::class, 'index'])->name('index.property');
Route::get('/about', [UserController::class, 'about'])->name('about.property');
Route::get('/contact', [UserController::class, 'contact'])->name('contact.property');
Route::get('/projects', [UserController::class, 'projects'])->name('projects.property');
Route::get('/services', [UserController::class, 'services'])->name('services.property');
