<?php

use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\MoreInformationsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MyCoursesController;
use App\Http\Controllers\ReproductionVideoController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});



// Route::resource('video', 'VideoController');
// Route::resource('/video', [VideoController::class, 'index']);

// Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');

Route::post('/video/store/create/{id_course}', [VideoController::class, 'store'])->name('video.store');
Auth::routes();

Route::get('/admin/settings', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/admin/settings/{id}', [ProfileController::class, 'store'])->name('profile-edit.store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/more-information/{id}', [App\Http\Controllers\MoreInformationsController::class, 'index'])->name('more-informations.index');

Route::get('/registered-courses', [App\Http\Controllers\RegisteredCoursesController::class, 'index'])->name('registered-courses.index');

Route::get('/open-courses/{id}', [App\Http\Controllers\OpenCoursesController::class, 'index'])->name('open-courses.index');

Route::get('/open-courses/video/create/{id}', [VideoController::class, 'create'])->name('video.create');

Route::get('/course/create', [CreateCourseController::class, 'index'])->name('create.index');
Route::post('/course/store', [CreateCourseController::class, 'store'])->name('course.store');

Route::get('/course/edit/{id}', [CreateCourseController::class, 'edit'])->name('edit-course.edit');
Route::put('/course/edit/{id}',[CreateCourseController::class, 'update'])->name('edit-course.update');

Route::post('/course/register/{id}', [MoreInformationsController::class, 'store'])->name('more-informations.store');


Route::get('/course/mycourses', [MyCoursesController::class, 'index'])->name('mycourses.index');

Route::get('/open-mycourses/course/player/{id}', [ReproductionVideoController::class, 'index'])->name('player.index');
//mycouses
Route::get('/open-mycourses/{id}', [App\Http\Controllers\OpenMyCoursesController::class, 'index'])->name('open-my-courses.index');