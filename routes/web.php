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
Route::get('/admin', function () {
    return view('admin.layout.app');
});
Route::get('/list', function () {
    return view('admin.components.list');
});
Route::get('/create', function () {
    return view('admin.components.create');
});
Route::get('/update', function () {
    return view('admin.components.update');
});
