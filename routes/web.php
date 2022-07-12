<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;

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

	
// Route::resource('video', 'VideoController');
// Route::resource('/video', [VideoController::class, 'index']);

Route::get('/video/index', [VideoController::class, 'index'])->name('video.index');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store');
Auth::routes();

Route::get('/admin/settings', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

