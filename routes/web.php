<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\AppointmentController;

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

Route::get('/',[App\Http\Controllers\User\HomeController::class, 'home']);
Route::get('admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard']);

// appointment route
Route::post('appointment',[App\Http\Controllers\User\AppointmentController::class, 'appointment']);
Route::get('bookappointment',[App\Http\Controllers\User\AppointmentController::class, 'bookappointment']);
Route::get('approved/{id}',[App\Http\Controllers\User\AppointmentController::class, 'approved']);
Route::get('canceled/{id}',[App\Http\Controllers\User\AppointmentController::class, 'canceled']);
Route::get('email/{id}',[App\Http\Controllers\User\AppointmentController::class, 'email']);
Route::post('sendemail/{id}',[App\Http\Controllers\User\AppointmentController::class, 'sendemail']);

// patient record route
Route::get('patientdetails', [App\Http\Controllers\Admin\PatientController::class, 'patientdetails']);
Route::get('addpatientdetails', [App\Http\Controllers\Admin\PatientController::class, 'addpatientdetails']);
Route::post('savepatientdetails', [App\Http\Controllers\Admin\PatientController::class, 'savepatientdetails']);
Route::get('patientrecords/{id}', [App\Http\Controllers\Admin\PatientController::class, 'patientrecords']);
Route::get('medicalrecords', [App\Http\Controllers\Admin\PatientController::class, 'medicalrecords']);
Route::get('addmedicalrecords', [App\Http\Controllers\Admin\PatientController::class, 'addmedicalrecords']);
Route::post('savemedicalrecords', [App\Http\Controllers\Admin\PatientController::class, 'savemedicalrecords']);

// product route
Route::get('products', [App\Http\Controllers\Admin\ProductController::class, 'products']);
Route::get('addproducts', [App\Http\Controllers\Admin\ProductController::class, 'addproducts']);
Route::post('saveproducts', [App\Http\Controllers\Admin\ProductController::class, 'saveproducts']);
Route::get('updateproducts/{id}', [App\Http\Controllers\Admin\ProductController::class, 'updateproducts']);
Route::post('editproducts/{id}', [App\Http\Controllers\Admin\ProductController::class, 'editproducts']);
Route::get('deleteproducts/{id}', [App\Http\Controllers\Admin\ProductController::class, 'deleteproducts']);


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});
