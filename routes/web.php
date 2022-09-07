<?php

use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MyCoursesController;
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

Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store');
Auth::routes();

Route::get('/admin/settings', [ProfileController::class, 'index'])->name('profile.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/more-information/{id}', [App\Http\Controllers\MoreInformationsController::class, 'index'])->name('more-informations.index');

Route::get('/course/create', [CreateCourseController::class, 'index'])->name('create.index');
Route::post('/course/store', [CreateCourseController::class, 'store'])->name('course.store');

Route::get('/course/mycourses', [MyCoursesController::class, 'index'])->name('mycourses.index');