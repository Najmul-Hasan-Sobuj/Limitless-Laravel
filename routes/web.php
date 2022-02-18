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

Route::get('/', function () {
    return redirect()->route('admin');
});
Route::get('/admin', function () {
    return view('admin.layout.app');
})->name('admin');


// admin routes list start
Route::resource('student', StudentsController::class);
// admin routes list end