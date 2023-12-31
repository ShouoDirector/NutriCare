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

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
}); //End Admin Group Middleware

Route::middleware(['auth','role:medical_officer'])->group(function(){
    Route::get('/medical_officer/dashboard', [MedicalOfficerController::class, 'MedicalOfficerDashboard'])->name('medical_officer.dashboard');
    Route::get('/medical_officer/logout', [MedicalOfficerController::class, 'MedicalOfficerLogout'])->name('medical_officer.logout');
    Route::get('/medical_officer/profile', [MedicalOfficerController::class, 'MedicalOfficerProfile'])->name('medical_officer.profile');
    Route::post('/medical_officer/profile/store', [MedicalOfficerController::class, 'MedicalOfficerProfileStore'])->name('medical_officer.profile.store');
    Route::get('/medical_officer/change/password', [MedicalOfficerController::class, 'MedicalOfficerChangePassword'])->name('medical_officer.change.password');
    Route::post('/medical_officer/update/password', [MedicalOfficerController::class, 'MedicalOfficerUpdatePassword'])->name('medical_officer.update.password');
}); //End  Medical Officer Group Middleware

Route::middleware(['auth','role:school_nurse'])->group(function(){
    Route::get('/school_nurse/dashboard', [SchoolNurseController::class, 'SchoolNurseDashboard'])->name('school_nurse.dashboard');
    Route::get('/school_nurse/logout', [SchoolNurseController::class, 'SchoolNurseLogout'])->name('school_nurse.logout');
    Route::get('/school_nurse/profile', [SchoolNurseController::class, 'SchoolNurseProfile'])->name('school_nurse.profile');
    Route::post('/school_nurse/profile/store', [SchoolNurseController::class, 'SchoolNurseProfileStore'])->name('school_nurse.profile.store');
    Route::get('/school_nurse/change/password', [SchoolNurseController::class, 'SchoolNurseChangePassword'])->name('school_nurse.change.password');
    Route::post('/school_nurse/update/password', [SchoolNurseController::class, 'SchoolNurseUpdatePassword'])->name('school_nurse.update.password');
}); //End School Nurse Group Middleware

Route::middleware(['auth','role:class_adviser'])->group(function(){
    Route::get('/class_adviser/dashboard', [ClassAdviserController::class, 'ClassAdviserDashboard'])->name('class_adviser.dashboard');
    Route::get('/class_adviser/logout', [ClassAdviserController::class, 'ClassAdviserLogout'])->name('class_adviser.logout');
    Route::get('/class_adviser/profile', [ClassAdviserController::class, 'ClassAdviserProfile'])->name('class_adviser.profile');
    Route::post('/class_adviser/profile/store', [ClassAdviserController::class, 'ClassAdviserProfileStore'])->name('class_adviser.profile.store');
    Route::get('/class_adviser/change/password', [ClassAdviserController::class, 'ClassAdviserChangePassword'])->name('class_adviser.change.password');
    Route::post('/class_adviser/update/password', [ClassAdviserController::class, 'ClassAdviserUpdatePassword'])->name('class_adviser.update.password');
}); //End Class Adviser Group Middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::get('/medical_officer/login', [MedicalOfficerController::class, 'MedicalOfficerLogin'])->name('medical_officer.login');

Route::get('/school_nurse/login', [SchoolNurseController::class, 'SchoolNurseLogin'])->name('school_nurse.login');

Route::get('/class_adviser/login', [ClassAdviserController::class, 'ClassAdviserLogin'])->name('class_adviser.login');