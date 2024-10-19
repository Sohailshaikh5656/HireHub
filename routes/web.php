<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\AdminControllers\AdminDashboardController as Dash;
use App\Http\Controllers\AdminControllers\AdminManageUserController;
use App\Http\Controllers\AdminControllers\AdminManageAgencyController;
use App\Http\Controllers\AdminControllers\AdminAddJobController;
use App\Http\Controllers\AdminControllers\AdminSubJobController;
use App\Http\Controllers\AdminControllers\AdminLogoutController;
//User Controllers
use App\Http\Controllers\UserControllers\UserControllers;
use App\Http\Controllers\UserControllers\ContactControllers;
use App\Http\Controllers\UserControllers\_AgencyController;
use App\Http\Controllers\UserControllers\UserProfileController;
use App\Http\Controllers\UserControllers\HomeController;
use App\Http\Controllers\UserControllers\JobController;



//Company controllers

use App\Http\Controllers\CompanyControllers\CompanyDashboardController;
use App\Http\Controllers\CompanyControllers\CompanyManageJobPosting;

//PDF Controller
use App\Http\Controllers\PDFController;

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


Route::group(['middleware' => ['web']], function () {
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
    
    
    Route::get("Myadmin/logout",[AdminLogoutController::class,'logout']);
    
    
    Route::view('Myadmin/feedback', 'Myadmin.feedback');
    Route::view('Myadmin/inquiry', 'Myadmin.inquiry');
    Route::view('Myadmin/reportAndAna', 'Myadmin.reportAndAna');
    Route::view('Myadmin/resumeTemplate', 'Myadmin.resumeTemplate');
    Route::view('Myadmin/settings', 'Myadmin.settings');
    Route::view('Myadmin/login', 'Myadmin.login');
    Route::post('Myadmin/login',[AdminDaoController::class,'admin_auth'])->name('login');
    Route::view('Myadmin/addAdmin', 'Myadmin.addAdmin');
    Route::post('Myadmin/addAdmin',[AdminDaoController::class,'addAdmin'])->name('addAdmin');
    
    
    //Comapany Routes
    
    Route::get("Company/Dashboard",[CompanyDashboardController::class,'getDashboard']);
    
    Route::get("Company/newJobPosting",[CompanyManageJobPosting::class,'newJobPosting']);
    Route::post("Company/storeJobPosting",[CompanyManageJobPosting::class,'storeJobPosting'])->name('storeJobPosting');
    Route::get("Company/postViewmore/{id}",[CompanyManageJobPosting::class,'postViewmore']);
    Route::get('Company/postEdit/{id}',[CompanyManageJobPosting ::class,'postEdit'])->name('postEdit');
    Route::put("Company/updateJobPosting/{id}",[CompanyManageJobPosting::class,'updateJobPosting'])->name('updateJobPosting');
    Route::get('Company/postDelete/{id}',[CompanyManageJobPosting::class,'postDelete'] );


    Route::get("Company/manageJobPosting",[CompanyManageJobPosting::class,'manageJobPosting']);
    Route::view('Company/manageJobApplication', 'Company.pages.manageJobApplication');
    
    
    Route::get('Company/logout',[CompanyDashboardController::class,'logout']);
    
    
    //User Routes
    
    Route::get("user/Home",[HomeController::class,"Home"]);
    Route::get("user/login",[UserControllers::class,'loginPage']);
    Route::post("user/userAuthChk",[UserControllers::class,'userAuthChk'])->name('userAuthChk');
    
    Route::get("user/register",[UserControllers::class,'register']);
    Route::post("user/regsiterUser",[UserControllers::class,'regsiterUser'])->name('regsiterUser');
    Route::post("user/userAuthChk",[UserControllers::class,'userAuthChk'])->name('userAuthChk');
    Route::get("user/logout",[UserControllers::class,'logout']);
    Route::view("user/addProfile","user.addUserProfile");
    
    
    Route::view("user/about","user.about");
    Route::get("user/singleJobPage/{id}",[JobController::class,'singleJobPage']);
    Route::get("/user/apply/{id}",[JobController::class,"apply"]);

    Route::get("user/contact",[ContactControllers::class,'contactPage']);
    Route::post("user/contactStore",[ContactControllers::class,'contactStore'])->name('contactStore');
    
    Route::get("user/companyLogin",[_AgencyController::class,'agencyLoginPage']);
    
    Route::get("user/companyRegister",[_AgencyController::class,'agencyRegisterPage']);
    Route::post("user/regsiterAgency",[_AgencyController::class,'regsiterAgency'])->name('regsiterAgency');
    Route::post("user/agencyAuthChk",[_AgencyController::class,'agencyAuthChk'])->name('agencyAuthChk');


    Route::get("user/userProfile",[UserProfileController::class,'userProfile']);
    Route::get("user/addEducation",[UserProfileController::class,'addEducationPage']);
    Route::post("user/storeEducation",[UserProfileController::class,'storeEducation'])->name("storeEducation");

    Route::get("user/addCertificte",[UserProfileController::class,'addCertificte']);
    Route::post("user/storecertificate",[UserProfileController::class,'storecertificate'])->name("storecertificate");

    Route::get("user/addExperience",[UserProfileController::class,'addExperiencePage']);
    Route::post("user/storeExperience",[UserProfileController::class,'storeExperience'])->name("storeExperience");

    Route::get("user/addSkill",[UserProfileController::class,'addSkill']);
    Route::post("user/storeSkill",[UserProfileController::class,'storeSkill'])->name("storeSkill");

   

    //Route for PDF View
    Route::get("/pdf/view",[PDFController::class,'pdfView'])->name("pdf.view");
    //Route to convert PDF
    Route::get("/pdf/convert",[PDFController::class,'pdfGeneration'])->name("pdf.convert");

    //JS Route
    // web.php (routes file)
    //Route::get('/get-subcategories/{job_category_id}', [CompanyManageJobPosting::class, 'getSubCategories']);
});
require __DIR__.'/auth.php';
