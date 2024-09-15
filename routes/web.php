<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\AdminControllers\AdminDashboardController as Dash;
use App\Http\Controllers\AdminControllers\AdminManageUserController;
use App\Http\Controllers\AdminControllers\AdminManageAgencyController;
use App\Http\Controllers\AdminControllers\AdminAddJobController;
use App\Http\Controllers\AdminControllers\AdminSubJobController;

//Company controllers

use App\Http\Controllers\CompanyControllers\CompanyDashboardController;
use App\Http\Controllers\CompanyControllers\CompanyManageJobPosting;

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

//PDF Generator
Route::get('Myadmin/');

Route::get('Myadmin/adminDashboard', [Dash::class,'dashboard']);
Route::get('Myadmin/allUser', [AdminManageUserController::class,'allUser']);
Route::get('Myadmin/userBlock',[AdminManageUserController::class,'userBlock']);
Route::get('Myadmin/userReport', [AdminManageUserController::class,'userReport']);
Route::get('Myadmin/accept_reject_Company', [AdminManageAgencyController::class,'accept_reject']);
Route::get('Myadmin/manageJobListing',  [AdminManageAgencyController::class,'manageJobListing']);
Route::get('Myadmin/allCompany', [AdminManageAgencyController::class,'allCompany']);

Route::get('Myadmin/addJob', [AdminAddJobController::class,'addJob']);
Route::post('Myadmin/store_job',[AdminAddJobController::class,'store_job'])->name('store_job');
Route::get('Myadmin/allJob', [AdminAddJobController::class, 'allJob']);
Route::get('Myadmin/editJob/{id}',[AdminAddJobController::class,'editJob']);
Route::put('Myadmin/update_job/{id}',[AdminAddJobController::class,'update_job'])->name('update_job');
Route::get('Myadmin/deleteJob/{id}',[AdminAddJobController::class,'deleteJob'] );


Route::get('Myadmin/addSubJob',[AdminSubJobController::class,'addjobSubCategory']);
Route::post('Myadmin/store_subjob',[AdminSubJobController::class,'store_subjob'])->name('store_subjob');
Route::get('Myadmin/allSubJob',[AdminSubJobController::class,'allSubJob'] );
Route::get('Myadmin/editSubJob/{id}',[AdminSubJobController::class,'editSubJob'] );
Route::put("Myadmin/updateSubJob/{id}",[AdminSubJobController::class,'updateSubJob'])->name('updateSubJob');
Route::get('Myadmin/deleteSubJob/{id}',[AdminSubJobController::class,'deleteSubJob'] );


Route::view('Myadmin/feedback', 'Myadmin.feedback');
Route::view('Myadmin/inquiry', 'Myadmin.inquiry');
Route::view('Myadmin/reportAndAna', 'Myadmin.reportAndAna');
Route::view('Myadmin/resumeTemplate', 'Myadmin.resumeTemplate');
Route::view('Myadmin/settings', 'Myadmin.settings');
Route::view('Myadmin/login', 'Myadmin.login');
Route::post('Myadmin/login',[AdminDaoController::class,'admin_auth'])->name('login');
Route::view('Myadmin/addAdmin', 'Myadmin.addAdmin');
Route::post('Myadmin/addAdmin',[AdminDaoController::class,'addAdmin'])->name('addAdmin');


//Comapny Routes

Route::get("Company/Dashboard",[CompanyDashboardController::class,'getDashboard']);

Route::get("Company/newJobPosting",[CompanyManageJobPosting::class,'newJobPosting']);
Route::get("Company/manageJobPosting",[CompanyManageJobPosting::class,'manageJobPosting']);

require __DIR__.'/auth.php';
