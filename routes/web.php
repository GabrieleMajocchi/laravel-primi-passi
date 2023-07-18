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
    $data=[
        'users'=>[
                    ['name'=>'Gino',
                    'surname'=>'Paoli'],
                    ['name'=>'Paolo',
                    'surname'=>'Rossi'],
                ]
        ];

    return view('home', $data);
})->name('home');

Route::get('/about-us', function () {
    $data=[
        'users'=>[
                    ['name'=>'Gino',
                    'surname'=>'Paoli',
                    'role'=>'CEO'],
                    ['name'=>'Paolo',
                    'surname'=>'Rossi',
                    'role'=>'Co-Founder'],
                ]
        ];

    return view('about-us', $data);
})->name('about-us');