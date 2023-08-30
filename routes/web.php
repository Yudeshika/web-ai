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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/json-read', [App\Http\Controllers\EditorController::class, 'index'])->name('json_read');
Route::get('/is_an_editor', [App\Http\Controllers\EditorController::class, 'isEditor'])->name('is_an_editor');
Route::post('/json-store', [App\Http\Controllers\EditorController::class, 'store'])->name('json_store');
Route::post('/image-store', [App\Http\Controllers\EditorController::class, 'upload'])->name('image_store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index.html', function () {
    return view('welcome');
});


Route::get('/about.html', function () {
    return view('about');
});

Route::get('/blog-page.html', function () {
    return view('blog-page');
});

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/gallery.html', function () {
    return view('gallery');
});

Route::get('/programs.html', function () {
    return view('programs');
});

Route::get('/single-blog.html', function () {
    return view('single-blog');
});

Route::get('/single-course.html', function () {
    return view('single-course');
});


Route::get('/teacher.html', function () {
    return view('teacher');
});


Route::get('/teacher-profile.html', function () {
    return view('teacher-profile');
});

