<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('courses',[CourseController::class,'index']);

Route::get('courses/show',[CourseController::class,'kuchb'])->name('kuchb')->middleware('auth');

Route::get('courses/show/{id}',[CourseController::class,'single_course'])->name('course.show');

Route::get('products/show/{name}/price/{price}/discount/{discount}',[CourseController::class,'product'])->name('product.show');


Route::post('courses/store',[CourseController::class,'store'])->name('course.store');

Route::get('courses/destroy/{id}',[CourseController::class,'destroy'])->name('course.destroy');
Route::get('courses/edit/{id}',[CourseController::class,'edit'])->name('course.edit');

Route::post('courses/update/{id}',[CourseController::class,'update'])->name('course.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
