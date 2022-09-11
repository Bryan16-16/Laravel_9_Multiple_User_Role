<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Auth::routes(['verify' => true]);
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/patient/doctor-schedule', [HomeController::class, 'patientHome'])->name('patient.home');

    Route::get('/patient/profile-setting', [HomeController::class, 'patient_setting'])->name('patient.setting');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/dashboard', [HomeController::class, 'admin_dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [HomeController::class, 'admin_setting'])->name('admin.setting');
    Route::get('/admin/doctor', [HomeController::class, 'admin_doctor'])->name('admin.doctor');
    Route::get('/admin/secretary', [HomeController::class, 'admin_secretary'])->name('admin.secretary');
    Route::get('/admin/patient', [HomeController::class, 'admin_patient'])->name('admin.patient');
    

});
  
/*------------------------------------------
--------------------------------------------
All Doctor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:doctor'])->group(function () {
  
    Route::get('/doctor/home', [HomeController::class, 'doctorHome'])->name('doctor.home');
});

//new code added
/*------------------------------------------
--------------------------------------------
All Secretary Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:secretary'])->group(function () {
  
    Route::get('/secretary/home', [HomeController::class, 'secretaryHome'])->name('secretary.home');
});
