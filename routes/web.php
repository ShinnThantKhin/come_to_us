<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\CounselorController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\AppointmentController;

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

//Page View
Route::get('/appointment', [AppointmentController::class,'appointmentView']);

Route::get('/home', [HomeController::class,'HomeView']);

Route::get('/self_assessment', [AssessmentController::class,'assessmentView']);

Route::get('/counselors', [CounselorController::class,'counselorView']);

Route::get('/elements', [ElementController::class,'elementView']);

// Appointment Form
Route::post('/appointment', [AppointmentController::class,'addAppointment']);

//Review
Route::post('/elements',[ElementController::class,'addReview']);


