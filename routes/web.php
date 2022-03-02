<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentsController;

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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

// admin routes list start

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return view('admin.layout.app');
    })->name('admin');
    Route::resource('student', StudentsController::class);
});

// auth
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin routes list end
