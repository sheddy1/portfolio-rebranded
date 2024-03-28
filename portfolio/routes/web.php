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
})->name('welcome');

Route::get('About', 'Controller@about')->name('about');

Route::get('Projects', 'Controller@projects')->name('projects');

Route::get('Contact', 'Controller@contact')->name('contact');

Route::post('Message', 'Controller@message')->name('message');

Route::get('download', 'Controller@download')->name('download');
