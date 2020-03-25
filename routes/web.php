<?php

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

Route::get('/essai', function () {
    return view('home');
});

Route::get('/frero/{id}', function ($id) {
    $id = $id;
    $names = ['event1', 'event3', 'event4'];
    return view('essai')->withName($names)->withId($id);
});
