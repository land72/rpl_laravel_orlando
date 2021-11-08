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
    return view('dashadmin');

});
Route::get('/login', function () {
    return view('login');

});
Route::get('/web', function () {
    return view('web');
});
Route::get('/dashboardmahasiswa', function () {
    return view('dashboardmahasiswa');
});
Route::get('/buatsurat', function () {
    return view('buatsurat');
});
Route::get('/suratmasuk', function () {
    return view('suratmasuk');
});


Route::get('/suratkeluar', function () {
    return view('suratkeluar');
});


Route::get('/arsipsurat', function () {
    return view('arsipsurat');
});
Route::get('/dashboard', function () {
    return view('dashboarddosen');
});
