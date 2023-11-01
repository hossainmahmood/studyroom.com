<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::resource('teachers',TeacherController::class)->middleware(['auth']);
Route::resource('students',StudentController::class)->middleware(['auth']);;
Route::resource('videos', VideoController::class)->middleware(['auth']);;
Route::resource('courses', CourseController::class)->middleware(['auth']);;


Route::get('/dashboard', function () {
     return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
