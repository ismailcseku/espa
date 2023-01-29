<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, '__invoke'])->name('home');
Route::get('/courses/{course}', [\App\Http\Controllers\CourseController::class, 'show'])->name('course.details');
Route::get('/degree', [\App\Http\Controllers\DegreeController::class, 'index']);