<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicalOfficerController;
use App\Http\Controllers\SchoolNurseController;
use App\Http\Controllers\ClassAdviserController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
Route::get('/medical_officer/dashboard', [MedicalOfficerController::class, 'MedicalOfficerDashboard'])->name('medical_officer.dashboard');
Route::get('/school_nurse/dashboard', [SchoolNurseController::class, 'SchoolNurseDashboard'])->name('school_nurse.dashboard');
Route::get('/class_adviser/dashboard', [ClassAdviserController::class, 'ClassAdviserDashboard'])->name('class_adviser.dashboard');