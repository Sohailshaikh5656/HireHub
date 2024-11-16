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
use App\Http\Controllers\AdminControllers\AdminResume;
use App\Http\Controllers\AdminControllers\AdmininquiryControllers;
use App\Http\Controllers\AdminControllers\AdminAllReportControllers;
//User Controllers
use App\Http\Controllers\UserControllers\UserControllers;
use App\Http\Controllers\UserControllers\ContactControllers;
use App\Http\Controllers\UserControllers\_AgencyController;
use App\Http\Controllers\UserControllers\UserProfileController;
use App\Http\Controllers\UserControllers\HomeController;
use App\Http\Controllers\UserControllers\JobController;

use App\Http\Controllers\UserControllers\UserResumeControlller;
use App\Http\Controllers\FeedbackController;


//Company controllers

use App\Http\Controllers\CompanyControllers\CompanyDashboardController;
use App\Http\Controllers\CompanyControllers\CompanyManageJobPosting;
use App\Http\Controllers\CompanyControllers\CompanyProfileControllers;

//PDF Controller
use App\Http\Controllers\PDFController;

//AJAX Controller
use App\Http\Controllers\AjaxImpControllers;

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
    return view('/user/Home');
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
    Route::get("Myadmin/blockUser/{id}",[AdminManageUserController::class,"userBlocking"]);
    Route::get("Myadmin/UnblockUser/{id}",[AdminManageUserController::class,"userUnBlocking"]);
    Route::get("Myadmin/userViewmore/{id}",[AdminManageUserController::class,"userViewmore"]);

    Route::get('Myadmin/userReport', [AdminManageUserController::class,'userReport']);
    Route::get('Myadmin/accept_reject_Company', [AdminManageAgencyController::class,'accept_reject']);
    Route::get("Myadmin/agencyAccept/{id}",[AdminManageAgencyController::class,'agencyAccept']);
    Route::get("Myadmin/agencyReject/{id}",[AdminManageAgencyController::class,'agencyReject']);
    Route::get("Myadmin/agencyBlock/{id}",[AdminManageAgencyController::class,'agencyBlock']);
    Route::get("Myadmin/agencyUnBlock/{id}",[AdminManageAgencyController::class,'agencyUnBlock']);
    Route::get("Myadmin/allBlockedCompany",[AdminManageAgencyController::class,'allBlockedCompany']);
    Route::get("Myadmin/companyViewmore/{id}",[AdminManageAgencyController::class,'companyViewmore']);


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
    Route::get('Myadmin/inquiry', [AdmininquiryControllers::class,"allInquiry"]);
    Route::get('Myadmin/reportAndAna',[AdminAllReportControllers::class,"maiReportPage"]);
    Route::get('Myadmin/resumeTemplate',[AdminResume::class,"resumeTemplate"]);
    Route::post("Myadmin/addResume",[AdminResume::class,"addResume"])->name("addResume");



    Route::view('Myadmin/settings', 'Myadmin.settings');
    Route::view('Myadmin/login', 'Myadmin.login');
    Route::post('Myadmin/login',[AdminDaoController::class,'admin_auth'])->name('login');
    Route::view('Myadmin/addAdmin', 'Myadmin.addAdmin');
    Route::post('Myadmin/addAdmin',[AdminDaoController::class,'addAdmin'])->name('addAdmin');


    Route::get("Myadmin/userReportsView",[AdminAllReportControllers::class,"userReportsView"]);
    Route::get("Myadmin/activeInactiveUser",[AdminAllReportControllers::class,"activeInactiveUser"]);
    Route::get("Myadmin/PDF_activeInactiveUser",[AdminAllReportControllers::class,"PDF_activeInactiveUser"]);

    Route::get("Myadmin/newUserRegistration",[AdminAllReportControllers::class,'newUserRegistration']);
    Route::get("Myadmin/PDF_newUserRegistration",[AdminAllReportControllers::class,"PDF_newUserRegistration"]);


    Route::get("Myadmin/jobListingView",[AdminAllReportControllers::class,'jobListingView']);
    Route::get("Myadmin/newJobListing",[AdminAllReportControllers::class,'newJobListing']);
    Route::get("Myadmin/PDF_newJobListing",[AdminAllReportControllers::class,"PDF_newJobListing"]);

    Route::get("Myadmin/topJobListing",[AdminAllReportControllers::class,"topJobListing"]);
    Route::get("Myadmin/PDF_topJobListing",[AdminAllReportControllers::class,"PDF_topJobListing"]);
    
    Route::get("Myadmin/expiresJob",[AdminAllReportControllers::class,'expiresJob']);
    Route::get("Myadmin/PDF_expiresJob",[AdminAllReportControllers::class,'PDF_expiresJob']);

    Route::get("Myadmin/CompanyReportsView",[AdminAllReportControllers::class,"CompanyReportsView"]);
    Route::get("Myadmin/newlyRegisterCompanies",[AdminAllReportControllers::class,"newlyRegisterCompanies"]);
    Route::get("Myadmin/activeInactiveAgency",[AdminAllReportControllers::class,"activeInactiveAgency"]);
    Route::get("Myadmin/PDF_activeInactiveAgency",[AdminAllReportControllers::class,"PDF_activeInactiveAgency"]);
    Route::get("Myadmin/PDF_newlyRegisterCompanies",[AdminAllReportControllers::class,"PDF_newlyRegisterCompanies"]);
    Route::get("Myadmin/loginAttempt",[AdminAllReportControllers::class,"loginAttempt"]);
    //Comapany Routes
    
    Route::get("Company/Dashboard",[CompanyDashboardController::class,'getDashboard']);
    
    Route::get("Company/newJobPosting",[CompanyManageJobPosting::class,'newJobPosting']);
    Route::post("Company/storeJobPosting",[CompanyManageJobPosting::class,'storeJobPosting'])->name('storeJobPosting');
    Route::get("Company/postViewmore/{id}",[CompanyManageJobPosting::class,'postViewmore']);
    Route::get('Company/postEdit/{id}',[CompanyManageJobPosting ::class,'postEdit'])->name('postEdit');
    Route::put("Company/updateJobPosting/{id}",[CompanyManageJobPosting::class,'updateJobPosting'])->name('updateJobPosting');
    Route::get('Company/postDelete/{id}',[CompanyManageJobPosting::class,'postDelete'] );


    Route::get("Company/manageJobPosting",[CompanyManageJobPosting::class,'manageJobPosting']);
    Route::get('Company/manageJobApplication', [CompanyManageJobPosting::class,'searchPosting']);
    Route::get('Company/viewAllApplication/{param}', [CompanyManageJobPosting::class,'viewAllApplication']);
    Route::get('Company/candidateViewmore/{id}',[CompanyManageJobPosting::class,'candidateViewmore']);
    Route::post('Company/search', [CompanyManageJobPosting::class,'search']);
    Route::get("Company/profile",[CompanyProfileControllers::class,'showProfile']);
    Route::get("Company/editProfile",[CompanyProfileControllers::class,'editProfile']);
    Route::put("Company/updateProfile",[CompanyProfileControllers::class,'updateProfile'])->name('updateProfile');
    
    Route::get("Company/certificatePage",[CompanyProfileControllers::class,'certificatePage']);
    Route::post("Company/addCertificate",[CompanyProfileControllers::class,'addCertificate']);
    Route::get("Company/editCertificate/{id}",[CompanyProfileControllers::class,'editCertificate']);
    Route::put("Company/updateCertificate/{id}",[CompanyProfileControllers::class,'updateCertificate'])->name("updateCertificate");
    

    Route::get('Company/shortListApplication/{id}', [CompanyManageJobPosting::class,'shortListApplication']);
    Route::get('Company/RejectApplication/{id}', [CompanyManageJobPosting::class,'RejectApplication']);
    Route::get("Company/userChoiceSearch",[CompanyManageJobPosting::class,'userChoiceSearch']);
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
    Route::get("user/applicationTrack",[UserProfileController::class,'applicationTrack']);
    Route::get("user/editUser/{id}",[UserProfileController::class,'userEdit']);
    Route::put("user/updateUser/{id}",[UserProfileController::class,'updateUser'])->name("updateUser");
    Route::get("user/editEducation/{id}",[UserProfileController::class,'editEducation']);
    Route::put("user/updateEducation/{id}",[UserProfileController::class,'updateEducation'])->name("updateEducation");
    Route::get("user/editExperience/{id}",[UserProfileController::class,'editExperience']);
    Route::put("user/updateExperience/{id}",[UserProfileController::class,'updateExperience'])->name("updateExperience");
    Route::get("user/editCertificate/{id}",[UserProfileController::class,'editCertificate']);
    Route::put("user/updateCertificate/{id}",[UserProfileController::class,'updateCertificate'])->name("updateCertificate");

    Route::get("user/feedback",[FeedbackController::class,"feedback"]);
    
    Route::post("user/feedbackStore",[FeedbackController::class,"feedbackStore"])->name("feedbackStore");
    Route::get("Myadmin/feedback",[FeedbackController::class,"showAllFeedback"]);
    Route::get("Myadmin/deleteFeedback/{id}",[feedbackController::class,"deleteFeedback"]);
    //Resume Handling
    Route::get("user/allResume",[UserResumeControlller::class,'allResume']);
    Route::get("user/resumeDesign/{id}",[UserResumeControlller::class,"selectedResume"]);
    Route::post("user/jobSearch",[HomeController::class,"jobSearch"])->name("jobSearch");

    Route::view("user/resumePage","user.resumeLandingPage");
    Route::get("user/aboutCompanies",[_AgencyController::class,"agencyViewmore"]);
    Route::get("user/companySearch/{id}",[_AgencyController::class,"companySearch"]);
    Route::post("user/SearchAgencies",[_AgencyController::class,"SearchAgencies"])->name("SearchAgencies");

    //Route for PDF View
    Route::get("/pdf/view",[PDFController::class,'pdfView'])->name("pdf.view");
    //Route to convert PDF
    Route::get("/pdf/convert",[PDFController::class,'pdfGeneration'])->name("pdf.convert");

    Route::post("/user/pdf/download",[PDFController::class,'downloadPDF']);
    
    Route::get("/user/dummy",[PDFController::class,'dummy']);
    

    //JS Route
    // web.php (routes file)
    //Route::get('/get-subcategories/{job_category_id}', [CompanyManageJobPosting::class, 'getSubCategories']);


    //Ajax Contrillers
    // web.php
    Route::get('/get-cities/{stateId}', [AjaxImpControllers::class, 'getCities']);
    Route::get('/get-sub_job/{jobId}', [AjaxImpControllers::class, 'getSubJob']);

});
require __DIR__.'/auth.php';
