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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/faculty', function () {
    return view('faculty'); 
})->name('faculty');

Route::get('/student-life', function () {
    return view('student-life'); 
})->name('studentLife');

Route::get('/community', function () {
    return view('community'); 
})->name('community');

Route::get('/achievements', function () {
    return view('achievements'); 
})->name('achievements');

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');


