<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
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

Route::get('doctors/create',[DoctorController::class, 'create']);

Route::get('doctors/',[DoctorController::class, 'store']);

Route::post('doctors/edit',[DoctorController::class, 'editStore']);

Route::get('doctors/',[DoctorController::class, 'index']);

Route::get('doctors/{id}',[DoctorController::class, 'show']);

Route::get('doctors/delete/{id}',[DoctorController::class, 'delete']);

Route::get('visits/',[VisitController::class, 'index']);

Route::get('patients/',[PatientController::class, 'index'])->middleware('auth');

Route::get('patients/{id}',[PatientController::class, 'show'])->middleware('auth');

Route::post('patients}',[PatientController::class, 'store'])->middleware('auth');

Route::get('specializations/',[SpecializationController::class, 'index']);

Route::get('specializations/create',[SpecializationController::class, 'create']);

Route::get('visits/',[VisitController::class, 'index']);

Route::get('visits/create',[SpecializationController::class, 'create']);

Route::get('visits/',[VisitController::class, 'store']);

Route::get('sms/',[SmsController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
