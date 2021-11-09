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


Route::get('/buatsuratdosen', function () {
    return view('buatsuratdosen');
});
Route::get('/suratmasukdosen', function () {
    return view('suratmasukdosen');
});


Route::get('/suratkeluardosen', function () {
    return view('suratkeluardosen');
});


Route::get('/arsipsuratdosen', function () {
    return view('arsipsuratdosen');
});


Route::get('/editsuratdosen', function () {
    return view('editsuratdosen');

});
Route::get('/dashboarddosen', function () {
    return view('dashboarddosen');

});
Route::get('/notifikasidosen', function () {
    return view('notifikasidosen');

});