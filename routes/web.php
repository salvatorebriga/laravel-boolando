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
    $data = [
        'title' => 'Home',
        'data' => config('data'),
    ];
    return view('welcome', $data);
})->name('welcome');

Route::get('/about', function () {
    $data = [
        'title' => 'About',
    ];
    return view('about', $data);
})->name('about');

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact',
    ];
    return view('contact', $data);
})->name('contact');
