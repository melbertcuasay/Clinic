<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\ProceduresController;
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

// procedures route
Route::get('procedures',[App\Http\Controllers\Admin\ProceduresController::class, 'procedures']);
Route::get('addprocedures',[App\Http\Controllers\Admin\ProceduresController::class, 'addprocedures']);
Route::post('saveprocedures',[App\Http\Controllers\Admin\ProceduresController::class, 'saveprocedures']);

// report route
Route::get('reports', [App\Http\Controllers\Admin\ReportsController::class, 'reports']);
Route::get('viewreports/{patient_id}', [App\Http\Controllers\Admin\ReportsController::class, 'viewreports']);
Route::get('invoice/{patient_id}',[App\Http\Controllers\Admin\ReportsController::class, 'viewInvoice']);
Route::get('invoice/{patient_id}/generate', [App\Http\Controllers\Admin\ReportsController::class, 'generateInvoice']);

// inventory route
Route::get('inventory', [App\Http\Controllers\Admin\InventoryController::class, 'inventory']);
Route::get('stocks', [App\Http\Controllers\Admin\InventoryController::class, 'stocks']);
Route::post('savestocks', [App\Http\Controllers\Admin\InventoryController::class, 'savestocks']);
Route::get('updatestocks/{id}', [App\Http\Controllers\Admin\InventoryController::class, 'updatestocks']);
Route::post('editstocks/{id}', [App\Http\Controllers\Admin\InventoryController::class, 'editstocks']);




Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});
