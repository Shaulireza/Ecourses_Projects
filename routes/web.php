<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EcourseMailController;
use App\Http\Controllers\EcoursesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('admin/contactquery',ContactController::class)->names('query');
Route::resource('admin/course',CourseController::class)->names('course');
Route::resource('admin/subject',SubjectController::class)->names('subject');
Route::resource('admin/teacher',TeacherController::class)->names('teacher');
Route::resource('admin/slider',SliderController::class)->names('slider');
Route::resource('admin/blog',BlogController::class)->names('blog');
Route::get('dashboard',[AdminController::class,'admin']);
Route::get('/contact',[EcoursesController::class,'contact'])->name('contact');
Route::get('/teacher',[EcoursesController::class,'teacher'])->name('teacher');
Route::get('/course',[EcoursesController::class,'course'])->name('course');
Route::get('/about',[EcoursesController::class,'about'])->name('about');
Route::get('/home',[EcoursesController::class,'home'])->name('home');
Route::get('mail',[EcourseMailController::class,'ecourse']);


Route::get('/', function () {
    return view('welcome');
});
