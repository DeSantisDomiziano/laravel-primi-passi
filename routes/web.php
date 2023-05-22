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
    $mess = 'Hello Laravel';

    return view('home', compact('mess'));
})->name('home');

Route::get('/about', function () {
    $data = [
        'mess' => 'Learn Laravel with:',
        'teachers' => [
            'Donato',
            'Giuliano',
            'Fabio',
            ]
    ]; 

    return view('about', $data);
})->name('about');
