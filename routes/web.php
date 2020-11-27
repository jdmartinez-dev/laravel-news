<?php

use Illuminate\Support\Facades\Route;

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

Route::get('client/{name?}', function($name = 'Jose') {
    return "Hola, $name conocemos: <a href='".route('about-us')."'>About Us</a>";
});

Route::get('sobre-nosotros', function() {
    return "<h1>All informactions, about us.</h1>";
})->name('about-us');


Route::post('home', function($id) {
    return view("home");
})->name('home');
