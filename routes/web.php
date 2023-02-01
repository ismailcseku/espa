<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InterestedController;

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
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course.details');
Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/degree', [DegreeController::class, 'index']);
Route::post('/interested/{id}', [InterestedController::class, '__invoke'])->name('interested');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/post', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', [AboutController::class, '__invoke'])->name('about.index');