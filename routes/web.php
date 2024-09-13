<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDaoController;
use App\Http\Controllers\AdminDashboardController as Dash;
use App\Http\Controllers\AdminManageUserController;
use App\Http\Controllers\AdminManageAgencyController;
use App\Http\Controllers\AdminAddJobController;
use App\Http\Controllers\AdminSubJobController;

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


Route::get('Myadmin/addSubJob',[AdminSubJobController::class,'addjobSubCategory']);
Route::post('Myadmin/store_subjob',[AdminSubJobController::class,'store_subjob'])->name('store_subjob');

Route::view('Myadmin/allSubJob', 'Myadmin.allSubJob');
Route::view('Myadmin/feedback', 'Myadmin.feedback');
Route::view('Myadmin/inquiry', 'Myadmin.inquiry');
Route::view('Myadmin/reportAndAna', 'Myadmin.reportAndAna');
Route::view('Myadmin/resumeTemplate', 'Myadmin.resumeTemplate');
Route::view('Myadmin/settings', 'Myadmin.settings');
Route::view('Myadmin/login', 'Myadmin.login');
Route::post('Myadmin/login',[AdminDaoController::class,'admin_auth'])->name('login');
Route::view('Myadmin/addAdmin', 'Myadmin.addAdmin');
Route::post('Myadmin/addAdmin',[AdminDaoController::class,'addAdmin'])->name('addAdmin');

require __DIR__.'/auth.php';
