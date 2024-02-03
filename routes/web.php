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

Route::view('/abstract', 'abstract/index')->name('home');
Route::view('/abstract/login', 'abstract/login')->name('login');
Route::view('/abstract/contact-support', 'abstract/support')->name('contact-support');
// TODO: create a new route here related with the submit request button.
