<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Pdfontroller;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('/students', StudentController::class);



Route::resource('/teachers', TeacherController::class);

Route::resource('/courses', CourseController::class);

Route::resource('/batches', BatchController::class);


Route::get('/', [DashboardController::class, 'dashboard']);

Route::resource('/enrollments', EnrollmentController::class);

Route::resource('/payments', PaymentController::class);

//print
//Route::get('report/report1/{pid}', [ReportController::class, 'report1']);
Route::get('/generatepdf', [Pdfontroller::class, 'generatepdf']);

//reports
Route::get('/reports', [ReportController::class, 'reports']);

Route::get('/reportform', function () {
    return view('/reports.reportform');
});
