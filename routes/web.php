<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return view('main.index');
});

Route::resource('/students',StudentController::class);

Route::get('/students/{id}/delete',[StudentController::class,'destroy']);


Route::resource('/teachers',TeacherController::class);

Route::get('/teachers/{id}/delete',[TeacherController::class,'destroy']);


Route::resource('/courses',CourseController::class);

Route::get('/courses/{id}/delete',[CourseController::class,'destroy']);


Route::resource('/batches',BatchController::class);

Route::get('/batches/{id}/delete',[BatchController::class,'destroy']);


Route::resource('/enrollments',EnrollmentController::class);

Route::get('/enrollments/{id}/delete',[EnrollmentController::class,'destroy']);


Route::resource('payments',PaymentController::class);

Route::get('/payments/{id}/delete',[PaymentController::class,'destroy']);


Route::get('report/report1/{pid}',[ReportController::class,'report1']);

















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
